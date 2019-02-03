<?php 
 include 'connexion_pdo.php';
class register
{

    public function inscription()
    {
        $data = new co();
        $database = $data->test();

        if (isset($_POST['display_name']) && isset($_POST['username']) 
		&& isset($_POST['password']) && isset($_POST['email']) && isset($_POST['birthdate']))
		{

            $sql = $database->prepare('INSERT INTO users (username, display_name, users.password, email, 
            birthdate) 
VALUES (:username, :display_name, :pass, :email, :birthdate)');

            $username = $_POST['username'];
            $display_name = $_POST['display_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthdate'];

            $password = password_hash($password, PASSWORD_BCRYPT);

            $sql->execute([':username' => $username, ':display_name' => $display_name, 
            ':pass' => $password, ':email' => $email, ':birthdate' => $birthdate]);
        }
    }
}

class log_in
{

    public function log()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('SELECT username, password FROM users WHERE username=:username');

        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->execute();

        $pass = $sql->fetch();
        $is_password = $pass['password'];

        if (password_verify($pwd, $is_password)) {
            echo 'Le mot de passe est valide !';
            session_start();
            $_SESSION['username'] = $username;
            return true;
        } else {
            echo 'Le mot de passe est invalide.';
            return false;
        }
    }

    public function session()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('SELECT * FROM users WHERE username=:username');

        $username = $_SESSION['username'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->execute();

        $session = $sql->fetch();
        return $session;
    }
}

class change
{
    public function change_username()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET username=:username WHERE username=:user');

        $username = $_POST['username'];
        $user = $_SESSION['username'];
        $_SESSION['username'] =  $username;

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':user', $user, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_display_name()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET display_name=:display_name WHERE username=:username');

        $display_name = $_POST['display_name'];
        $username = $_SESSION['username'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':display_name', $display_name, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_email()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET email=:email WHERE username=:username');

        $email = $_POST['email'];
        $username = $_SESSION['username'];

        $sql->bindValue(':email', $email, PDO::PARAM_STR);
        $sql->bindValue(':username', $username, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_phone()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO users (phone) 
        VALUES (:phone) WHERE username=:username');

        $phone = $_POST['phone'];
        $username = $_SESSION['username'];

        $sql->bindValue(':phone', $phone, PDO::PARAM_INT);
        $sql->bindValue(':username', $username, PDO::PARAM_STR);

        $sql->execute();

    }

    public function change_localisation()
    {

        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET localisation=:localisation WHERE username=:username');

        $localisation = $_POST['localisation'];
        $username = $_SESSION['username'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':localisation', $localisation, PDO::PARAM_STR);

        $sql->execute();
    }


    public function change_bio()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET bio=:bio WHERE username=:username');
        

        $bio = $_POST['bio'];
        $username = $_SESSION['username'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':bio', $bio, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_website()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO users (website) 
        VALUES (:website) WHERE username=:username');

        $website = $_POST['website'];
        $username = $_SESSION['username'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':website', $website, PDO::PARAM_STR);

        $sql->execute();
    }

    /*public function delete()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET e_mail=:null_del WHERE username=:username');


        $null = $_POST['delete'];
        $email = $_SESSION['email'];

        $sql->bindValue(':null_del', $null, PDO::PARAM_NULL);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);

        $sql->execute();
    }*/
}

class tweet
{
    public function post_tweet()
    {
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO tweets (content, id_user, tweet_date) VALUES (:content, :id_user, NOW())');
        
        $content = $_POST['content'];
        $id_user = $_SESSION['id_user'];

        $sql->bindValue(':id_user', $id_user, PDO::PARAM_INT);
        $sql->bindValue(':content', $content, PDO::PARAM_STR);

        $sql->execute();
    }

    public function get_tweet(){
    $data = new co();
    $database = $data->test();
    $sql = $database->prepare('SELECT content, tweet_date, tweets.id_user FROM tweets 
    INNER JOIN users ON tweets.id_user = users.id_user WHERE tweets.id_user = :id_user');
    $sql->bindValue(':id_user', $_SESSION['id_user']);
    $sql->execute();
    $result = $sql->fetchAll();
    return $result;
}
}
/*class tweete
{
   public function tweeter(){

       $data = new co();
       $database = $data->test();

       $sql = $database->prepare('SELECT * FROM users INNER JOIN tweets ON users.id_user = tweets.id_user');
       $sql->execute();

       if (isset($_POST["tweet"]) && !empty($_POST["tweet"])) {

           $sql = $database->prepare('INSERT INTO tweets (content, id_user, tweet_date) VALUES (:content, :id_user, :tweet_date)');

           $content = $_POST['tweet'];
           $tweet_date = date("Y-m-d H:i:s");
           $id_user = $_SESSION['id_user'];


           $sql->execute(
               [
                   ':content' => $content,
                   ':id_user' => $id_user,
                   ':tweet_date' => $tweet_date
               ]
           );
       }
   }
}*/
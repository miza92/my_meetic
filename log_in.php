
<?php 

class register
{
    public function inscription()
    {
        include 'connexion_pdo.php';
        $data = new co();
        $database = $data->test();

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

class log_in
{

    public function log()
    {
        include 'connexion_pdo.php';
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

        include 'connexion_pdo.php';
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
        include 'connexion_pdo.php';
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET username=:username WHERE username=:username');

        session_start();

        $username = $_POST['username'];
        $username = $_SESSION['usename'];

        $sql->bindValue(':username', $email, PDO::PARAM_STR);
        $sql->bindValue(':username', $city, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_display_name()
    {
        include 'connexion_pdo.php';
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET display_name=:display_name WHERE username=:username');

        session_start();

        $display_name = $_POST['display_name'];
        $username = $_SESSION['username'];

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':display_name', $display_name, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_email()
    {
        include 'connexion_pdo.php';
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET email=:email WHERE username=:username');

        session_start();

        $email = $_POST['email'];
        $username = $_SESSION['username'];

        $sql->bindValue(':email', $email, PDO::PARAM_STR);
        $sql->bindValue(':username', $username, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_phone()
    {
        include 'connexion_pdo.php';

        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO users (phone) 
        VALUES (:phone) WHERE username=:username');

        session_start();

        $phone = $_POST['phone'];
        $username = $_SESSION['username'];

        $sql->bindValue(':phone', $phone, PDO::PARAM_STR);
        $sql->bindValue(':username', $username, PDO::PARAM_STR);

        $sql->execute();

    }

    public function change_localisation()
    {
        include 'connexion_pdo.php';

        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO users (localisation) 
        VALUES (:localisation) WHERE username=:username');

        session_start();

        $localisation = $_POST['localisation'];
        $username = $_SESSION['username'];

        password_hash($pass, PASSWORD_BCRYPT);

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':localisation', $localisation, PDO::PARAM_STR);

        $sql->execute();
    }


    public function change_bio()
    {
        include 'connexion_pdo.php';

        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO users (bio) 
        VALUES (:bio) WHERE username=:username');

        session_start();

        $bio = $_POST['bio'];
        $username = $_SESSION['username'];

        password_hash($pass, PASSWORD_BCRYPT);

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':bio', $bio, PDO::PARAM_STR);

        $sql->execute();
    }

    public function change_website()
    {
        include 'connexion_pdo.php';

        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('INSERT INTO users (website) 
        VALUES (:website) WHERE username=:username');

        session_start();

        $website = $_POST['website'];
        $username = $_SESSION['username'];

        password_hash($pass, PASSWORD_BCRYPT);

        $sql->bindValue(':username', $username, PDO::PARAM_STR);
        $sql->bindValue(':website', $website, PDO::PARAM_STR);

        $sql->execute();
    }

    public function delete()
    {
        include 'connexion_pdo.php';

        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET e_mail=:null_del WHERE username=:username');

        session_start();

        $null = $_POST['delete'];
        $email = $_SESSION['email'];

        $sql->bindValue(':null_del', $null, PDO::PARAM_NULL);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);

        $sql->execute();
    }
}

?>

<?php 

class register
{
    public function inscription()
    {
        include 'connexion_pdo.php';
        $data = new co();
        $database = $data->test();

            $sql = $database->prepare('INSERT INTO users (username, display_name, password, email) 
VALUES (:username, :display_name, :password, :email)');

            $username = $_POST['username'];
            $display_name = $_POST['display_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $password = password_hash($password, PASSWORD_BCRYPT);
            $sql->execute([':username' => $username, ':display_name' => $display_name, 
            ':password' => $password, ':email' => $email]);
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

?>
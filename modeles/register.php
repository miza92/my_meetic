<?php 
class register
{
    public function inscription()
    {
        $data = new Connexion();
        $database = $data->test();

        if (isset($_POST['username']) && isset($_POST['password']) 
		&& isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']))
		{

            $sql = $database->prepare('INSERT INTO fiche_personne2 (username, password, nom, prenom, email) 
VALUES (:username, :password, :nom, :prenom, :email)');

            $username = $_POST['username'];
            $password = $_POST['password'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];            
            $email = $_POST['email'];

            $password = password_hash($password, PASSWORD_BCRYPT);

            $sql->execute([':username' => $username, ':password' => $password, ':nom' => $nom, ':prenom' => $prenom, 
             ':email' => $email]);
        }
    }
}
/*
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
}*/
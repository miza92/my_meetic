
<?php 

class register
{
    public function inscription()
    {
        include 'connexion_pdo.php';
        $data = new co();
        $database = $data->test();

            $sql = $database->prepare('INSERT INTO users (username, display_name, password, email, phone) 
VALUES (:username, :display_name, :password, :email, :phone,)');


            $username = $_POST['username'];
            $display_name = $_POST['display_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $password = password_hash($password, PASSWORD_BCRYPT);
            $sql->execute([':username' => $username, ':display_name' => $display_name, 
            ':password' => $password, ':email' => $email, ':phone' => $phone]);
            header('location: login.php');
        }
    }
}

?>
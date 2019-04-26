<?php
class Connexion
{
    public function test()
    {
        try {
            $database = new PDO('mysql:host=127.0.0.1;dbname=cloud', 'root', 'root');
        } catch
        (Exception $e) {
            die('ERROR :' . $e->getMessage());
        }
        return $database;
    }
}
?>
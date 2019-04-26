<?php
function connect_db() {
    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=my_meetic;charset=utf8","root","root");
        return $pdo;
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
}
?>

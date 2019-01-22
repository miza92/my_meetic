<?php
class co
{
    public function test()
    {
        try {
            $database = new PDO('mysql:host=127.0.0.1;dbname=tweet_academy', 'root', 'root');
        } catch
        (Exception $e) {
            die('ERROR :' . $e->getMessage());
        }
        return $database;
    }
}


?>
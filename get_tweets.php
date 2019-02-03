<?php 

include 'log_in.php';
session_start();

$tweets = new tweet();
echo json_encode($tweets->get_tweet());
?>
<?php

include 'log_in.php';
session_start();
$session = new log_in();
$tab = $session->session();
$_SESSION['username'] = $tab['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"><!--Encodage latin de la page -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de rencontre"/>
    <link rel="stylesheet" type="text/css" href="./css/styles_home.css">
    <title>Twitter</title>
</head>

<body>

<div class="navigation">
    <div class="logo">
        <a href="#Home"><img src="./img/logo.png" alt="Logo twitter"></a>
    </div>
    <span class="navMenu"><i class="fa fa-bars fa-2x"></i></span>
    <div>
        <ul>
            <li class="active">
                <a href="#Home">
                    <span class="texteMenu">&nbsp;Home</span>
                </a>
            </li>
            <li class="">
                <a href="#Notifications">
                    <span class="texteMenu">&nbsp;Notifications</span>
                </a>
            </li>
            <li class="">
                <a href="#Messages">
                    <span class="texteMenu">&nbsp;Messages</span>
                </a>
            </li>
            <li class="">
                <a href="edit.php">
                    <span class="texteMenu">Edit your account</span>
                </a>
            </li>
           
        </ul>
    </div>
</div>
</body>
</html>
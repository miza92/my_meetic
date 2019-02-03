<?php

include 'log_in.php';
session_start();
$session = new log_in();
$tab = $session->session();
$_SESSION['id_user'] = $tab['id_user']; 
$_SESSION['username'] = $tab['username'];
$_SESSION['display_name'] = $tab['display_name'];
$_SESSION['email'] = $tab['email'];
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"><!--Encodage latin de la page -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Site de rencontre"/>
		<link rel="icon" href="./img/logo.png"/>
		<link rel="stylesheet" type="text/css" href="./css/home_page.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap-reboot.min.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<!-- CDN -->
		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
		crossorigin="anonymous">
		<!-- js scipts-->
		<title>Tweet academie</title>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-brand">
                <img src="./img/logo.png" style="width: 40px; height: 40px;">
                <a class="btn btn-primary" href="index_page.php" role="button">Sign Out</a>
                <a class="btn btn-primary" href="home_page.php">Home</a>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">search</button>
            </form>
        </nav>
	</head>
	<body class="body">


<form method="post" action="tweet.php">
    <input name="content" maxlength="140">
    <button type="submit" value ="submit" name="submit_tweet">Tweet</button>
</form>
<?php include 'post_tweet.php';?>


    </body>
</html>
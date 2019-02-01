<?php
include 'log_in.php';
session_start();
$session = new log_in();
$tab = $session->session();
$tweet = new tweete();
$tweet->tweeter();
$_SESSION['id_user'] = $tab['id_user']; 
$_SESSION['username'] = $tab['username'];
$_SESSION['display_name'] = $tab['display_name'];
$_SESSION['email'] = $tab['email'];
$_SESSION['phone'] = $tab['phone'];
$_SESSION['bio'] = $tab['bio'];
$_SESSION['localisation'] = $tab['localisation'];
$_SESSION['website'] = $tab['website'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"><!--Encodage latin de la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Site de rencontre"/>
        <link rel="icon" href="./img/logo.png"/>
        <link rel="stylesheet" type="text/css" href="./css/sidebar.css"> 
        <link rel="stylesheet" type="text/css" href="./css/styles.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
        <title>Twitter</title>  
    </head>
    <body class="body">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="navbar-brand">
                    <img src="./img/logo.png" style="width: 40px; height: 40px;">
                    <a class="btn btn-primary" href="index.php" role="button">Home</a>
                    <a class="btn btn-primary" href="">Contact us</a>
                    <a href="#" class="btn btn-primary" id="edit_account">Tweeter</a>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">search</button>
                </form>
            </nav>
        </header>
        <div id="wrapper">
        <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <p>
                            Welcome
                        </p>
                    </li>
                    <li>
                        <p>Username : <?php echo $_SESSION['username']?></p>
                    </li>
                    <li>
                        <p>Display name : <?php echo $_SESSION['display_name'];?></p>
                    </li>
                    <li>
                        <p>Bio : <?php echo $_SESSION['bio']?></p>
                    </li>
                    <li>
                        <p>Email : <?php echo $_SESSION['email']?></p>
                    </li>
                    <li>
                        <p>Phone : <?php echo $_SESSION['phone']?></p>
                    </li>
                    <li>
                        <p>Localisation : <?php echo $_SESSION['localisation']?></p>
                    </li>
                    <li>
                        <p>Website : <?php echo $_SESSION['website']?></p>
                    </li>
                    <div><a class="text-white" href="edit.php">Edit your account</a></div>
                    <div><a class="text-white" href="tweet.php">Post a tweet</a></div>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle sidebar</a>
                            <nav class="navbar navbar-dark bg-primary">
                                <form class="form-inline my-2 my-lg-0">
                                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Go</button>
                                    <input class="form-control col-8" type="search" placeholder="What's new ?">
                                </form>
                            </nav>  
                            <br />                 
                            <div class="card w-75 text-left" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <div class ="text-right">
                                        <a href="#" class="btn btn-primary">follower</a>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="card w-75 text-left" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <div class ="text-right">
                                        <a href="#" class="btn btn-primary">follower</a>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="card w-75 text-left" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <div class ="text-right">
                                        <a href="#" class="btn btn-primary">follower</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                // On cache la zone de texte
                jQuery('#edit').hide();
                // toggle() lorsque le lien avec l'ID #edit_account est cliqué
                jQuery('a#edit_account').click(function() {
                    jQuery('#edit').toggle();
                        return false;
                });
            });
        </script>
        <div id="edit">
            <div class="container">
                <form class="form-horizontal" role="form" method="POST" action="">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h2>Write a new Tweet</h2>
                            <hr>
                            <textarea name="tweeter" id="tweeter" minlength="2" maxlength="140" rows="4" cols="50"></textarea>
                            <br />
                            <button type="submit" class="btn btn-primary btn-sm">OK</button>
                            <input type="reset" class="btn btn-primary btn-sm active" name="effacer" value="wipe off" />
                            <input type="button" class="btn btn-primary btn-sm active" name="action" value="Cancel" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 field-label-responsive">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
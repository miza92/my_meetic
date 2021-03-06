    <?php

   
    session_start();
    include 'log_in.php';
    include 'sign_out.php';
    include 'post_tweet.php';
    $session = new log_in();
    $tab = $session->session();
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
        <link rel="stylesheet" type="text/css" href="home_page.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
        <title>Twitter</title>  
    </head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand">
            <img src="./img/logo.png" style="width: 40px; height: 40px;">
            <a class="btn btn-primary" href="home_page.php" role="button">Home</a>
            <a class="btn btn-primary" href="">Contact us</a>
            <a class="btn btn-primary" href="tweet.php">Tweet</a>
            <form method="post" action="">
            <button type="submit" class="btn btn-primary" name="sign_out">Sign Out</button>
            </form>
            
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
                <div><a class="text-white" href="historic.php">Historic</a></div>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Welcome</h1>
                        <p>BLALALABAAB.</p>
                        <p>BLABLABLA<code>BLABLA</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <div id="tweet">
        </div>

    </div>
    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->
     <script src='script.js'></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <?php

    include 'log_in.php';
    session_start();
    $session = new log_in();
    $tab = $session->session();
    $SESSION['id_user'] = $tab['id_user']; 
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
        <meta name="description" content="Site de rencontre"/>
        <link rel="icon" href="./img/logo.png"/>
        <link rel="stylesheet" type="text/css" href="./css/styles_home.css">
        <link rel="stylesheet" type="text/css" href="./css/home_page.css">
        <title>Twitter</title>
    </head>

    <body>


    <h1>Welcome</h1>

    <p>Username : <?php echo $_SESSION['username']?><p>
    <p>Display name : <?php echo $_SESSION['display_name'];?><p>
    <p>Bio : <?php echo $_SESSION['bio']?><p>
    <p>Email : <?php echo $_SESSION['email']?><p>
    <p>Phone : <?php echo $_SESSION['phone']?><p>
    <p>Localisation : <?php echo $_SESSION['localisation']?><p>
    <p>Website : <?php echo $_SESSION['website']?><p>


    <div><a href="edit.php">Edit your account</a></div>
    <div><a href="tweet.php">Post a tweet</a></div>

   
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>
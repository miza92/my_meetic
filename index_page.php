<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"><!--Encodage latin de la page -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Site de rencontre"/>
		<link rel="icon" href="./img/logo.png"/>
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap-reboot.min.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<!-- CDN -->
		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- js scipts-->
		<script src="./js/script.js"></script>
		<title>Tweet academie</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="navbar-brand">
					<img src="./img/logo.png" style="width: 40px; height: 40px;">
					<a class="btn btn-primary" href="register.php" role="button">Register</a>
					<a class="btn btn-primary" href="">Contact us</a>
				</div>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="search">
					<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">search</button>
				</form>
			</nav>
		</header>
		<div class="container">
			<div class="container1">
				<h4>Find out what's going on in the world in real time</h4>
			</div>
			<div id="login-row" class="row justify-content-center align-items-center">
				<div id="login-column" class="col-md-6">
					<div class="box">
					<div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
						<div class="float">
							<form class="form" action="index_page.php" method="post">
								<div class="form-group">
									<label for="username" class="text-white">Username:</label><br>
									<input type="text" name="username" id="username" class="form-control">
								</div>
								<div class="form-group">
									<label for="password" class="text-white">Password:</label><br>
									<input type="password" name="password" id="password" class="form-control">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
								</div>
							</form>
                            <?php include 'log_in.php';

                            if (isset($_POST['username']) && isset($_POST['password'])) {
                                $login = new log_in();
                                if($login->log()) {
                                    header("Location: home_page.php");
                                }
                                else {
                                    echo "<script>alert('Invalid username or password')</script>";
                                }
                            }
                            ?>
						</div>
					</div>
				</div>
			</div>
			<br /><br /><br /><br /><br /><br /><br /><br />
		</div>
	</body>
</html> 	
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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
		<!-- js scipts-->
		<script src="./js/script.js"></script>
		<title>Tweet academie</title>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-brand">
                <img src="./img/logo.png" style="width: 40px; height: 40px;">
                <a class="btn btn-primary" href="register.php" role="button">Login</a>
                <a class="btn btn-primary" href="index.php">Home</a>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">search</button>
            </form>
        </nav>
	</head>
	<body class="body">
		<div class="container">
			<form class="form-horizontal" role="form" method="post" action="register.php">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h2>Register yourself</h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="username">@Username *</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
								<input type="text" name="username" class="form-control" id="username"
								placeholder="Please enter your @username" minlength="4" maxlength="40"
                                       required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								Veuillez remplir tous les Champs requis *
							<!-- Les champs doivent contenir une langeur minimin
							de 4 caractères et maximum de 40 caractères: -->
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="display_name">Display Name *</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
								<input type="text" name="display_name" class="form-control" id="display_name"
								placeholder="Please enter your display_name" minlength="4" maxlength="40"
                                       required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
							<!-- Put name validation error messages here Veuillez rentrer votre prénom-->
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="email">E-Mail *</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
								<input type="email" name="email" class="form-control" id="email" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								<!-- Put e-mail validation error messages here -->
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="password">Password *</label>
					</div>
					<div class="col-md-6">
						<div class="form-group has-danger">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
								<input type="password" name="password" class="form-control" id="password"
                                       minlength="4" maxlength="40" required>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								<i class="fa fa-close">
								<!-- Veuillez remplir tous les Champs requis * -->
								</i>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i>
                            Inscription</button>
					</div>
				</div>
			</form>
			<?php include 'log_in.php';
		if (isset($_POST['display_name']) && isset($_POST['username']) 
		&& isset($_POST['password']) && isset($_POST['email']))
		{
            $register = new register();
            $register->inscription();
		}
		else{
			echo "FAIL !!!"; 
		}
        ?>
		</div>
	</body>
</html>
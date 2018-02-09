<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<![endif]-->
			<title>LSPD</title>
			<!-- BOOTSTRAP CORE STYLE  -->
			<link href="assets/css/bootstrap.css" rel="stylesheet" />
			<!-- FONT AWESOME STYLE  -->
			<link href="assets/css/font-awesome.css" rel="stylesheet" />
			<!-- CUSTOM STYLE  -->
			<link href="assets/css/style.css" rel="stylesheet" />
			<!-- GOOGLE FONT -->
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		</head>
		<?php include( "config.php"); session_start(); if (isset($_SESSION[ 'id'])) { 
		
		if($_SESSION['procureur'] == 0 and $_SESSION['Admin'] == 0){
		 	$statut = 0;
			header( "Location: bracelet.php?statut=".$statut);
			} else {
				echo '
		
		<body>
			<div class="navbar navbar-inverse set-radius-zero" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="https://i.imgur.com/BQoTEoz.png" width=180 height=70/>
						</a>
					</div>
					<div class="right-div">
						<a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
					</div>
				</div>
			</div>
			<!-- LOGO HEADER END-->
			<section class="menu-section">
				<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<div class="navbar-collapse collapse ">
								<ul id="menu-top" class="nav navbar-nav navbar-right">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="add_criminal.php">Ajouter un criminel</a>
									</li>
									<li>
										<a href="bracelet.php" class="menu-top-active">Bracelet</a>
									</li>
										<li>
											<a href="trello" target="_blank">Enquetes</a>
										</li>
										<li>
											<a href="plaque" target="_blank">Plaques</a>
										</li>
										<li>
											<a href="drive" target="_blank">Infortations Internes</a>
										</li>
									</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- MENU SECTION END-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Ajouter un Bracelet
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_bracelet_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">First and Surname *</label> :
								<p class="help-block">ex: John Cena</p>
								<input type="text" name="nom" id="nom" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Telephone *</label> :
								<p class="help-block">ex 555-12345</p>
								<input type="text" name="telephone" id="telephone" class="form-control" />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Date de fin *</label> :
								<p class="help-block">2012-12-21</p>
								<input type="date" name="date" id="date" class="form-control" />
								<br />
							</div>
							<input type="submit" value="Send" class="btn btn-info />
						</p>
					</form>
					<p></p>
					<img src="assets/img/lspdlogo.png" align="center">
					</div>
				</div>
				<!-- CONTENT-WRAPPER SECTION END-->
				<section class="footer-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
                   &copy; 2017 LSPD |
								<a href="https://www.youtube.com/user/davendrix" target="_blank"  > Coded by : Davendrix</a>
								| Updated by : Glen McMahon
							</div>
						</div>
					</div>
				</section>
				<!-- FOOTER SECTION END-->
				<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
				<!-- CORE JQUERY  -->
				<script src="assets/js/jquery-1.10.2.js"></script>
				<!-- BOOTSTRAP SCRIPTS  -->
				<script src="assets/js/bootstrap.js"></script>
			</body>';
			 }} else { header( "Location: login.php"); } ?>
		</html>
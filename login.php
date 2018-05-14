<!DOCTYPE html>

<html lang="en">
<head>
	<title>Se connecter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<!-- Login CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style2.css">

</head>

<body class="animsition">

<?php 
	require 'header.php'; 
?>
<!-- Login -->
	
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg); height:50%;">
		<h2 class="l-text2 t-center">
			Se connecter maintenant!
		</h2>
	</section>
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="logmod">
					<div class="logmod__wrapper">
						<div class="logmod__container">
							<ul class="logmod__tabs">
								<li data-tabtar="lgm-2"><a href="#">Se connecter</a></li>
								<li data-tabtar="lgm-1"><a href="#">S'inscrire</a></li>
							</ul>
							<div class="logmod__tab-wrapper">
								<div class="logmod__tab lgm-1">
									<div class="logmod__heading">
										<span class="logmod__heading-subtitle">Entrer vos details personnels <strong> pour cr&eacute;er un compte</strong></span>
									</div>
									<div class="logmod__form">
										<form accept-charset="utf-8" action="inc/verif-sign.php" method="POST" class="simform">
										<div class="sminputs">
											<div class="input full">
												<label class="string optional" for="user-name">Nom*</label>
												<input class="string optional" maxlength="255" id="user-nom" placeholder="Nom" type="text" name="nom" size="50" required />
											</div>
										</div>
										<div class="sminputs">
											<div class="input full">
												<label class="string optional" for="user-name">Pr&egrave;nom*</label>
												<input class="string optional" maxlength="255" id="user-prenom" placeholder="Prénom" type="text" name="prenom" size="50" required />
											</div>
										</div>
										<div class="sminputs">
											<div class="input full">
												<label class="string optional" for="user-name">Email*</label>
												<input class="string optional" maxlength="255" id="user-email" placeholder="email" type="email" name="email" size="50" required />
											</div>
										</div>
										<div class="sminputs">
											<div class="input string optional">
												<label class="string optional" for="user-pw">Mot de passe *</label>
												<input class="string optional" maxlength="255" id="user-pw" placeholder="Mot de passe" name="mdp" type="password" size="50" />
											</div>
											<div class="input string optional">
												<label class="string optional" for="user-pw-repeat">Confirmer mot de passe *</label>
												<input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Confirmer mot de passe"  name="remdp" type="password" size="50" />
											</div>
										</div>
											<div class="simform__actions">
												<?php if(isset($_GET['mdpError']) and $_GET['mdpError']==1){ ?>
												<p class="m-text12 p-b-36 p-t-15" style="color:red; width:500px;">Mot de passe non identique!!!</p>
												<?php }?>
											  <input class="sumbit" name="commit" type="submit" value="Créer un compte" />
											  <span class="simform__actions-sidetext">En cr&eacute;ant un compte vous acceptez notre <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
											</div> 
										</form>
									</div> 
									
								 </div>
								<div class="logmod__tab lgm-2">
									<div class="logmod__heading">
									  <span class="logmod__heading-subtitle">Entrer votre email et mot de passe <strong>pour se connecter</strong></span>
									</div> 
									<div class="logmod__form">
									  <form accept-charset="utf-8" action="inc/verif-login.php" method="POST" class="simform">
										<div class="sminputs">
										  <div class="input full">
											<label class="string optional" for="user-name">Email*</label>
											<input class="string optional" maxlength="255" id="user-email" placeholder="email" type="email" name="email" size="50" />
										  </div>
										</div>
										<div class="sminputs">
										  <div class="input full">
											<label class="string optional" for="user-pw">Mot de passe *</label>
											<input class="string optional" maxlength="255" id="user-pw" placeholder="mot de passe" type="password" name="mdp" size="50" />
																	<span class="hide-password">Show</span>
										  </div>
										</div>
										<div class="simform__actions">
										<?php if(isset($_GET['error']) and $_GET['error']==1){ ?>
											<p class="m-text12 p-b-36 p-t-15" style="color:red; width:500px;">Mot de passe incorrect!!!</p>
										<?php }else if(isset($_GET['error']) and $_GET['error']==2){?> 
											<p class="m-text12 p-b-36 p-t-15" style="color:red; width:500px;">Pseudo ou mot de passe incorrect!!!</p>
										<?php }else if(isset($_GET['success']) and $_GET['success']==1){?> 
											<p class="m-text12 p-b-36 p-t-15" style="color:green; width:500px;">Votre compte a &eacute;t&eacute; cr&eacute;er avec succ&egrave;s!!!</p>
										<?php }	?>
										  <input class="sumbit" name="commit" type="submit" value="Se connecter" />
										  <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Mot de passe oubli&eacute;?<br>Cliquez ici</a></span>
										</div> 
									  </form>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
		<?php require 'footer.php' ; ?>
	<!-- Footer -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>
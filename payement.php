<?php
	session_start();
	require_once('inc/model.php');
	require_once('inc/panier_model.php');

    
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
	}
	$user = getIdUserByName($_SESSION['username']);
	$daty = '2018-02-08';
	$mt = getMontant($user, $daty);
	//echo "montant total = ".$mt;
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Vos payement</title>
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
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css">

<!-- Milligram -->
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>
<body class="animsition">	
	
	<!-- Header -->
    <?php 
		require('header.php');
	?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading01.jpg);">
		<h2 class="l-text2 t-center">
			Paiement
		</h2>
			</section>

			<!-- Cart -->
			<div class="container">
				<div class="row">
					<table>
					  <thead>
						<tr>
						  <th>Numero Facture</th>
						  <th>Age</th>
						  <th>Height</th>
						  <th>Location</th>
						  <th>Sélection</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>Stephen Curry</td>
						  <td>27</td>
						  <td>1,91</td>
						  <td>Akron, OH</td>
						  <td><button style="background-color:green;" data-izimodal-open="#modal">Effectuer payement</button></td>
						</tr>
						<tr>
						  <td>Klay Thompson</td>
						  <td>25</td>
						  <td>2,01</td>
						  <td>Los Angeles, CA</td>
						  <td><button style="background-color:green;" data-izimodal-open="#modal">Effectuer payement</button></td>
						</tr>
					  </tbody>
					</table>
				</div>
		<!-- Modal Trigger -->
		
		  <!-- Modal Structure -->
		 
		
		 <!-- Modal structure -->
		<div id="modal" class="iziModal">
			<div class="col-md-12">
				<form action="#" method="POST" class="leave-comment">
					<h4 class="m-text26 p-b-36 p-t-15">
						Formulaire de paiement
					</h4>
					
					<div class="bo4 of-hidden size15 m-b-20">
						<label for="montant">Montant:</label>
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="montant" placeholder="Montant à payer...">
					</div>
					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="paiement" placeholder="Mode paiement...">
					</div>
					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="categorie" placeholder="sous categorie...">
					</div>

					<div class="w-size25">
						<div class="row">
							<div class="col-md-4">
								<!-- Button -->
								<button style="background-color:black;" data-izimodal-close="" data-izimodal-transitionout="bounceOutDown">
									Close
								</button>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<button style="background-color:green;" >
									Valider
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>		 
		<!-- Trigger to open Modal -->
		
	</br>
	
	</div>

	<!-- Footer -->
		<?php require 'footer.php' ; ?>
	<!-- Footer -->

	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.js"></script>
	<script>
		$("#modal").iziModal({
			title: '',
			subtitle: '',
			headerColor: '#88A0B9',
			background: null,
			theme: '',  // light
			icon: null,
			iconText: null,
			iconColor: '',
			rtl: false,
			width: 600,
			top: null,
			bottom: null,
			borderBottom: true,
			padding: 0,
			radius: 3,
			zindex: 999,
			iframe: false,
			iframeHeight: 400,
			iframeURL: null,
			focusInput: true,
			group: '',
			loop: false,
			arrowKeys: true,
			navigateCaption: true,
			navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
			history: false,
			restoreDefaultContent: false,
			autoOpen: 0, // Boolean, Number
			bodyOverflow: false,
			fullscreen: false,
			openFullscreen: false,
			closeOnEscape: true,
			closeButton: true,
			appendTo: 'body', // or false
			appendToOverlay: 'body', // or false
			overlay: true,
			overlayClose: true,
			overlayColor: 'rgba(0, 0, 0, 0.4)',
			timeout: false,
			timeoutProgressbar: false,
			pauseOnHover: false,
			timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
			transitionIn: 'comingIn',
			transitionOut: 'comingOut',
			transitionInOverlay: 'fadeIn',
			transitionOutOverlay: 'fadeOut',
			onFullscreen: function(){},
			onResize: function(){},
			onOpening: function(){},
			onOpened: function(){},
			onClosing: function(){},
			onClosed: function(){},
			afterRender: function(){}
		});
	</script>
</body>
</html>

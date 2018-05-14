<?php
  	session_start();
	require_once('inc/model.php');
	require_once('inc/panier_model.php');

	
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}

	$user = getIdUserByName($_SESSION['username']);
	date_default_timezone_set('UTC'); 
	$daty = date("Y-m-d") ;
//   $daty = '2018-02-08';
	$mt = getMontant($user, $daty);
	//echo "montant total = ".$mt;
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Facture</title>
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

</head>
<body class="animsition">	
	<!-- Header -->
    <?php 
		require('header.php');
	?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Facture
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 ">
		<div class="container">
			<!-- Cart item -->
			<!-- Total -->
				<h5 class="text-center m-text20 p-b-24">
					Total Paniers
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Montant actuel:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php echo $mt;?>Ar
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Livraison:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
                        Il n'y a pas de méthodes d'expédition disponibles. S'il vous plaît vérifiez votre adresse, ou contactez-nous si vous avez besoin d'aide.
						</p>

						<span class="s-text19">
							Calcule Livraison
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                            <?php
                                $listRegion = select_sql('Region','2<5');
                            ?>
                            <select class="selection-2" name="country">
								<option>Selectionner un pays...</option>
                                <?php foreach($listRegion AS $region) {?>
                                    <option value="<?php echo $region['ID'] ; ?>" ><?php echo $region['nom']." | ".$region['codePays']; ?></option>
                                <?php } ?>
								
							</select>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<div class="size14 trans-0-4 m-b-10">
                    <!-- Button -->
                    <a href="finalFacture.php" class="button flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Facture
                    </a>
                </div>
		</div>
	</section>

	<!-- Footer -->
		<?php require 'footer.php' ; ?>
	<!-- Footer -->

</body>
</html>

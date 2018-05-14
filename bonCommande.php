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
		
	$mt = getMontant($user, $daty);
	$dateDeb = getDateDeb($user, $daty);
	$idLocation = select_sql("Location", "daty = '".$daty."' order by ID desc");
	//var_dump($idLocation);
	if($idLocation[0]['ID']==null){
		//var_dump($idLocation);
		header('Location: cart.php');
	}
	$tempo =  select_sql("LocationDetail", "idLocation = ".$idLocation[0]['ID']);
	//var_dump($tempo);
	
	$daty1 = $tempo[0]['dateDebut'];
	$daty2 = $tempo[0]['dateFin'];
	//echo "montant total = ".$mt;
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Bon de commande</title>
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

</head>
<body class="animsition">	
	<!-- Header -->
	<?php 
		require('header.php');
    ?>
	
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 ">
		<div class="container">
			<!-- Cart item -->
			<!-- Total -->
				
				<h5 class="text-center m-text20 p-b-24">
				 Livraison:
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Date de début de Location:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php echo $dateDeb;?>
					</span>
				</div>
				<div class="flex-w flex-sb-m p-b-12">	
					<span class="s-text18 w-size19 w-full-sm">
						Montant total actuel du location(HT):
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php echo $mt." Ar (du ".$daty1." au ".$daty2.")";?>
					</span>
				</div>
			<form method="POST" id="myForm">
				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Livraison:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
                         Les méthodes d'expédition disponibles. S'il vous plaît vérifiez votre adresse, ou contactez-nous si vous avez besoin d'aide.
						</p>

						<span class="s-text19">
							Calcule Livraison
						</span>
						<?php
								$listRegion = select_sql('Region','2<5');
								$tva = select_sql('TVA', '3>1');
						?>
						<div class="flex-w flex-sb-m p-b-12">
							<span class="s-text18 w-size19 w-full-sm">
								TVA:
							</span>

							<span class="m-text21 w-size20 w-full-sm ">
								<?php echo $tva[0]['valeur'].'%';?>
							</span>
						</div>

						<div class="form-group selection-2">
							<label for="sel1">Selectionner votre region:</label>
							<select class="form-control region" id="sel1" name="region" id="region">
								<option>Selectionner un pays...</option>
								<?php foreach($listRegion AS $region) {?>
                                    <option value="<?php echo $region['ID'] ; ?>" ><?php echo $region['nom']." | ".$region['codePays']; ?></option>
                                <?php } ?>
							</select>
						</div> 
						<?php
                                $listAgence = select_sql('Agence2','2<5');
						?>
						<div class="form-group selection-3">
							<label for="sel2">Choisissez votre agence de transport: <img src="img/dhl.jpg" class="img-rounded" alt="dhl" width="75px" height="60px">  <img src="img/fedex.jpg" width="105px" height="70px" class="img-rounded" alt="dhl"></label>
							<select class="form-control agence" name="agence" id="agence">
								<option>Selectionner votre expéditeur...</option>
								<?php foreach($listAgence AS $agence) {?>
                                    <option value="<?php echo $agence['ID'] ; ?>" ><?php echo $agence['nom'].' | '.$agence['prix'].' Ariary (par colis)' ; ?></option>
                                <?php } ?>
							</select>
						</div>
						<div class="size16 bo4 m-b-12">
							<input class="sizefull s-text5 p-l-15 p-r-15" type="text" name="adresse" placeholder="Adresse postal">
						</div>

						<div class="flex-w flex-sb-m p-b-12">
							<span class="s-text18 w-size19 w-full-sm">
								Prix du transport (HT):
							</span>

							<span class="m-text15 w-size20 w-full-sm prixTransport" id="prixTransport">
									<?php echo $mt.".00Ar + "?><span class="total">0.00Ar</span>(frais de transport)
							</span>
						</div>
						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="myFunction()">
								Valider
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm prixTransport" id="prixTransport">
						<?php echo $mt.".00Ar + "?><span class="total">0.00Ar</span>(frais de transport)
					</span>						
				
				</div>

				<div class="size14 trans-0-4 m-b-10">
                    <!-- Button -->
                    <a href="finalFacture.php" class="button flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Facture
                    </a>
                </div>
			</form>
		</div>
	</section>

<!-- Footer -->
	<?php require("footer.php"); ?>
<!-- End Footer -->
	<script>
		function myFunction() {
			var txt;
			var r = confirm("Voulez-vous vraiment continuer!");
			var form1 = document.getElementById("myForm");

			if (r == true) {
				form1.action = "inc/valid_bonLivraison.php?dateDeb=<?php echo $dateDeb;?>&prix=<?php echo $mt;?>";
				
			} else {
				form1.action = "bonCommande.php";
				
			}
			//document.getElementById("demo").innerHTML = txt;
		}	
	</script>

	<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			console.log("quelque chose");
			$(".agence").change(function() {
				console.log("quelque chose");
				var parent = $(this).val();
				var prixtrans = document.querySelector(".total");
				//alert(<?php echo getPrixAgence(2);?>+ parent);
				switch(parent){
					case '1':
						prixtrans.innerHTML="100000.00Ar";
						console.log(prixtrans);
					break;
				  	case '2':
					  	prixtrans.innerHTML="50000.00Ar";
						console.log(prixtrans);
					break;
					default:
						prixtrans.innerHTML="60000.00Ar";
						console.log(prixtrans);
					break;
				}
				
			});
			//document.getElementById("demo").innerHTML = txt;
		});	
	</script>
</body>
</html>

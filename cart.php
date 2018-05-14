<?php
	session_start();
	require_once('inc/model.php');
	require_once('inc/panier_model.php');

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Location</title>
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
	require 'header.php';
?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Votre location
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<form action="inc/valid_location.php" method="POST">
				<div class="container-table-cart pos-relative">
					<div class="wrap-table-shopping-cart bgwhite">
						<table class="table-shopping-cart">
							<tr class="table-head">
								<th class="column-1"></th>
								<th class="column-2">V&Eacute;HICULE</th>
								<th class="column-3 p-l-70">DATE D&Eacute;BUT</th>
								<th class="column-4 p-l-70">DATE FIN</th>
								<th class="column-5">Prix Unitaire/jour(s)</th>
								
								<th class="column-6">Total</th>
								<th class="column-7">Action</th>
							</tr>
						<?php 
						if(isset($_SESSION['panier'])){

						for($i=0 ; $i<sizeOf($_SESSION['panier']['nomPanier']); $i++){ ?>
							<tr class="table table-bordered">
								<td class="column-1">
									<div class="cart-img-product b-rad-4 o-f-hidden">
										<img src="images/item-10.jpg" alt="IMG-PRODUCT">
									</div>
								</td>
								<td class="column-2"><?php echo $_SESSION['panier']['nomPanier'][$i]; ?></td>
								
								<td class="column-3">
									<div class="row">
										<input type="date" name="dateDebut<?php echo($i); ?>" class="form-control" id="usr">
									</div>
								</td>
								<td class="column-4">
									<div class="row">
										<input type="date" name="dateFin<?php echo($i); ?>" class="form-control" id="usr">
									</div>
								</td>
								<td class="column-5"><span id="pu<?php echo($i); ?>"><?php echo $_SESSION['panier']['puPanier'][$i]; ?></span>Ar</td>
								<td class="column-6"><span id="tt<?php echo($i); ?>"><?php echo $_SESSION['panier']['puPanier'][$i]; ?></span>Ar</td>
								<td class="column-7">
								<div class="size10 trans-0-4 m-t-10 m-b-10">
									<!-- Button -->
									<a href="inc/suppr.php?panier=<?php echo($_SESSION['panier']['nomPanier'][$i]); ?>" >
									supprimer
									</a>
								</div>
								</td>
							</tr>
						<?php if($i==sizeOf($_SESSION['panier']['nomPanier'])-1){?>
							<td class="column-1"></td>
							<td class="column-2"></td>
							<td class="column-3"></td>
							<td class="column-4"></td>
							<td class="column-5">=<span id="totatPanier"><?php echo MontantGlobal();?></span>Ar</td>
							<td class="column-6"></td>
						
						<?php } 
						}

						}else { ?>
						<tr>
							<p>Veuillez ajouter une location avant de continuer, svp!!!</p>
						</tr>
						<?php } ?>			
						</table>
					</div>
				</div>

				<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
					<div class="flex-w flex-m w-full-sm">
						

						<!--<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
							Button 
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Apply coupon
							</button>
						</div>-->
					</div>	
				
					

					<div class="size10 trans-0-4 m-t-10 m-b-10">
						<!-- Button -->
						<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Valider le panier">
						Valider le panier
						</button>
					</div>
				</div>
			</form>
		<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="index.php"><Button class="button flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Continuer achat
					</Button></a>
		</div>
			<!-- Total -->
		
	</section>



	<!-- Footer -->
	<?php
		require("footer.php");
	?>

	<script type="text/javascript">
		<?php
			$taille =  sizeOf($_SESSION['panier']['nomPanier']);
		?>	var pu = [];
			var nb = [];
			var tt = [];

			var minus = [];
			var plus = [];
		
		for(i=0; i < <?php echo $taille;?> ; i++){
			pu[i] = document.getElementById("pu"+i);
			nb[i] = document.getElementById("nb"+i);
			tt[i] = document.getElementById("tt"+i);

			minus[i] = document.getElementById("btnDown"+i);
			plus[i] = document.getElementById("btnUp"+i);
		}
		
		var totatPanier = document.getElementById('totatPanier');

		var refreshPrix = function(){
			var tot = 0;
			for (i = 0; i < <?php echo $taille;?>; i++) { 
				//pu[i] = document.getElementById("pu"+i);
				var npu = parseFloat(pu[i].innerHTML);
				var nnb = parseFloat(nb[i].value);
				var ntt = npu * nnb;
				tot+=ntt;
				tt[i].innerHTML = ntt;
			}
			totatPanier.innerHTML = tot;
			/*var npu = parseFloat(pu.innerHTML);
			var nnb = parseFloat(nb.value);
			var ntt = npu * nnb;
			
			tt.innerHTML = ntt;
			*/
		};
		for (i = 0; i < <?php echo $taille;?>; i++) { 
			minus[i].addEventListener('click', function(e){
			
				refreshPrix();
			
			});

			plus[i].addEventListener('click', function(e){
			
				refreshPrix();
			
			});
		}
		refreshPrix();
	</script>
</body>
</html>

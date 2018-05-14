<?php
	session_start();
	require_once('inc/model.php');
	require_once('inc/panier_model.php');


	$username = "";
	
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
	$vehicules = select_sql("vehicule", "idCategorie = 1");
	//echo 'taille = '.sizeOf($vehicules);
	
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
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


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
				
			<div class="row">
				
				
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									Tous
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Prestige
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Familliale
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Voyage
								</a>
							</li>

						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filtrer
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Prix
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
									Filtrer
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>
						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Par date
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="row">
								  <div class="col-md-6">
									<div class="input-group">
									  <input type="date" class="form-control" >
									</div><!-- /input-group -->
								  </div><!-- /.col-lg-6 -->
								  <div class="col-md-6">
									<div class="input-group">
									  <input type="date" class="form-control" >
									  
									</div><!-- /input-group -->
								  </div>
								  <span class="input-group-btn">
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4" type="button">Valider</button>
								  </span><!-- /.col-lg-6 -->
								</div><!-- /.row -->
							</div>
						</div>
						<div class="search-product pos-relative bo4 of-hidden">
							<form action="#" method="POST">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Chercher une voiture...">

								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
									<i class="fs-12 fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Trier par d&eacutefaut</option>
									<option>Prix: bas vers haut</option>
									<option>Prix: haut vers bas</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Prix</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Montrez 1–12 of 16 resulats
						</span>
					</div>

					<!-- Product -->
					<div class="row">
							<?php foreach($vehicules AS $vehicule){?>
										<!-- Block2 -->
									<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
										<div class="block2">
											<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
												<img src="images/item-02.jpg" alt="IMG-PRODUCT">

												<div class="block2-overlay trans-0-4">
													<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
														<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
														<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
													</a>
														
													<div class="block2-btn-addcart w-size1 trans-0-4">
														<!-- Button -->
														
														<?php 
															$img = "item-02.jpg";
															
														?>
														<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 minus-btn" onclick="addCart_function(
														'<?php echo $vehicule['ID'];?>','<?php echo $vehicule['nom'];?>','<?php echo $vehicule['pu'];?>','<?php echo $img;?>')" >
															Louer
														</button>
													</div>
												</div>
											</div>

											<div class="block2-txt p-t-20">
												<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
													<?php echo $vehicule['nom']; ?>
												</a>

												<span class="block2-price m-text6 p-r-5">
													<?php echo $vehicule['pu']." Ar"; ?>
												</span>
											</div>
										</div>
									</div>
							<?php } ?>
					</div>
					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
		<?php require("footer.php"); ?>
	<!-- End Footer -->
	
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "a été ajouté dans la location !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "a été ajouté comme favoris !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 10000, 2000000 ],
	        connect: true,
	        range: {
	            'min': 10000,
	            'max': 2000000
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
</body>
</html>
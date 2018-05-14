	
	<?php 
	require_once('inc/ajout-panier.php');
	date_default_timezone_set('UTC'); 
	if(isset($_GET['nom'])){ 
	//session_start();
	
	if(!isset($_SESSION['username'])){
		header('Location : login.php');
	}
	$datydeb = date("Y-m-d");
	$datyfin = date("Y-m-d");

	ajouterArticle($_GET['nom'], $datydeb, $datyfin, $_GET['pu'], $_GET['img']);

	
	?>
	<li class="header-cart-item">
		<div class="header-cart-item-img">
			<img src="images/<?php echo $_GET['img'];?>" alt="IMG">
		</div>

		<div class="header-cart-item-txt">
			<a href="#" class="header-cart-item-name">
				<?php echo $_GET['nom'];?>
			</a>

			<span class="header-cart-item-info" id="">
				1 x <?php echo $_GET['pu']." Ar";?>
			</span>
		</div>
	</li>
	<?php }?>
	
	
	
	
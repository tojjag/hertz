<?php
	//require_once('inc/model.php');
	//require_once('inc/panier_model.php');
	//require_once('inc/ajout-panier.php');

?>


<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="http://www.facebook.com" class="topbar-social-item fa fa-facebook"></a>
					<a href="http://www.instagram.com" class="topbar-social-item fa fa-instagram"></a>
					<a href="http://www.pinterest.com" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="http://www.snapchat.com" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="http://www.youtube.com" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					" Louer et voyager vers de nouvelle Horizon "
				</span>

				<div class="topbar-child2">
					<span class="topbar-email rs1-select2">
						
						<?php if(isset($_SESSION['username'])){?>
							
							<ul class="sub-menu">
								<li> <?php echo $_SESSION['username']; ?></li>
								<li><a href="deconnexion.php">se deconnecter</a></li>
							</ul>
						<?php } ?>
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option value="1">Ariary</option>
							<option value="2">EUR</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo2.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="product.php">Nos Locations</a>
							</li>							
							<li>
								<a href="product.php">Nos Ventes</a>
							</li>
							<li>
								<a href="payement.php">Vos payement</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<?php if(!isset($_SESSION['username'])){?>
						<a href="login.php" class="header-wrapicon1 dis-block">
							<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
					<?php } ?>
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="indice">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">								
								<div id="txtHint"> Voir le panier s'il vous plaît!!! </div>
							</ul>

							<div class="header-cart-total">
								<div id="total" > </div>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Voir panier
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="bonCommande.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Facturation
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<div id="txtHint" > </div>
							</ul>

							<div class="header-cart-total">
								<div id="total" > </div>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Voir panier
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="bonCommande.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Facturation
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
						" Louer et voyager vers de nouvelle Horizon "
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email rs1-select2">
								
								<?php if(isset($_SESSION['username'])){?>
									
									<ul class="sub-menu">
										<li> <?php echo $_SESSION['username']; ?></li>
										<li><a  href="deconnexion.php">se deconnecter</a></li>
									</ul>
								<?php } ?>
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option value="1">Ariary</option>
									<option value="2">EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="http://www.facebook.com" class="topbar-social-item fa fa-facebook"></a>
							<a href="http://www.instagram.com" class="topbar-social-item fa fa-instagram"></a>
							<a href="http://www.pinterest.com" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="http://www.snapchat.com" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="http://www.youtube.com" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Home</a>
					</li>
					<li class="item-menu-mobile">
						<a href="product.php">Nos Locations</a>
					</li>							
					<li class="item-menu-mobile">
						<a href="product.php">Nos Ventes</a>
					</li>
					<li class="item-menu-mobile">
						<a href="payement.php">Vos payement</a>
					</li>
				</ul>
			</nav>
		</div>
</header>
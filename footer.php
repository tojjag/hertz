<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
		
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					<a href="index.php">
						<img src="images/icons/footer.png" alt="IMG-LOGO">
					</a>
				</h4>
				<!-- Logo -->
				
				<div>
					<p class="s-text7 w-size27">
						Notre equipe: Angelo, Gimmy, Jason, James, Tsiky, Onitsoa
					</p>

					<div class="flex-m p-t-30">
						<a href="http://www.facebook.com" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="http://www.instagram.com" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="http://www.pinterest.com" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="http://www.snapchat.com" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="http://www.youtube.com" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Famille
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Prestige
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sport
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Voyage
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Liens
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Recherche
						</a>
					</li>

					<li class="p-b-9">
						<a href="apropos.php" class="s-text7">
							A propos de nous
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Contactez nous
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="product.php" class="s-text7">
							Nos ventes
						</a>
					</li>

					<li class="p-b-9">
						<a href="product.php" class="s-text7">
							Nos locations
						</a>
					</li>

					<li class="p-b-9">
						<a href="product.php" class="s-text7">
							Nos Agences
						</a>
					</li>

					<li class="p-b-9">
						<a href="apropos.php" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="email" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>
					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							S'abonner
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>


<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		
		
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
		
		function increment() {
			var indice = Number(document.getElementById("indice").innerHTML);
			console.log("indice = "+indice);
			indice+=1;
			console.log("indice + 1 = "+indice);
			document.getElementById("indice").innerHTML = indice;
		}
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
	<script src="js/addcart.js"></script>
<!--===============================================================================================-->
<!--	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>-->
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
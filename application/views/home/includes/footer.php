	<footer>
		<style type="text/css">
			.persegipanjang {
				width: 250px;
				height: 100px;
				margin: 0 auto;
				margin-top: 5%;
			}

			.persegipanjang img,
			.kotak img {
				width: 100%;
				height: 100%;
			}

			.kotak {
				width: 150px;
				height: 150px;
				margin: 0 auto !important;
				margin-top: 5%;
			}

			.logos {
				padding: 6%;
			}
		</style>

		<div class="row" style="background-color: rgba(0, 0, 0, 0.7); margin-right 15px !important;">
			<div class="col-12" >
				<div id="sosmed">
					<a href="https://pudinglab.id" target="_blank"><img src="<?= base_url() ?>assets/home/logo_puding.png" alt="Logo"></a>
					<div style="margin-left: 32px;">© PudingLab 2022</div>
				</div>
      
			</div>
		</div><!-- End row -->
	</footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->

	<!-- SLIDER REVOLUTION SCRIPTS  -->
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/home/rev-slider-files/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript">
		var tpj = jQuery;

		var revapi54;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_54_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_54_1");
			} else {
				revapi54 = tpj("#rev_slider_54_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "<?= base_url() ?>assets/home/rev-slider-files/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "off",
						touch: {
							touchenabled: "on",
							touchOnDesktop: "off",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "uranus",
							enable: true,
							hide_onmobile: true,
							hide_under: 778,
							hide_onleave: true,
							hide_delay: 200,
							hide_delay_mobile: 1200,
							tmp: '',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 20,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 20,
								v_offset: 0
							}
						}
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [700, 550, 860, 480],
					lazyType: "none",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
						disable_onmobile: "on"
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle: "off",
					autoHeight: "off",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/

		/* ==============================================
			Sticky nav
		=============================================== */
		$(window).scroll(function() {
			'use strict';
			if ($(this).scrollTop() > 1) {
				$('header').addClass("sticky");
			} else {
				$('header').removeClass("sticky");
			}
		});

		/* ==============================================
			Menu
		=============================================== */
		$('a.open_close').on("click", function() {
			$('.main-menu').toggleClass('show');
			$('.layer').toggleClass('layer-is-visible');
		});
		$('a.show-submenu').on("click", function() {
			$(this).next().toggleClass("show_normal");
		});
		$('a.show-submenu-mega').on("click", function() {
			$(this).next().toggleClass("show_mega");
		});
		if ($(window).width() <= 480) {
			$('a.open_close').on("click", function() {
				$('.cmn-toggle-switch').removeClass('active')
			});
		}

		$(window).bind('resize load', function() {
			if ($(this).width() < 991) {
				$('.collapse#collapseFilters').removeClass('in');
				$('.collapse#collapseFilters').addClass('out');
			} else {
				$('.collapse#collapseFilters').removeClass('out');
				$('.collapse#collapseFilters').addClass('in');
			}
		});

		/* ==============================================
			Overaly mask form + incrementer
		=============================================== */
		$('.expose').on("click", function(e) {
			"use strict";
			$(this).css('z-index', '4');
			$('#overlay').fadeIn(300);
		});
		$('#overlay').click(function(e) {
			"use strict";
			$('#overlay').fadeOut(300, function() {
				$('.expose').css('z-index', '3');
			});
		});
	</script>

	<!-- <script src="js/notify_func.js"></script> -->

	</body>

	</html>
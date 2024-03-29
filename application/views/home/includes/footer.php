
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-5 order-last order-lg-first">

							<div class="widget">

								<img src="<?= base_url('assets') ?>/logo.png" style="position: relative; opacity: 0.85; left: -10px; max-height: 80px; margin-bottom: 20px;" alt="Footer Logo">

								<p>
									<strong>STEEL FIRE DOOR</strong> produksi <strong>PT Guna Cahaya Teknik</strong> akan memenuhi kebutuhan keamanan Ruangan dalam berbagai Fungsi.
								Dalam dunia Arsitek perlunya penggunaan Steel Fire Door adalah sebagai Akses keadaan darurat ataupun Keamanan suatu ruangan dari hal kejadian yang tidak diinginkan salah satunya adalah kebakaran
								</p>
								<div class="line" style="margin: 30px 0;"></div>

								<p class="ls-1 fw-light" style="opacity: 0.6; font-size: 13px;">Copyrights &copy; <?= date('Y') ?> <strong>PT Guna Cahaya Teknik</strong></p>

							</div>

						</div>

						<div class="col-lg-7">

							<div class="row col-mb-50">
								<div class="col-md-6">
								</div>

								<div class="col-md-6">
									<h4 class="ls-1 fw-normal text-uppercase">Alamat</h4>

									<?= $alamat->value ?>
								</div>
							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url('assets/home')?>/js/plugins.min.js"></script>
	<script src="<?= base_url('assets/home')?>/js/functions.bundle.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="<?= base_url('assets/home')?>/js/components/bs-select.js"></script>

	<!-- Bootstrap Switch Plugin -->
	<script src="<?= base_url('assets/home')?>/js/components/bs-switches.js"></script>

	<!-- Range Slider Plugin -->
	<script src="<?= base_url('assets/home')?>/js/components/rangeslider.min.js"></script>

	<script>
		jQuery(document).ready(function(){
			jQuery(".price-range-slider").ionRangeSlider({
				type: "double",
				prefix: "$",
				min: 200,
				max: 10000,
				max_postfix: "+"
			});

			jQuery(".area-range-slider").ionRangeSlider({
				type: "double",
				min: 50,
				max: 20000,
				from: 50,
				to: 20000,
				postfix: " sqm.",
				max_postfix: "+"
			});

			jQuery(".bt-switch").bootstrapSwitch();
		});
	</script>

</body>
</html>
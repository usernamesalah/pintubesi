<!-- Slider
		============================================= -->
<section id="slider" class="slider-element min-vh-60 min-vh-md-100 dark include-header include-topbar">
	<div class="slider-inner">

		<div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
			data-arrows="false" data-pagi="false" style="background-color: #333;">
			<div class="flexslider">
				<div class="slider-wrap">
					<?php if (!empty($home_img)): ?>
						<?php foreach ($home_img as $himg): ?>
							<div class="slide"
								style="background: url('<?= base_url($himg->url) ?>') center center; background-size: cover;">
							</div>
						<?php endforeach; ?>
					<?php else: ?>
						<div class="slide"
							style="background: url('<?= base_url('assets/home') ?>/real-estate/images/hero/3.jpg') center center; background-size: cover;">
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="vertical-middle">
			<div class="container text-center">
				<div class="emphasis-title m-0">
					<h1>STEEL FIRE DOOR SPESIALIST</h1>
				</div>
			</div>
		</div>

		<div class="video-wrap">
			<div class="video-overlay real-estate-video-overlay"></div>
		</div>

	</div>
</section><!-- #slider end -->

<!-- Content
		============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container">


			<div style="position: relative;">
				<div class="heading-block border-bottom-0">
					<h3>Produk </h3>
				</div>

				<a href="<?= base_url('product') ?>"
					class="button button-small button-rounded button-border button-border-thin fw-medium m-0"
					style="position: absolute; top: 7px; right: 0;">Lihat Semua</a>

				<div class="real-estate owl-carousel image-carousel carousel-widget mb-6" data-margin="10"
					data-nav="true" data-loop="true" data-pagi="false" data-items-xs="1" data-items-sm="1"
					data-items-md="2" data-items-lg="3" data-items-xl="3">

					<?php foreach ($products as $product): ?>
						<div class="oc-item">
							<div class="real-estate-item">
								<div class="real-estate-item-image">
									<div class="badge bg-danger bg-color2">Fire Steel Door</div>
									<a href="<?= base_url('product/detail/' . $product->id) ?>">
										<img src="<?= base_url() . $product->foto ?>"
											onerror=" this.src = 'https://placehold.co/250';" alt="Image 1">
									</a>
								</div>

								<div class="real-estate-item-desc">
									<h3><a href="<?= base_url('product/detail/' . $product->id) ?>">
											<?= $product->nama ?>
										</a></h3>
									<span>
										<?= $product->kategori ?>
									</span>
									<div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
									<div class="real-estate-item-features fw-medium font-primary text-end">
										<a href="https://wa.me/<?= $whatsapp->value ?>?text=halo?"
											class="button button-border button-rounded button-green"><i
												class="bi-whatsapp"></i> Pesan Sekarang</a>

									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>


			<div class="line"></div>

			<div class="heading-block border-bottom-0">
				<h3>Kenapa Harus Pesan dikami?</h3>
			</div>
			<div class="row col-mb-50">
				<div class="col-sm-6 col-lg-4">
					<div class="feature-box fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-my-house"></i></a>
						</div>
						<div class="fbox-content">
							<h3 class="fw-normal">Hassle Free</h3>
							<p>Easy customization</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="feature-box fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-hammer"></i></a>
						</div>
						<div class="fbox-content">
							<h3 class="fw-normal">Well Constructed</h3>
							<p>It has gone through a 2-hour fire resistance test</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="feature-box fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-garage"></i></a>
						</div>
						<div class="fbox-content">
							<h3 class="fw-normal">Guaranteed</h3>
							<p>Timeliness of production and delivery and guaranteed</p>
						</div>
					</div>
				</div>

				<!-- <div class="col-sm-6 col-lg-4">
					<div class="feature-box fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-rent"></i></a>
						</div>
						<div class="fbox-content">
							<h3 class="fw-normal">Flexible Rentals</h3>
							<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
								Background.</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="feature-box fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-credit"></i></a>
						</div>
						<div class="fbox-content">
							<h3 class="fw-normal">Easy Financing</h3>
							<p>Display your Content attractively using Parallax Sections that have unlimited
								customizable Tebal Plat Daun Pintus.</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="feature-box fbox-plain">
						<div class="fbox-icon">
							<a href="#"><i class="icon-realestate-doc"></i></a>
						</div>
						<div class="fbox-content">
							<h3 class="fw-normal">Solid Paperwork</h3>
							<p>You have complete easy control on each &amp; every element that provides endless
								customization possibilities.</p>
						</div>
					</div>
				</div> -->
			</div>


		</div>
	</div>
</section><!-- #content end -->

<section id="client" style="margin-bottom: 100px !important;" class="mt-5">

	<h3 class="text-center">Our Client</h3>

	<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget owl-loaded owl-drag p-5"
		data-margin="30" data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xs="3" data-items-sm="3"
		data-items-md="5" data-items-lg="6" data-items-xl="7" style="align-items:center;">

		<div class="owl-stage-outer" style="display: flex; justify-content: center;">
			<div class="owl-stage"
				style="transform: translate3d(-2074px, 0px, 0px); transition: all 0.25s ease 0s; width: 3112px; display: flex; justify-content: center; align-items: center;">
				<?php foreach($clients as $client) : ?>
				<div class="owl-item" style="width: 229.259px; margin-right: 30px;">
					<div class="oc-item"><img src="<?= base_url($client->image) ?>" onerror=" this.src = 'https://placehold.co/100';" alt="<?= $client->nama ?>"></div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
					class="uil uil-angle-left-b"></i></button><button type="button" role="presentation"
				class="owl-next"><i class="uil uil-angle-right-b"></i></button></div>
		<div class="owl-dots disabled"></div>
	</div>


</section>

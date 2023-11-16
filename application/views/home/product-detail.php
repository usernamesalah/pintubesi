<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="single-product">
                <div class="product">
                    <div class="row gutter-40">

                        <div class="col-md-4">

                            <!-- Product Single - Gallery
                                    ============================================= -->
                            <div class="product-image">
                                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap" data-lightbox="gallery">
                                            <?php foreach ($product->image as $im): ?>
                                                <div class="slide" data-thumb="<?= base_url() . $im ?>"><a
                                                        href="<?= base_url() . $im ?>"
                                                        title="<?= $product->nama ?> - Front View"
                                                        data-lightbox="gallery-item"><img src="<?= base_url() . $im ?>"
                                                            alt="<?= $product->nama ?>"></a></div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class="col-md-8 product-desc">

                            <div class="d-flex align-items-center justify-content-between">

                                <!-- Product Single - Price
                                        ============================================= -->
                                <div class="product-price">
                                    <?= $product->nama . " - " . $product->kategori ?>
                                </div>
                                <!-- Product Single - Price End -->
                            </div>
                            <div class="line"></div>
                            <p>
                                <?= $product->deskripsi ?>
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="iconlist fw-medium">
                                        <li class="border border-success py-2 px-3 rounded"><i
                                                class="bi-check-circle-fill"></i>
                                            <span>Ukuran :
                                                <?= $product->ukuran ?>
                                            </span>
                                        </li>
                                        <?php if ( isset($product->tebal_daun_pintu) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Tebal Daun Pintu:
                                                    <?= $product->tebal_daun_pintu ?> mm
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->tebal_plat_daun_pintu) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Tebal Plat Daun Pintu / Kisi :
                                                    <?= $product->tebal_plat_daun_pintu ?> mm
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->tebal_plat_kusen_pintu) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Tebal Plate Kusen:
                                                    <?= $product->tebal_plat_kusen_pintu ?> mm
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->overlap_bibir_pintu) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Overlap Bibir Pintu:
                                                    <?= $product->overlap_bibir_pintu ?> mm
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->tebal_frame_kisi) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Tebal Frame Kisi:
                                                    <?= $product->tebal_frame_kisi ?> mm
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->tebal_rangka_pintu) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Tebal Rangka Pintu:
                                                    <?= $product->tebal_rangka_pintu ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="iconlist fw-medium">
                                        <?php endif; ?>
                                        <?php if ( isset($product->insulation) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Insulation:
                                                    <?= $product->insulation ?>
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->engsel) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Engsel:
                                                    <?= $product->engsel ?>
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <li class="border border-success py-2 px-3 rounded"><i
                                                class="bi-check-circle-fill"></i>
                                            <span>Fire Rated:
                                                <?= $product->fire_rated ?> Jam
                                            </span>
                                        </li>
                                        <?php if ( isset($product->aksesoris) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Aksesoris
                                                    <?= $product->aksesoris ?>
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ( isset($product->sliding_gear) ): ?>
                                            <li class="border border-success py-2 px-3 rounded"><i
                                                    class="bi-check-circle-fill"></i>
                                                <span>Sliding Gear:
                                                    <?= $product->sliding_gear ?>
                                                </span>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <!-- Product Single - Meta
                                    ============================================= -->
                            <div class="card product-meta">
                                <div class="card-body text-end">
                                    <a href="#" class="button button-border button-rounded button-green"><i
                                            class="bi-whatsapp"></i> Pesan Sekarang</a>
                                </div>
                            </div><!-- Product Single - Meta End -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
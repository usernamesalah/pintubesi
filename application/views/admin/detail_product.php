<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">
                <?= $product->nama . " - " . $product->kategori ?>
            </h5>
            <div class="row">
                <div class="col-6 col-md-6">
                    <img src="<?= base_url($product->foto) ?>" class="card-img-top mb-3" width="80%">
                    <?php if ( isset($product->insulation) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Insulation</span>
                            <h6 class="fw-semibold mb-1">
                                <?= $product->insulation ?>
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->engsel) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Engsel</span>
                            <h6 class="fw-semibold mb-1">
                                <?= $product->engsel ?>
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->fire_rated) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Fire Rated</span>
                            <h6 class="fw-semibold mb-1">
                                <?= $product->fire_rated ?>
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->aksesoris) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Aksesoris</span>
                            <h6 class="fw-semibold mb-1">
                                <?= $product->aksesoris ?>
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->sliding_gear) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Sliding Gear</span>
                            <h6 class="fw-semibold mb-1">
                                <?= $product->sliding_gear ?>
                            </h6>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-6 col-md-6">
                    <div class="mb-3">
                        <span class="fw-normal">Deskripsi Singkat</span>
                        <p class="fw-semibold mb-1">
                            <?= $product->deskripsi ?>
                    </p>
                    </div>
                    <div class="mb-3">
                        <span class="fw-normal">Ukuran</span>
                        <h6 class="fw-semibold mb-1">
                            <?= $product->ukuran ?>
                        </h6>
                    </div>
                    <?php if ( isset($product->tebal_daun_pintu) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Tebal Daun Pintu</span>
                            <h6 class="fw-semibold mb-1">
                                <?= number_format($product->tebal_daun_pintu, 2) ?> mm
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->tebal_plat_daun_pintu) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Tebal Plat Daun Pintu / Kisi</span>
                            <h6 class="fw-semibold mb-1">
                                <?= number_format($product->tebal_plat_daun_pintu, 2) ?> mm
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->tebal_plat_kusen_pintu) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Tebal Plate Kusen</span>
                            <h6 class="fw-semibold mb-1">
                                <?= number_format($product->tebal_plat_kusen_pintu, 2) ?> mm
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->overlap_bibir_pintu) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Overlap Bibir Pintu</span>
                            <h6 class="fw-semibold mb-1">
                                <?= number_format($product->overlap_bibir_pintu, 2) ?> mm
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->tebal_frame_kisi) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Tebal Frame Kisi</span>
                            <h6 class="fw-semibold mb-1">
                                <?= number_format($product->tebal_frame_kisi, 2) ?> mm
                            </h6>
                        </div>
                    <?php endif; ?>
                    <?php if ( isset($product->tebal_rangka_pintu) ): ?>
                        <div class="mb-3">
                            <span class="fw-normal">Tebal Rangka Pintu</span>
                            <h6 class="fw-semibold mb-1">
                                <?= number_format($product->tebal_rangka_pintu, 2) ?> mm
                            </h6>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
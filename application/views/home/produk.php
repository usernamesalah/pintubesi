<!-- Content
        ============================================= -->
<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">

            <div class="row g-4 mb-5">
                <?php foreach($products as $product) : ?>
                <article class="entry event col-md-6 col-lg-4 mb-0">
                    <div
                        class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-12 mb-md-0">
                            <a href="<?= base_url('product/detail/' . $product->id) ?>" class="entry-image">
                                <img src="<?= base_url() . $product->foto ?>"
                                    onerror=" this.src = 'https://placehold.co/800x450';"
                                    alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2">
                            </a>
                        </div>
                        <div class="col-12 p-4 pt-0">
                            <div class="entry-meta no-separator mb-1 mt-0">
                                <ul>
                                    <li class="text-uppercase fw-medium"><?= $product->kategori ?></li>
                                </ul>
                            </div>

                            <div class="entry-title nott">
                                <h3><a href="<?= base_url('product/detail/'. $product->id) ?>"><?= $product->nama ?></a></h3>
                            </div>
                            <div class="entry-content my-3">
                                <p>
                                    <?= $product->deskripsi ?>
                                </p>
                            </div>

                            <div class="entry-meta no-separator">
                                <ul>
                                    <li class="text-end pull-right">
                                        <a href="https://wa.me/<?= $whatsapp->value ?>?text=halo?" class="button button-border button-rounded button-green"><i
                                                class="bi-whatsapp"></i> Pesan Sekarang</a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section><!-- #content end -->
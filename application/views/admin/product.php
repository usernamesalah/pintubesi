<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data Product</h5>
            <?= $this->session->flashdata('msg') ?>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?= base_url($product->foto) ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $product->kategori ?>
                                </h5>
                                <p class="card-text">
                                    <?= $product->nama ?>
                                </p>
                            </div>
                            <div class="card-body text-end">
                                <a href="<?= base_url('admin/product/detail') . "/" . $product->id ?>"
                                    class="pull-right card-link">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
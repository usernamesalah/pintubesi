<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">WhatsApp Pemesanan</h5>
            <?= form_open('admin/whatsapp') ?>
            <div class="mb-3">
                <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="nomor" value="<?= $whatsapp->value ?>">
                <div id="emailHelp" class="form-text">awali dengan 62.</div>
            </div>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
            <?= form_close() ?>
        </div>
    </div>
</div>
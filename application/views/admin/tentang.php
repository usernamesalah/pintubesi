<script src="<?= base_url() ?>/assets/ckeditor/ckeditor.js"></script>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tentang Kita</h5>
            <?= $this->session->flashdata('msg') ?>
            <?= form_open('admin/tentang') ?>
            <div class="mb-3">
                <textarea name="tentang" class="form-control" id="ttg"><?= $tentang->value ?></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('ttg');
</script>
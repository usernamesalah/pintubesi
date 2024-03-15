<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <?= $this->session->flashdata('msg') ?>
            <h5 class="card-title fw-semibold mb-4">Daftar Proyek dan Client</h5>
            <div class=" text-end pull-right mb-4">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#tambahClient">
                    <i class="ti ti-plus"></i> Tambah Proyek / Client
                </button>
            </div>
            <div class="row">
                <?php foreach ($clients as $client): ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?= base_url("asset/upload/" .$client->nama) ?>" class="card-img-top" width="100%">
                            <div class="card-body">
                                <p class="card-text"><?= $client->nama ?></p>
                            </div>
                            <div class="card-body text-end">

                                <a href="<?= base_url('admin/client/delete') . "/" . $client->id ?>"
                                    class="btn btn-outline-danger btn-sm">
                                    <i class="ti ti-trash"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahClient" tabindex="-1" aria-labelledby="tambahClientLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?= form_open_multipart('admin/client') ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahClientLabel">Tambah Proyek / Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="foto"  accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Client</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama proyek / client"
                        name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail Proyek / Client</label>
                    <textarea name="detail" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                <input name="create" type="submit" value="Tambah" class="btn btn-primary">
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
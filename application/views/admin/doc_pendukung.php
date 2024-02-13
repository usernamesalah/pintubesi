<div class="container-fluid">
    <div class="card">

        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Dokumen Pendukung</h5>
            <hr>
            <?= form_open_multipart('admin/document-pendukung') ?>
            <div id="additionalInputs">
                <div class="additional-input">
                    <div class="mb-3 col-4">
                        <label for="fileDokumen">Dokumen</label>
                        <input type="file" class="form-control" name="docs[]">
                    </div>
                    <div class="mb-3">
                        <label for="fileTeks">Judul Dokumen</label>
                        <input type="text" class="form-control" id="fileTeks" name="judul[]">
                    </div>

                    <button type="button" class="btn btn-danger btn-sm hapusInput mb-3">Hapus</button>
                </div>
            </div>

            <button type="button" class="btn btn-primary" id="tambahInput">Tambah Dokumen</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
            <?= form_close() ?>
        </div>
        <hr>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach ($doc as $v) : ?>
                    <tr>
                        <th scope="row"><?= ++$i ?></th>
                        <td><?= $v['judul'] ?></td>
                        <td><a href="<?= base_url($v['file']) ?>" class="btn btn-secondary btn-sm" target="_blank"> File</a></td>
                        <td><a href="<?= base_url('admin/document-pendukung/delete/'. $v['id']) ?>" class="btn btn-danger btn-sm"> Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        // Tambah input
        $("#tambahInput").click(function () {
            var newInput = $(".additional-input").first().clone();
            newInput.find("input").val(""); // Reset nilai input
            newInput.find(".hapusInput").prop("disabled", false); // Aktifkan tombol hapus
            $("#additionalInputs").append(newInput);
        });

        // Hapus input
        $(document).on("click", ".hapusInput", function () {
            if ($("#additionalInputs").children().length > 1) { // Pastikan tidak menghapus input pertama
                $(this).closest(".additional-input").remove();
            }
        });
    });
</script>
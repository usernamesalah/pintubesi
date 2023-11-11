<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Foto Tampilan depan website</h5>
            <?= $this->session->flashdata('msg') ?>
            <?= form_open_multipart('admin/foto-depan') ?>
            <div class="row">
                <?php foreach ($photos as $value): ?>
                    <div class="col-3">
                        <img src="<?= base_url($value->url) ?>" class="img-thumbnail">
                    </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <button class="btn btn-success btn-xs" id="add-btn">Tambah Foto</button>
                        <hr>
                        <div class="form-group initial-form" id="ft">
                            <div class="input-group input-group-alternative mb-1">
                                <input class="form-control" placeholder="foto" name="photos[]" type="file"
                                    accept="image/*">
                                <span class="input-group-text remove-btn"><i class="ti ti-trash"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                <?= form_close() ?>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            // Add new social media input field
            $('#add-btn').click(function (e) {
                e.preventDefault();
                var formGroup = $('.initial-form').first().clone();
                formGroup.find('input').val('');
                formGroup.find('.remove-btn').show();
                $('#ft').append(formGroup);
            });

            // Remove social media input field
            $('#ft').on('click', '.remove-btn', function (e) {
                e.preventDefault();
                var formGroup = $(this).closest('.form-group');
                if ($('.initial-form').length > 1) {
                    formGroup.remove();
                } else {
                    alert("At least one social media input is required");
                }
            });
        });
    </script>
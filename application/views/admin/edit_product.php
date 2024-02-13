<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Produk</h5>
            <?= form_open_multipart('admin/product/edit/'. $data->id) ?>
                <div class="row mb-3">
                    <div class="col-4 col-md-4">
                        <div class="mb-3">
                            <img src="<?= base_url($data->foto) ?>" alt="Preview" id="imagePreview" class="img-fluid rounded" style="display:none;">
                        </div>

                        <div class="mb-3">
                            <label for="imageInput" class="form-label">Choose an image</label>
                            <input type="file" class="form-control" id="imageInput" accept="image/*"
                                onchange="previewImage()" name="foto">
                        </div>

                    </div>

                    <div class="col-8 col-md-8">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="nama produk" name="nama" value="<?= $data->nama?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Kategori Produk</label>

                            <input type="text" name="kategori" value="<?= $data->kategori?>" class="form-control" id="exampleFormControlInput1"
                                placeholder="kategori produk">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"> <?= $data->deskripsi?></textarea>
                        </div>
                    </div>
                </div>

                <h5>Ukuran Produk</h5>
                <hr>
                <div class="row mb-3">
                    <div class="col-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="varchar">Ukuran
                                <?php echo form_error('ukuran') ?>
                            </label>
                            <input type="text" class="form-control" name="ukuran" value="<?= $data->ukuran?>" id="ukuran" placeholder="Ukuran" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="float">Tebal Daun Pintu
                                <?php echo form_error('tebal_daun_pintu') ?>
                            </label>
                            <input type="number" class="form-control" name="tebal_daun_pintu" value="<?= $data->tebal_daun_pintu?>" id="tebal_daun_pintu"
                                placeholder="Tebal Daun Pintu" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="float">Tebal Plat Daun Pintu / Kisi
                                <?php echo form_error('tebal_plat_daun_pintu') ?>
                            </label>
                            <input type="number" class="form-control" name="tebal_plat_daun_pintu" value="<?= $data->tebal_plat_daun_pintu?>"
                                id="tebal_plat_daun_pintu" placeholder="Tebal Plat Daun Pintu" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="float">Overlap Bibir Pintu
                                <?php echo form_error('overlap_bibir_pintu') ?>
                            </label>
                            <input type="number" class="form-control" name="overlap_bibir_pintu" value="<?= $data->overlap_bibir_pintu?>"
                                id="overlap_bibir_pintu" placeholder="Overlap Bibir Pintu" />
                        </div>
                    </div>
                    <div class="col-6 col-md-6">

                        <div class="mb-3">
                            <label class="form-label" for="float">Tebal Rangka Pintu
                                <?php echo form_error('tebal_rangka_pintu') ?>
                            </label>
                            <input type="number" class="form-control" name="tebal_rangka_pintu" value="<?= $data->tebal_rangka_pintu?>" id="tebal_rangka_pintu"
                                placeholder="Tebal Rangka Pintu" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="float">Tebal Frame Kisi
                                <?php echo form_error('tebal_frame_kisi') ?>
                            </label>
                            <input type="text" class="form-control" name="tebal_frame_kisi" value="<?= $data->tebal_frame_kisi?>" id="tebal_frame_kisi"
                                placeholder="Tebal Frame Kisi" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="float">Tebal Plate Kusen Pintu/Kisi
                                <?php echo form_error('tebal_plat_kusen_pintu') ?>
                            </label>
                            <input type="number" class="form-control" name="tebal_plat_kusen_pintu" value="<?= $data->tebal_plat_kusen_pintu?>"
                                id="tebal_plat_kusen_pintu" placeholder="Tebal Plat Kusen Pintu" />
                        </div>

                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="int">Insulation
                                <?php echo form_error('insulation') ?>
                            </label>
                            <input type="text" class="form-control" name="insulation" value="<?= $data->insulation?>" id="insulation"
                                placeholder="Insulation" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="varchar">Engsel
                                <?php echo form_error('engsel') ?>
                            </label>
                            <input type="text" class="form-control" name="engsel" value="<?= $data->engsel?>" id="engsel" placeholder="Engsel" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="int">Fire Rated
                                <?php echo form_error('fire_rated') ?>
                            </label>
                            <input type="text" class="form-control" name="fire_rated" value="<?= $data->fire_rated?>" id="fire_rated"
                                placeholder="Fire Rated" />
                        </div>

                    </div>
                    <div class="col-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="varchar">Sliding Gear
                                <?php echo form_error('sliding_gear') ?>
                            </label>
                            <input type="text" class="form-control" name="sliding_gear" value="<?= $data->sliding_gear?>" id="sliding_gear"
                                placeholder="Sliding Gear" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="aksesoris">Aksesoris
                                <?php echo form_error('aksesoris') ?>
                            </label>
                            <textarea class="form-control" rows="3" name="aksesoris"  id="aksesoris"
                                placeholder="Aksesoris"><?= $data->aksesoris?></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <label class="form-label" for="aksesoris">Tambahkan Foto Lainnya
                    </label>
                    <input type="file" name="galery[]" class="form-control" accept="image/*" multiple>
                </div>

                <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
            <?= form_close() ?>
        </div>
    </div>
</div>


<script>
    function previewImage() {
        const input = document.getElementById('imageInput');
        const preview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
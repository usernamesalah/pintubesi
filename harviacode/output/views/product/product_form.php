<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Product <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="nama">Nama <?php echo form_error('nama') ?></label>
            <textarea class="form-control" rows="3" name="nama" id="nama" placeholder="Nama"><?php echo $nama; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('kategori') ?></label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" value="<?php echo $kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ukuran <?php echo form_error('ukuran') ?></label>
            <input type="text" class="form-control" name="ukuran" id="ukuran" placeholder="Ukuran" value="<?php echo $ukuran; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Tebal Daun Pintu <?php echo form_error('tebal_daun_pintu') ?></label>
            <input type="text" class="form-control" name="tebal_daun_pintu" id="tebal_daun_pintu" placeholder="Tebal Daun Pintu" value="<?php echo $tebal_daun_pintu; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Tebal Plat Daun Pintu <?php echo form_error('tebal_plat_daun_pintu') ?></label>
            <input type="text" class="form-control" name="tebal_plat_daun_pintu" id="tebal_plat_daun_pintu" placeholder="Tebal Plat Daun Pintu" value="<?php echo $tebal_plat_daun_pintu; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Tebal Plat Kusen Pintu <?php echo form_error('tebal_plat_kusen_pintu') ?></label>
            <input type="text" class="form-control" name="tebal_plat_kusen_pintu" id="tebal_plat_kusen_pintu" placeholder="Tebal Plat Kusen Pintu" value="<?php echo $tebal_plat_kusen_pintu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Insulation <?php echo form_error('insulation') ?></label>
            <input type="text" class="form-control" name="insulation" id="insulation" placeholder="Insulation" value="<?php echo $insulation; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Engsel <?php echo form_error('engsel') ?></label>
            <input type="text" class="form-control" name="engsel" id="engsel" placeholder="Engsel" value="<?php echo $engsel; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Fire Rated <?php echo form_error('fire_rated') ?></label>
            <input type="text" class="form-control" name="fire_rated" id="fire_rated" placeholder="Fire Rated" value="<?php echo $fire_rated; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Overlap Bibir Pintu <?php echo form_error('overlap_bibir_pintu') ?></label>
            <input type="text" class="form-control" name="overlap_bibir_pintu" id="overlap_bibir_pintu" placeholder="Overlap Bibir Pintu" value="<?php echo $overlap_bibir_pintu; ?>" />
        </div>
	    <div class="form-group">
            <label for="aksesoris">Aksesoris <?php echo form_error('aksesoris') ?></label>
            <textarea class="form-control" rows="3" name="aksesoris" id="aksesoris" placeholder="Aksesoris"><?php echo $aksesoris; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="float">Tebal Frame Kisi <?php echo form_error('tebal_frame_kisi') ?></label>
            <input type="text" class="form-control" name="tebal_frame_kisi" id="tebal_frame_kisi" placeholder="Tebal Frame Kisi" value="<?php echo $tebal_frame_kisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Tebal Rangka Pintu <?php echo form_error('tebal_rangka_pintu') ?></label>
            <input type="text" class="form-control" name="tebal_rangka_pintu" id="tebal_rangka_pintu" placeholder="Tebal Rangka Pintu" value="<?php echo $tebal_rangka_pintu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sliding Gear <?php echo form_error('sliding_gear') ?></label>
            <input type="text" class="form-control" name="sliding_gear" id="sliding_gear" placeholder="Sliding Gear" value="<?php echo $sliding_gear; ?>" />
        </div>
	    <div class="form-group">
            <label for="foto">Foto <?php echo form_error('foto') ?></label>
            <textarea class="form-control" rows="3" name="foto" id="foto" placeholder="Foto"><?php echo $foto; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="galery">Galery <?php echo form_error('galery') ?></label>
            <textarea class="form-control" rows="3" name="galery" id="galery" placeholder="Galery"><?php echo $galery; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('product') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
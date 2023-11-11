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
        <h2 style="margin-top:0px">Product Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>Ukuran</td><td><?php echo $ukuran; ?></td></tr>
	    <tr><td>Tebal Daun Pintu</td><td><?php echo $tebal_daun_pintu; ?></td></tr>
	    <tr><td>Tebal Plat Daun Pintu</td><td><?php echo $tebal_plat_daun_pintu; ?></td></tr>
	    <tr><td>Tebal Plat Kusen Pintu</td><td><?php echo $tebal_plat_kusen_pintu; ?></td></tr>
	    <tr><td>Insulation</td><td><?php echo $insulation; ?></td></tr>
	    <tr><td>Engsel</td><td><?php echo $engsel; ?></td></tr>
	    <tr><td>Fire Rated</td><td><?php echo $fire_rated; ?></td></tr>
	    <tr><td>Overlap Bibir Pintu</td><td><?php echo $overlap_bibir_pintu; ?></td></tr>
	    <tr><td>Aksesoris</td><td><?php echo $aksesoris; ?></td></tr>
	    <tr><td>Tebal Frame Kisi</td><td><?php echo $tebal_frame_kisi; ?></td></tr>
	    <tr><td>Tebal Rangka Pintu</td><td><?php echo $tebal_rangka_pintu; ?></td></tr>
	    <tr><td>Sliding Gear</td><td><?php echo $sliding_gear; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Galery</td><td><?php echo $galery; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('product') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
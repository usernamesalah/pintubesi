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
        <h2 style="margin-top:0px">Product List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('product/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('product/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('product'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Ukuran</th>
		<th>Tebal Daun Pintu</th>
		<th>Tebal Plat Daun Pintu</th>
		<th>Tebal Plat Kusen Pintu</th>
		<th>Insulation</th>
		<th>Engsel</th>
		<th>Fire Rated</th>
		<th>Overlap Bibir Pintu</th>
		<th>Aksesoris</th>
		<th>Tebal Frame Kisi</th>
		<th>Tebal Rangka Pintu</th>
		<th>Sliding Gear</th>
		<th>Foto</th>
		<th>Galery</th>
		<th>Action</th>
            </tr><?php
            foreach ($product_data as $product)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $product->nama ?></td>
			<td><?php echo $product->kategori ?></td>
			<td><?php echo $product->ukuran ?></td>
			<td><?php echo $product->tebal_daun_pintu ?></td>
			<td><?php echo $product->tebal_plat_daun_pintu ?></td>
			<td><?php echo $product->tebal_plat_kusen_pintu ?></td>
			<td><?php echo $product->insulation ?></td>
			<td><?php echo $product->engsel ?></td>
			<td><?php echo $product->fire_rated ?></td>
			<td><?php echo $product->overlap_bibir_pintu ?></td>
			<td><?php echo $product->aksesoris ?></td>
			<td><?php echo $product->tebal_frame_kisi ?></td>
			<td><?php echo $product->tebal_rangka_pintu ?></td>
			<td><?php echo $product->sliding_gear ?></td>
			<td><?php echo $product->foto ?></td>
			<td><?php echo $product->galery ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('product/read/'.$product->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('product/update/'.$product->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('product/delete/'.$product->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>
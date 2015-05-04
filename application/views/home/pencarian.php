
<div class="row">
	<div class="col-sm-3">
		<div class="left-sidebar">
			<!-- <h2>Category</h2> -->
			<div class="panel-group category-products" id="accordian"><!--category-productsr-->
				<?php foreach ($kategori as $value) {	?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><?php echo anchor('home/kategori_detail/'.$value->id_ktgr.'', "$value->nama"); ?></h4>
						<!-- <?php var_dump($kategori); ?> -->
					</div>
				</div>
				<?php }; ?>
			</div><!--/category-productsr-->

		</div>
	</div>
	<div class="col-sm-9">
		<?php
		if (empty($query)) {
			echo "<div class='alert alert-warning' role='alert'>Data Tidak Ada </div>";
		}else{ 
			foreach ($query as $value) {
				?>
				<div class="col-md-3">
					<div class="thumbnail">
						<div class="caption">
								<img width="115" height="212" src="<?php echo site_url("img/$value->gambar"); ?>" alt="" />
							<div class="caption">
								<h4 class="judul text-center"><?php echo anchor('home/detail/'.$value->id_bk.'',"$value->judul"); ?></h4>
								<h6 class="harga">Rp. <?php echo number_format($value->harga,0,',','.') ?></h6>
								<h6>Oleh : <?php echo $value->nama; ?></h6>	
							</div>
						</div>
					</div>
				</div>
				<?php }} ?> <!-- penutup foreach --> 
			</div><!--features_items-->
		</div>
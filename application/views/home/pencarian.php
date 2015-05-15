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
						<!-- <img width="115" height="212" src="<?php echo site_url("img/$value->gambar"); ?>" alt="" /> -->
						<?php echo img('img/'.$value->gambar,true); ?>
						<div class="caption">
							<h5 class="judul text-center">
								<?php echo anchor('home/detail/'.$value->id_bk.'',"$value->judul"); ?>
							</h5>
							<p class="text-center">Oleh : <?php echo $value->nama; ?></p>	
							<p class="harga text-center">Rp. <?php echo number_format($value->harga,0,',','.') ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php }} ?> <!-- penutup foreach --> 
	</div><!--features_items-->
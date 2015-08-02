<div class="col-sm-9">
	<?php if (empty($query)): ?>
	<div class='alert alert-warning' role='alert'>Data Tidak Ada </div>
	<?php endif ?>	
	<?php foreach ($query as $value): ?>
		<div class="col-md-3">
			<div class="thumbnail thumbnail-custom">
				<div class="caption">
					<?php echo img('img/'.$value->gambar,true); ?>
					<div class="caption">
						<h5 class="judul text-center">
							<?php echo anchor('home/detail/'.$value->id_bk.'',"$value->judul"); ?>
						</h5>
						<h6 class="text-center">Oleh : <?php echo $value->nama; ?></h6>	
						<h4 class="harga text-center">Rp. <?php echo number_format($value->harga,0,',','.') ?></h4>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div><!--features_items-->
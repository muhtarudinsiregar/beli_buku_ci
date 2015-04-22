	<section>
		<div class="container">
			<div class="row">
				<?php echo $this->session->flashdata('messages');  ?>
			</div>
			<div class="row">
				<div class="col-lg-3"><h2>Kategori	</h2></div>
				<div class="col-lg-5 col-lg-offset-4"><h2>Buku Baru	</h2></div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<!-- <h2>Category</h2> -->
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php foreach ($kategori as $value) {	?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><?php echo $value->nama; ?></a></h4>
								</div>
							</div>
							<?php }; ?>
						</div><!--/category-productsr-->
						
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<?php
					if (empty($query)) {
					 	echo "<div class='alert alert-warning' role='alert'>Data Tidak Ada </div>";
					 }else{ 
					foreach ($query as $value) {
						?>
						<div class="col-md-3" style="padding: 10px 17.4px;">
							<div class="thumbnail">
								<div class="caption">
									<div class="text-center">
										<img width="115" height="212" src="<?php echo site_url("img/$value->gambar"); ?>" alt="" />
										<h5><?php echo anchor('home/detail/'.$value->id_bk.'',"$value->judul"); ?></h5>
										<h6>Rp. <?php echo number_format($value->harga,0,',','.') ?></h6>
										<h6>Oleh :<?php echo $value->nama; ?></h6>	
									</div>
								</div>
							</div>
						</div>
					<?php }} ?> <!-- penutup foreach --> 
				</div><!--features_items-->

				</div>
			</div>
		</section>
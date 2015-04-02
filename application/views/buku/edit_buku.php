<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Buku</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Buku</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tambah Buku</div>
				<div class="panel-body">
					<div class="col-md-12">
						<!-- <?php echo form_open_multipart('barang/proses_upload') ?> -->
						<form action="" class="form-horizontal">
							<div class="row">
								<div class="col-lg-5">	
									<div class="form-group">
										<label for="nama">Judul Buku</label>
										<input type="text" class="form-control" name="judul" placeholder="Judul Buku" value="<?php echo $edit->judul; ?>">
									</div>
								</div>
								<div class="col-lg-5 col-md-offset-1">	
									<div class="form-group">
										<label for="nama">Harga Buku</label>
										<input type="text" class="form-control" name="harga" placeholder="Harga Buku" value="<?php echo $edit->harga; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<label for="nama">Penerbit</label>
										<input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?php echo $edit->penerbit; ?>">
									</div>
								</div>
								<div class="col-lg-5 col-lg-offset-1">	
									<div class="form-group">
										<label for="nama">Bahasa</label>
										<input type="text" class="form-control" name="bahasa" placeholder="Bahasa" value="<?php echo $edit->bahasa; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<label for="nama">Penulis</label>
										<input type="text" class="form-control" name="penulis" placeholder="Penulis" value="<?php echo $edit->penulis; ?>">
									</div>
								</div>
								<div class="col-lg-5 col-lg-offset-1">
									<div class="form-group">
										<label for="nama">Stok</label>
										<input type="text" class="form-control" name="stok" placeholder="Stok Buku" value="<?php echo $edit->stok; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<label for="nama">Deskripsi</label>
										<textarea class="textarea form-control" name="deskripsi"><?php echo $edit->deskripsi; ?></textarea>
									</div>
								</div>
								<div class="col-lg-3 col-lg-offset-1">
									<div class="form-group">
										<label for="nama">Gambar</label>
										<input type="file" class="form-control" name="gambar" placeholder="Gambar Buku" value="<?php echo $edit->gambar; ?>">
									</div>
									<div class="row">
										<button class="btn btn-primary" type="submit">Tambah</button>
										<button class="btn btn-danger col-lg-offset-1" type="submit">Reset</button>
									</div>
								</div>
							</div>
							
							


						</form>
					</div> <!--/.col -md-12 -->
				</div> <!--/.panel-body -->
			</div> <!--/.panel-default -->
		</div> <!--/.col-lg-12-->
	</div> <!--/.row-->
</div>	<!--/.main-->

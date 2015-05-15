<div class="col-lg-9">
	<div class="panel panel-default">
		<div class="panel-heading">Tambah Buku</div>
		<div class="panel-body">
			<div class="col-md-12">
				<?php echo form_open_multipart('buku/simpan',array('class="form-horizontal"')) ?>
				<!-- <form method="post" class="form-horizontal" enctype="multipart/form-data"> -->
				<div class="row">
					<div class="col-lg-5">	
						<div class="form-group">
							<label for="nama">Judul Buku</label>
							<input type="text" class="form-control" name="judul" placeholder="Judul Buku">
						</div>
					</div>
					<div class="col-lg-5 col-md-offset-1">	
						<div class="form-group">
							<label for="nama">Harga Buku</label>
							<input type="text" class="form-control" name="harga" placeholder="Harga Buku">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-5">
						<div class="form-group">
							<label for="nama">Kategori Buku</label>
							<select name="kategori" class="form-control">
								<?php foreach ($kategori as $key => $value) {

									?>
									<option value="<?php echo $value->id_ktgr; ?>"><?php echo $value->nama;?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-5 col-lg-offset-1">
							<div class="form-group">
								<label for="nama">Tahun</label>
								<input type="text" class="form-control" name="tahun" placeholder="Tahun">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-5">
							<div class="form-group">
								<label for="nama">Penulis</label>
								<select name="penulis" class="form-control">
									<?php foreach ($penulis as  $value) {

										?>
										<option value="<?php echo $value->id_pen; ?>"><?php echo $value->nama;?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-lg-offset-1">
								<div class="form-group">
									<label for="nama">Gambar</label>
									<input type="file" class="form-control" name="userfile" placeholder="Gambar Buku">
								</div>

							</div>
						</div>

						<div class="row">
							<div class="col-lg-5">
								<div class="form-group">
									<label for="nama">Deskripsi</label>
									<textarea class="textarea form-control"  cols="" rows="8" name="deskripsi"></textarea>
									
								</div>
							</div>
							<div class="col-lg-3 col-lg-offset-1">
								<div class="form-group">
									<div class="row">
										<label for=""></label>
										<button class="btn btn-primary" type="submit">Tambah</button>
										<button class="btn btn-danger col-lg-offset-1 " type="reset">Reset</button>
									</div>

								</div>
							</div>
						</div>

						<?php echo form_close(); ?>

						<!-- </form> -->
					</div> <!--/.col -md-12 -->
				</div> <!--/.panel-body -->
			</div> <!--/.panel-default -->
		</div> <!--/.col-lg-12-->

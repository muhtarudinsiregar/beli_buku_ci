<div class="col-lg-9">
	<div class="panel panel-default">
		<div class="panel-heading">Edit Buku</div>
		<div class="panel-body">
			<?php echo form_open_multipart('buku/update/'.$data->id_bk,array('class="form-horizontal"')) ?>
			<!-- <form method="post" class="form-horizontal" enctype="multipart/form-data"> -->
			<div class="row">
				<div class="col-lg-5">	
					<div class="form-group">
						<label for="nama">Judul Buku</label>
						<input type="text" class="form-control" name="judul"value="<?php echo $data->judul; ?>">
					</div>
				</div>
				<div class="col-lg-5 col-md-offset-1">	
					<div class="form-group">
						<label for="nama">Harga Buku</label>
						<input type="text" class="form-control" name="harga" value="<?php echo $data->harga; ?>">
					</div>
				</div>
			</div>
				<!-- <?php var_dump($data) ?> -->
				<div class="row">
					<div class="col-lg-5">
						<div class="form-group">
							<label for="nama">Kategori Buku</label>
							<select name="kategori" class="form-control">
								<?php foreach ($kategori as $key => $value) {
									$selected = ($value->id_ktgr == $data->id_ktgr)? "selected='selected'":''; //sets html flag
									echo "<option value='$value->id_ktgr' $selected>$value->nama</option>\n";
									}
									?>
									
									<!-- <option value="<?php echo $value->id_ktgr; ?>"><?php echo $value->nama;?></option> -->
							</select>
						</div>
					</div>
					<div class="col-lg-5 col-lg-offset-1">
							<div class="form-group">
								<label for="nama">Tahun</label>
								<input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $data->tahun; ?>">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-5">
							<div class="form-group">
								<label for="nama">Penulis</label>
								<select name="penulis" class="form-control">
									<?php foreach ($penulis as  $value) {
										$selected = ($value->id_pen == $data->id_pen)? "selected='selected'":''; //sets html flag
										echo "<option value='$value->id_pen' $selected>$value->nama</option>\n";
										}
										?>
										<!-- <option value="<?php echo $value->id_pen; ?>"><?php echo $value->nama;?></option> -->
										
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
									<textarea class="textarea form-control" name="deskripsi" rows="8"><?php echo $data->deskripsi; ?></textarea>
								</div>
							</div>
							<div class="col-lg-3 col-lg-offset-1">
								<div class="form-group">
									<div class="row">
										<label for=""></label>
										<button class="btn btn-primary" type="submit">Update</button>
										<button class="btn btn-danger col-lg-offset-1 " type="reset">Reset</button>
									</div>

								</div>
							</div>
						</div>

						<?php echo form_close(); ?>

						<!-- </form> -->
		</div> <!--/.panel-body -->
	</div> <!--/.panel-default -->
</div> <!--/.col-lg-12-->
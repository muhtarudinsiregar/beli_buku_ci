<div class="col-lg-9">
	<div class="panel panel-primary">
		<div class="panel-heading">
		<h3 class="panel-title">Edit Data Penulis</h3>
		</div>
		<div class="panel-body">
			<?php echo form_open('penulis/update/'.$data->id_pen.'',array('class'=>'form-horizontal','method'=>'POST')) ?>

			<div class="form-group">
				<label for="inputEmail3" class="col-lg-2 control-label" name="Nama">Nama Penulis</label>
				<div class="col-lg-9 col-lg-offset-1">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input required id="penulis" type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" placeholder="Nama Penulis">                                        
					</div>
				</div>

			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-lg-2 control-label" name="Nama">Profil Penulis</label>
				<div class="col-lg-9 col-lg-offset-1">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
						<textarea required id="profiles" style="resize:none" id="" cols="30" rows="7" type="text" class="form-control" name="profil" placeholder="Profil Penulis"><?php echo $data->profil; ?></textarea>
					</div>
				</div>                                       
			</div>
			<div class="form-group">

				<div class="col-lg-1 col-lg-offset-3">
					<button type="submit"class="btn btn-primary">Simpan</button>
				</div>
				<div class="col-lg-1 col-lg-offset-1">
					<button type="submit"class="btn btn-danger">Kembali</button>
				</div>
			</div>

			<?php echo form_close(); ?>
		</div>
	</div>	

</div>
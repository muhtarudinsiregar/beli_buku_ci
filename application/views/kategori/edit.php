
<div class="col-lg-9">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Panel title</h3>
		</div>
		<div class="panel-body">
			<?php echo form_open('kategori/update/'.$data->id_ktgr.'',array('class'=>'form-horizontal','method'=>'POST')) ?>

			<div class="form-group">
				<label for="inputEmail3" class="col-lg-2 control-label" name="Nama">Nama Kategori</label>
				<div class="col-lg-9 col-lg-offset-1">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
						<input type="text" class="form-control" name="kategori" value="<?php echo $data->nama; ?>" placeholder="Nama Kategori">                                        
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
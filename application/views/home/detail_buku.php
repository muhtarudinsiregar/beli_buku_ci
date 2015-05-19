<div class="row">	
	<div class="col-lg-3">
		<div class="thumbnail">
			<tr>
				<td> <img src="<?php echo site_url('img/'.$data->gambar); ?>" alt="a picture" width="115" height="212"></td>
			</tr>
		</div>
	</div>
	<div class="col-lg-5">
		<div class="row">
			<div class="col-lg-12">
				<h3><?php echo $data->judul; ?></h3>
			</div>
		</div>
		<div class="row">
			<table class="table">
				<tr>
					<th>Penulis</th>
					<td><?php echo $data->penulis; ?></td>
				</tr>
				<tr>
					<th>Harga</th>
					<td class="harga"><?php echo $data->harga; ?></td>
				</tr>
				<tr>
					<th>Kategori</th>
					<td><?php echo anchor('home/kategori_detail/'.$data->id_ktgr, $data->kategori); ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-lg-4">
		<?php echo form_open('keranjang/simpan',array('class'=>'form-horizontal','method'=>'post')); ?>
		<?php echo form_hidden('id_bk', $data->id_bk); ?>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-offset-2 col-lg-2 control-label">Jumlah </label>
			<div class="col-sm-3">
				<input required type="number" class="form-control" min="1" max="50" name="jml_bk" value="1">
			</div>
		</div>

		<div class="form-group">
			<label for="" class="control-label col-lg-2"></label>
			<input type="submit" name="addItem" value="Masukkan Ke Keranjang" class="btn btn-primary">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="row">
	<table class="table">
		<tr>
			<th>Keterangan</th>
			<td><?php echo $data->deskripsi; ?></td>
		</tr>
		<tr>
			<th>Profil Penulis</th>
			<td><?php echo $data->profil; ?></td>
		</tr>
	</table>
</div>
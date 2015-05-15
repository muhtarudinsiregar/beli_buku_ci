<div class="col-lg-9">
	<a href="<?php echo site_url('penulis/tambah') ?>" class="btn btn-primary">Tambah Penulis</a>
	<br>
	<br>
	<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Penulis</h3>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<!-- <th class="text-left"><span class="glyphicon glyphicon-menu-down"></span></th> -->
				</tr>
			</thead>
			<tbody>
				<?php $no=1 ?>
				<?php foreach($data as $value): ?>
					<tr>
						<td> <?php echo $no++; ?> </td>
						<td> <?php echo $value->nama; ?> </td>
						
						<td>
							<?php echo anchor('penulis/edit/'.$value->id_pen.'', '<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>')
							.'&nbsp&nbsp&nbsp'. anchor('penulis/hapus/'.$value->id_pen.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete </button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus Kategori".$value->nama."?')")); ?>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</div>

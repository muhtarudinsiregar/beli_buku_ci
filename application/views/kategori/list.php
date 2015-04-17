<div class="row">	
	<div class="col-lg-3">Lorem ipsum dolor sit amet.</div>
	<div class="col-lg-9">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<th><span class="glyphicon glyphicon-menu-down"></span></th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1 ?>
				<?php foreach($data as $value): ?>
					<tr>
						<td> <?php echo $no++; ?> </td>
						<td> <?php echo $value->nama; ?> </td>
						<td>
							<td>
							<?php echo anchor('kategori/edit/'.$value->id_ktgr.'', '<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>')
							 .'&nbsp&nbsp&nbsp'. anchor('kategori/hapus/'.$value->id_ktgr.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete </button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus Kategori".$value->nama."?')")); ?></td>

						</td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
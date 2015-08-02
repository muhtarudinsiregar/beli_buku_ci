<div class="col-lg-9">
	<a href="<?php echo site_url('buku/tambah'); ?>" class="btn btn-primary">Tambah Buku</a>
	<br>
	<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Gambar</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($buku as $value) {
				?>
				<tr>
					<td><img width="115" height="162"src="<?php echo site_url('img/'.$value->gambar.'') ?>" alt=""></td>
					<td><?php echo $value->judul; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td>
						<?php 
						echo anchor('buku/edit/'.$value->id_bk.'', 'Edit',array("class"=>"btn btn-info"))
						.'&nbsp&nbsp&nbsp'.
						anchor('buku/hapus/'.$value->id_bk.'', 
						'Hapus', 
						array('class'=>'btn btn-danger','onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->judul."?')")); ?>
					</td>
				</tr>
					<?php 
					
				}
				?>
		</tbody>
	</table>
</div> <!--/.col-lg-12-->
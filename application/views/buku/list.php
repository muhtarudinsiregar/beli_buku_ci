<div class="col-lg-9">
	<a href="<?php echo site_url('buku/tambah'); ?>" class="btn btn-primary">Tambah Buku</a>
	<br>
	<br>

	<div class="panel panel-info">
		<div class="panel-heading">Daftar Buku</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover table-striped tablesorter">
					<thead>
						<tr>
							<th>No</th>
							<th>Gambar</th>
							<th>Judul</th>
							<th>Penulis</th>
							<th>Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no = $no+1;
						foreach ($buku as $value) {
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><img width="115" height="162"src="<?php echo site_url('img/'.$value->gambar.'') ?>" alt=""></td>
								<td><?php echo $value->judul; ?></td>
								<td><?php echo $value->nama; ?></td>
								<td><?php echo $value->harga; ?></td>
								<td>
									<?php 
									echo anchor('buku/edit/'.$value->id_bk.'', '<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>')
									.'&nbsp&nbsp&nbsp <br>'.

									anchor('buku/hapus/'.$value->id_bk.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete </button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->judul."?')")); ?></td>
								</tr>
								<?php 
								$no++; 
							}
							?>
						</tbody>
					</table>
				</div>

				
			</div> <!--/.panel-body -->
		</div> <!--/.panel-default -->
	</div> <!--/.col-lg-12-->

</div>	<!--/.main-->

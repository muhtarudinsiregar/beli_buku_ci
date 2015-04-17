<div class="row">			
	<div class="col-lg-3">
		Lorem ipsum dolor sit amet.
	</div>
	<div class="col-lg-9">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Daftar Buku</div>
				<div class="panel-body">
					<div class="col-md-12">
						<div class="container" style="padding:0">
							<?php echo anchor('buku/tambah', 'Tambah Buku', 'class="btn btn-primary"'); ?>
						</div>
						<br>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
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
												.'&nbsp&nbsp&nbsp'.
												anchor('buku/hapus/'.$value->id_bk.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete </button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->judul."?')")); ?></td>
											</tr>
											<?php 
											$no++; 
										}
										?>
									</tbody>
								</table>
							</div>

						</div> <!--/.col -md-12 -->
					</div> <!--/.panel-body -->
				</div> <!--/.panel-default -->
			</div> <!--/.col-lg-12-->
		</div> <!--/.row-->
	</div>	<!--/.main-->

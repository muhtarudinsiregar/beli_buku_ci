<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Buku</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Buku</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Daftar Buku</div>
				<div class="panel-body">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th>No</th>
										<th>Judul</th>
										<th>Penulis</th>
										<th>Harga</th>
										<th>Penerbit</th>
										<th>Stok</th>
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
										<td><?php echo $value->judul; ?></td>
										<td><?php echo $value->penulis; ?></td>
										<td><?php echo $value->harga; ?></td>
										<td><?php echo $value->penerbit; ?></td>
										<td><?php echo $value->stok; ?></td>
										<td><?php echo anchor('buku/edit/'.$value->id.'', '<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>').'&nbsp&nbsp&nbsp'.anchor('buku/hapus/'.$value->id.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete </button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->judul."?')")); ?></td>
									</tr>
									<?php 
										$no++; 
										}
									?>
								</tbody>
							</table>
						</div>
						<div class="row">
							<?php echo anchor('buku/tambah', 'Tambah Buku', 'class="btn btn-primary"'); ?>
						</div>
					</div> <!--/.col -md-12 -->
				</div> <!--/.panel-body -->
			</div> <!--/.panel-default -->
		</div> <!--/.col-lg-12-->
	</div> <!--/.row-->
</div>	<!--/.main-->

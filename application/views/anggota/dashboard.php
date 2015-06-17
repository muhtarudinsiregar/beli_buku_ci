<div class="col-lg-9">
	<?php if ($this->session->flashdata('notif')): ?>
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong><?php echo $this->session->flashdata('notif'); ?></strong>
	</div>
	<?php endif ?>
	<h4 class="text-center">Sejarah Transaksi</h4>
	<table class="table table-bordered table-hover">
		<thead align="center">
			<tr >
				<th>No Pemesanan</th>
				<th>Tanggal Pemesanan</th>
				<th>Total Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_pemesanan as $value): ?>
			<tr align="center">
				<td><?php echo $value->id_pmsn; ?></td>
				<td><?php echo $value->tanggal_pemesanan; ?></td>
				<td >Rp. <?php echo number_format($value->total_harga,0,',','.') ?></td>
				<td><?php echo anchor('anggota/detail_pemesanan/'.$value->id_pmsn, 'Detail Pemesanan', '');; ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div> <!--/.col-lg-12-->
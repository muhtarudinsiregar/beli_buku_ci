<div class="col-lg-9">
	<h4 class="text-center">Detail Pemesanan</h4>
	<table class="table table-bordered table-hover">
		<thead align="center">
			<tr >
				<th>Gambar</th>
				<th>Judul</th>
				<th>Jumlah</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($detail_pemesanan as $value): ?>
			<tr align="center">
				<td><img src="<?php echo site_url('img/'.$value->gambar) ?>" alt="" width="115px"></td>
				<td align="left"><?php echo anchor('home/detail/'.$value->id_bk, $value->judul);?></td>
				<td><?php echo $value->jumlah ?></td>
				<td >Rp. <?php echo number_format($value->harga,0,',','.') ?></td>
			</tr>
			<?php endforeach ?>
			<tr>
				<td colspan="3"><b>Total Harga</b></td>
				<td align="center"><b>Rp. <?php echo number_format($detail_pemesanan['0']->total_harga,0,',','.') ?></b></td>
				
			</tr>
		</tbody>
	</table>
</div> <!--/.col-lg-12-->
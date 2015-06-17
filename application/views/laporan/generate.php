<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 align="center">Laporan Penjualan Buku Tahun 2015</h1>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<table border="1" width="540">
					<thead>
						<tr>
							<td align="center">No</td>
							<td align="center">Bulan</td>
							<td align="center">Jumlah</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							foreach($data_penjualan as $value){
						?>
						
						<tr>
							<td align="center"><?php echo $i; ?></td>
							<td align="center"><?php echo $value->tanggal; ?></td>
							<td align="center">Rp. <?php echo number_format($value->total,0,',','.'); ?></td>
						</tr>
						<?php 
							$i++;
							}
						?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2" align="center">Total Penjualan</td>
							<td align="center">Rp. <?php echo number_format($total->total_harga,0,',','.'); ?></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
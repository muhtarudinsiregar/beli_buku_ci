<div class="col-lg-9">
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Statistik Total Penjualan</h3>
			</div>
			<div class="panel-body">
				<canvas id="chartPenjualan" width="400" height="300"></canvas>
			</div>
		</div>
	</div>			
	<div class="row">
		<?php echo form_open('laporan/export',array('class'=>'form-inline')); ?>
			<div class="form-group">
				<label for=""></label>
				<input type="submit" class="btn btn-primary" value="Export ke PDF">
			</div>
		<?php echo form_close(); ?>
	</div>
</div>	<!--/.main-->

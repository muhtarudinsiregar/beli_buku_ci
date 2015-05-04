<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo form_open('pendaftaran/proses_tambah','role="form"'); ?>
		<label for="">nama</label>
		<input type="text" name="nama">
		<br>
		
		<label for="">email</label>
		<input type="email" name="email">
		<br>
		<label for="">password</label>
		<input type="password" name="password">
		<br>
		<label for="">no HP</label>
		<input type="text" name="no_hp">
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>
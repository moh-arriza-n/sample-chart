<html>
<head>
<title>Form Input Data</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php
include ('koneksi.php');
if(isset($_POST['save'])) {
	$query_save="insert into karyawan (nik,nama,alamat)
	values('".$_POST['nik']."',
			'".$_POST['nama']."',
			'".$_POST['alamat']."'
	)";
	$proses=mysqli_query($konek, $query_save);
	if($proses){
		echo"data berhasil diinput";
	}else{
		echo mysqli_error();
	}
}
?>
<form method="post">
<h2>Input Data Karyawan</h2>
<table class="table">
<thead>
	<tr>
		<br/>
		<td>Nik</td>
		<td><input type="text" name="nik"></td>
	</tr>
	
	<tr>
		
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	
	<tr>
		
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		
		<td></td>
		<td>
		<input type="submit" name="save" class="btn btn-success btn-md" value="Input Data">
		<input type="submit" name="delete" class="btn btn-danger btn-md" value="Hapus Data">
		</td>
	</tr>
</thead>
</table>
</form>
</body>
</html>
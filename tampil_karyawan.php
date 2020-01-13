<html>
<head>
	<title>Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h1>Data Karyawan PT.CSS</h1>
<?php
include('koneksi.php');
$tampil_karyawan=mysqli_query($konek,"select * from karyawan");
?>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
	<tr>
		<th>Nik</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Divisi</th>
	</tr>
</thead>
<?php
while($data = mysqli_fetch_array($tampil_karyawan)) {?>
	<tr>
		<td><?php echo $data['nik'];?> </td>
		<td><?php echo $data['nama'];?> </td>
		<td><?php echo $data['alamat'];?> </td>
		<td><?php echo $data['divisi'];?> </td>
	</td>
<?php } ?>
</table>
</div>
</body>
</html>
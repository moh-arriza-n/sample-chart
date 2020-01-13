<html>
<head>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="Chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>Chart <br/>PLTU Banten 3 Lontar</h2>
	</center>
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
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
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($konek,"select * from karyawan");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					
					<td><?php echo $d['nik']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['divisi']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Engineer", "Administrasi", "HAR", "EP"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_eng = mysqli_query($konek,"select * from karyawan where divisi='Engineer'");
					echo mysqli_num_rows($jumlah_eng);
					?>, 
					<?php 
					$jumlah_ep = mysqli_query($konek,"select * from karyawan where divisi='EP'");
					echo mysqli_num_rows($jumlah_ep);
					?>, 
					<?php 
					$jumlah_har = mysqli_query($konek,"select * from karyawan where divisi='HAR'");
					echo mysqli_num_rows($jumlah_har);
					?>, 
					<?php 
					$jumlah_adm = mysqli_query($konek,"select * from karyawan where divisi='Administrasi'");
					echo mysqli_num_rows($jumlah_adm);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

</body>
</html>
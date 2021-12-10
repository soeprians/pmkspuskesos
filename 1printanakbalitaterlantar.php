<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
 
	<center>
 
		<h3>DATA ANAK BALITA TERLANTAR</h3>
		<h3>DESA SEKARWANGI</h3>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" cellpadding="5" cellspacing="0" style="width: 100%">
		<thead>
			<tr>
				<th>No</th>
	            <th>Id Dtks</th>
	            <th>NKK</th>
	            <th>NIK</th>
	            <th>Nama Peserta</th>
	            <th>Nama Ibu</th>
	            <th>Nama Ayah</th>
	            <th>Alamat</th>
	            <th>Keterangan</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php 
        	include 'koneksi.php';
        	$data = mysqli_query($koneksi, "SELECT * FROM anakbalitaterlantar");
        	while ($d = mysqli_fetch_array($data))
        	{
       	 	?>
        	<tr>
           		<td><?php echo $d['no']; ?></td>
           		<td><?php echo $d['id_dtks']; ?></td>
            	<td><?php echo $d['nkk']; ?></td>
            	<td><?php echo $d['nik']; ?></td>
           	 	<td><?php echo $d['nama']; ?></td>
            	<td><?php echo $d['nama_ibu']; ?></td>
            	<td><?php echo $d['nama_ayah']; ?></td>
            	<td><?php echo $d['alamat']; ?></td>
            	<td><?php echo $d['keterangan']; ?></td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
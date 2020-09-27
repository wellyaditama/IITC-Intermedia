<html>
<head>
	<title>ExcelPort</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Peserta_Seminar.xls");
	?>
 
	<center>
		<h3>DAFTAR PESERTA SEMINAR UI/UX<br/>INTERMEDIA INFORMATION TECHNOLOGY COMPETITION 2020</h3>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Daftar</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>No. Telp</th>
			<th>Hadir?</th>
		</tr>
		<?php 
		$no = 1;
		foreach($row as $u){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->id_daf; ?></td>
			<td><?php echo $u->nama; ?></td>
			<td><?php echo $u->email; ?></td>
			<td> <?php echo $u->alamat; ?> </td>
			<td><?php echo $u->notelp; ?></td>
			<td></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
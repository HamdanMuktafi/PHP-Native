<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hamdan Muktafi</title>
	<style>
		h2 {text-align: center;}

		table {
			margin : auto;

		  	border-collapse: collapse;
		  	width: 50%;
		}

		a {
			text-decoration: none;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		  background-color: #4CAF50;
		  color: white;
		}	
		button {margin-left: 630px;}
	</style>
</head>
<body>

	<h2>Data Mahasiswa Sistem informasi</h2>
<table border="0">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Semester</th>
		<th>Alamat</th>
		<th>Option</th>
	</tr>
	
	<?php 
	include ('koneksi.php') ;
	$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
	$no = 1;
	foreach ($mahasiswa as  $row) {
		echo "<tr>
		<td>".$row['nim']."</td>
		<td>".$row['nama']."</td>
		<td>".$row['semester']."</td>
		<td>".$row['alamat']."</td>
		<td>
		 <a href='#'> Edit </a> || <a href='#'> Delete </a>    
		</td>
		</tr>";
	}

	 ?>

</table><br>
<button>Tambah Data</button>
	
</body>
</html>




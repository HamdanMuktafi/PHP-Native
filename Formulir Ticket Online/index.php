<!DOCTYPE html>
<html>
<head>
	<title>Hamdan Muktafi</title>
	<style >
		body {
			margin-top: 40px;
			margin-left: 450px;
			background-image: url('3.png');
		}
		h2 {margin-left: 50px;}

		div {
			display: inline-block;
		}
		.container {
			background-color: lightblue;
			opacity: 80%;
		}

		.input{
			
  			width: 200px;	
  			background-color:;
  			
		}
		.output{
			
  			width: 200px;
  			background-color: ;
  			

		}
	</style>
</head>
<body>
	<div class="container">

	<h2>Terima Kasih Telah Check Out</h2>
	
	<div class="input">
		<label>Id Pemesan</label><br><hr>
		<label>Nama Pemesan</label><br><hr>
		<label>Alamat</label><br><hr>
		<label>Kode Artis</label><br><hr>
		<label>Nama Artis</label><br><hr>
		<label>Jam Tayang</label><br><hr>
		<label>Tempat</label><br><hr>
		<label>Harga</label><br><hr>
		<label>Jumlah</label><br><hr>
		<label>Diskon</label><br><hr>
		<label>Total Bayar</label>
	</div>

	<div class="output">
	<?php

	$id = $_POST['idPemesan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kode = $_POST['kode'];
	$tempat = $_POST['tempat'];
	$jumlah = $_POST['jumlah']; 
	$tribune = 350000;
	$vip = 500000;
	$vvip = 1000000;
	$diskon = $tribune * 0.005;
	$diskon2 = $vip * 0.005;
	$diskon3 = $vvip * 0.005;
	
	$total = $jumlah * $tribune + $diskon;
	$total2 = $jumlah * $vip + $diskon;
	$total3 = $jumlah * $vvip + $diskon;

	$totala = $jumlah * $tribune;
	$totalb = $jumlah * $vip;
	$totalc = $jumlah * $vvip;

	echo "$id<br><hr>";
	echo "$nama<br><hr>";
	echo "$alamat<br><hr>";
	echo "$kode<br><hr>";

	if ($kode == 'AR') {
		echo "ARMADA<br><hr>";
		echo "19.00-21.00<br><hr>";
	}elseif ($kode == 'JD') {
		echo "JUDIKA<br><hr>";
		echo "13.00-15.00<br><hr>";
	}elseif ($kode == 'TJ') {
		echo "TATA JANETA<br><hr>";
		echo "10.00-12.00<br><hr>";
	}



	echo "$tempat<br><hr>";
	


	if ($jumlah > 5 and $tempat == 'Tribune') {
		echo "Rp. $tribune<br><hr>";
		echo "$jumlah<br><hr>";
		echo "Rp. $diskon" . "<br><hr>";
		echo "$total";
	}elseif ($jumlah > 5 and $tempat == 'VIP') {
		echo "Rp. $vip<br><hr>";
		echo "$jumlah<br><hr>";
		echo "Rp. $diskon2" . "<br><hr>";
		echo "$total2";
	}elseif ($jumlah > 5 and $tempat == 'VVIP') {
		echo "Rp. $vvip<br><hr>";
		echo "$jumlah<br><hr>";
		echo "Rp. $diskon3" . "<br><hr>";
		echo "$total3";
	}elseif ($jumlah <= 5 and $tempat == 'Tribune') {
		echo "$tribune<br><hr>";
		echo "$jumlah<br><hr>";
		echo "Rp. 0" . "<br><hr>";
		echo "$totala";
	}elseif ($jumlah <= 5 and $tempat == 'VIP') {
		echo "Rp. $vip<br><hr>";
		echo "$jumlah<br><hr>";
		echo "Rp. 0" . "<br><hr>";
		echo "$totalb";
	}elseif ($jumlah <= 5 and $tempat == 'VVIP') {
		echo "Rp. $vvip<br><hr>";
		echo "$jumlah<br><hr>";
		echo "Rp. 0" . "<br><hr>";
		echo "$totalc";
	}

	 ?>
	</div>
</div>

</body>
</html>
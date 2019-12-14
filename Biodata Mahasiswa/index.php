<!DOCTYPE html>
<html>
<head>
	<title>Output</title>
	<style>
		body{background-image: url("form.png");}
		div {
			width: 300px;
			height: 200px;
  			margin: auto;
  			border-radius: 5px;
  			
  			padding-top: 270px;
  		}
	</style>	
</head>
<body>
	<div>

<?php 

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$fakultas=$_POST['fakultas'];
$jurusan=$_POST['jurusan'];

$semester=$_POST['semester'];
$tempatlahir=$_POST['tempatlahir'];
$tanggallahir=$_POST['tanggallahir'];
$tentang=$_POST['tentang'];




echo"Nama Anda                  : $nama<br>";
echo"NIM            		  	: $nim<br>";
echo"fakultas                 	: $fakultas<br>";
echo"Jurusan                  	: $jurusan<br>";
echo"Hobby          		  	: ";


if  (isset($_POST['hobi1']))  {
    $_POST['hobi1'].", " ;
    }
    if  (isset($_POST['hobi2']))  {
    echo  $_POST['hobi2'].", " ;
    }
    if  (isset($_POST['hobi3']))  {
    echo  $_POST['hobi3'].", " ;
    }
     if  (isset($_POST['hobi4']))  {
    echo  $_POST['hobi4'].", " ;
    }    


echo"<br>Semester                	: $semester<br>";
echo"Tempat Lahir 					: $tempatlahir<br>";
echo"Tanggal Lahir 					: $tanggallahir<br>";
echo"Tentang                		: $tentang<br>";

?>
</div>
</body>
</html>




<?php 
if(!isset($_COOKIE["login"]))
	header("location:login.php");


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hamdan Muktafi</title>
    <style>
    	.container {
    		background-color: lightblue;
			width: 500px;
    		margin : auto;}
    	h1 {
    		text-align: center;
    	}
	
	</style>
  </head>
  <body>

  	<div class="container">	
		<h1>Selamat Datang di Halaman 1</h1>
		<nav aria-label="Page navigation example" style="margin-top: 300px; margin-left: 120px;">
		  <ul class="pagination">
		    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a href="page1.php" class="page-link" href="#">1</a></li>
		    <li class="page-item"><a href="page2.php" class="page-link" href="#">2</a></li>
		    <li class="page-item"><a href="page3.php" class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>
		</nav>

		 <a href="logout.php"><p style="color: red">Logout</p></a>

	</div>
    
  </body>
</html>




<?php 

if(!isset($_COOKIE["login"]))

	header("location:login.php"); 

?>


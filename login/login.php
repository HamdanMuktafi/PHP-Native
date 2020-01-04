<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    	form {
    		width: 300px;
    		margin: auto;
    		
    	}
    </style>
  </head>
  <body>
    
    <form action="loginprocess.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1">User Name</label>
	    <input type="text" required name="username" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" value="1" class="form-check-input" name="remember">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" value="Login" name="sub" class="btn btn-primary">Submit</button>

	  <?php 
	if(isset($_REQUEST["err"]))
		$msg="Invalid username or Password";
	?>
	<p style="color:red;">
	<?php if(isset($msg))
	{
		
	echo $msg;
	}
	?>
	</p>
</form>


 </body>
</html>
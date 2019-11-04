<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="tools/bootstrap/css/bootstrap.min.css"> 
		<script src="tools/bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="text-white">
		<div class="container bg-primary">		
			<div class="jumbotron bg-primary"
				 style="padding: 30px;">
				 <br>
				<h1 class="text-center display-4 font-weight-bold">Login - MisiYouth</h1>
				<p class="text-center"
				   style="font-size: 130%;">Semangat memantau</p>
			</div>
			<form ACTION="" METHOD="POST" NAME="input">
			  	<div class="form-group">
			    	<label for="username">Username:</label>
			    	<input type="text" class="form-control" name="username" id="username">
			  	</div>
			  	<div class="form-group">
			    	<label for="pwd">Password:</label>
			    	<input type="password" class="form-control" name="pwd" id="pwd">
			  	</div>
		  	<button type="submit" name="login" value="login" class="btn btn-success">Login</button>
 
			<br><br>
 			<b><p id="demo" class="text-white" style="display: none;
 													font-size: 120%;">Username atau Password salah</p><b>

			</form> 
			<br>
		</div>
	</body>
</html>

<?php
if (isset($_POST['login']))
{
	$user1 = $_POST['username'];
	$pass = $_POST['pwd'];
	echo "<br>sudah masuk inputan";
	if($user1 == "admin" && $pass == "misioye")
	{
		$_SESSION['login'] = $user1;
		header("location: beranda.php");
	} else
	{ ?>
		<script>document.getElementById("demo").style.display = "block";
		</script>
	
	<?php }
}
?>
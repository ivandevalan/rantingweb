<!DOCTYPE html>
<html>
	<head>
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="../tools/bootstrap/css/bootstrap.min.css"> 
		<script src="../tools/bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="text-white">
		<div class="container bg-primary">		
			<div class="jumbotron bg-primary">
				<h1 class="text-center display-4 font-weight-bold">Login Page</h1>
			</div>
				<form action="/action_page.php">
				  	<div class="form-group">
				    	<label for="email">Email address:</label>
				    	<input type="email" class="form-control" id="email" placeholder="blablabla@example.com">
				  	</div>
				  	<div class="form-group">
				    	<label for="pwd">Password:</label>
				    	<input type="password" class="form-control" id="pwd" placeholder="*******">
				  	</div>
			  	<button type="submit" class="btn btn-success">Login</button>
				</form> 
				<br>
		</div>
	</body>
</html>
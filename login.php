 <?php include('server.php') ?> 
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width,
	 initial-scale = 1.0">
	 <meta http-equiv="X-UA-Compatible" content = "ie-edge">
	 <! -- Bootstrap 4 CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" href="styles.css">
	 <title>Login - ZooBelly </title>
	

	
</head>

<header>


</header>


<body>

 
	      
	        
	<div class = "container">
	<div class = "row">
	<div class = "col-md-4 offset-md-4 form-div login">
	
	      
	<form action = "login.php" method="post">

     

	
	<h1 class = "text-center"> ZooBelly </h1>
		
		<br>
		<?php include('errors.php'); ?> 
		
		
		
		
		
		<div class = "form-group">
		
		<input type = "text" name = "username" class = "form-control form-control-lg" placeholder="Username or Email" >
		</div>
		
		
		
		<div class = "form-group">
		
		<input type = "password" name = "password" class = "form-control form-control-lg" placeholder="Password">
		</div>
		
		
		
		
		
		<div class = "form-group">
		<button type = "submit" name = "login-btn" 
		class = "btn btn-primary btn-block btn-lg">Login</button>
		</div>
		
	</form>
	
	</div>
	</div>
	</div>
	
	
	
	<div class = "container">
	<div class = "row">
	<div class = "col-md-4 offset-md-4 form-div">
	<p class = "text-center">Not yet a member? <a href = "register.php">Sign Up</a></p>
	</div>
	</div>
	</div>
	
	
	<h5 class = "text-center"> Get the App. </h5>
	
	<img src="AppStore.png" alt="AppStore" class="center" width="90" height="80" > 
	<br>
	<img src="GooglePlay.png" alt="PlayStore" class="center" width="90" height="80" > 








</body>

<hr>
<footer class = "text-center" >

<p> &#169; 2021 ZooBelly </p>

</footer>


</html>

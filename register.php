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
	  
	 <title>Sign Up - ZooBelly </title>
	

	
</head>
<header><a>
<header><a>
<h2 class ="text-center"> 
		- SOCIAL NETWORKING APPLICATION FOR PROFESSIONAL COLLABORATION & MENTORING  -
		</h2>
</a>

<hr>

</header>
<body>

 <h1 class = "text-center"> ZooBelly </h1>
	      
	        
	<div class = "container">
	<div class = "row">
	<div class = "col-md-4 offset-md-4 form-div "> 
	
	      <form action = "register.php" method="post">
	      
		<p class ="text-center">Sign up to connect with other professionals like you.</p>
		 
		<?php include('errors.php'); ?>
		
		<div class = "form-group">
		<label for = "username"> Username</label>
		
		
		<input type="text" name="username" value="<?php echo $username; ?>"
		 class = "form-control form-control-lg" placeholder="Username" >
		
		
		</div>
		
		<div class = "form-group">
		<label for = "email"> Email</label>
		<input type = "email" name = "email" value="<?php echo $email; ?>" 
		class = "form-control form-control-lg" placeholder="Email">
		</div>
		
		<div class = "form-group">
		<label for = "password"> Password</label>
		<input type = "password" name="password_1" 
		class = "form-control form-control-lg" placeholder="Password">
		</div>
		
		
		<div class = "form-group">
		
		<label for = "passwordConfirm"> Confirm Password</label>
		<input type = "password" name="password_2"
		class = "form-control form-control-lg" placeholder="Confirm Password">
		</div>
		
		
		
		<div class = "form-group">
		<button type = "submit" name = "signup-btn" 
		class = "btn btn-primary btn-block btn-lg">Sign Up</button>
		</div>
		
	</form>
	
	
	
	
	
	</div>
	</div>
	</div>
	
	
	
	<div class = "container">
	<div class = "row">
	<div class = "col-md-4 offset-md-4 form-div">
	
	<p class = "text-center">Have an account? <a href = "login.php">Login In</a></p>
	
	</div>
	</div>
	</div>
	
	
	<h5 class = "text-center"> Get the App. </h5>
	<img src="AppStore.png" alt="AppStore" class="center" width="100" height="60"> 
	<img src="GooglePlay.png" alt="PlayStore" class="center" width="100" height="60"> 



</body>


<hr>
<footer class = "text-center" >

<p> &#169; 2021 ZooBelly </p>

</footer>



</html>

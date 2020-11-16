<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


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
	 <title>Home - ZooBelly </title>
	

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 5px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 15px; 
  line-height: 5px;
  border-radius: 1px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>


</head>
<header>

<div class="header">
  <a href="#default" class="logo">ZooBelly</a>
  
  <div>
  <input type="text" placeholder="Search..for other pros like you">
  </div>
   
   
   
   
  <div class="header-right">
    
      <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    	 <a class="active" href="index.php?logout='1'" style="color: red;">logout</a> 
    <?php endif ?>
    
	  
	  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    
  </div>
</div>



</header>
<body>



<div style="padding-left:20px">
  
 <P>ZooBelly provides a platform where knowledge and ideas will be share to drive tomorrow’s innovation. </P>
 
 <p> Users Profile Creation - Macthing functionality with other users studying or working in the same  profession. </p>
 <p> Geo - Location API </p>
 
 <P> Virtual Classroom will have all the neccessary tools for teaching </P>  
 <P> Video Conferencing </P> 
 <P>  Instant Messaging, Group chat </P> 
 <P> Code Editor </P> 
 
 <P> VR MEETINGS </P>

  
</div>






	
	
	
	

</body>

<hr>
<footer class = "text-center" >

<p> &#169; 2021 ZooBelly </p>

</footer>



</html>

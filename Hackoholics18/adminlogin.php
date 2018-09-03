<?php require 'config.php';
session_start();	
if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$password=  md5($_POST['password']);


	$query="SELECT * FROM user where username='$name' and password='$password'";
	$query_run=mysqli_query($mysqli,$query);
	if(mysqli_num_rows($query_run)==1){
		echo "sucess";
		$_SESSION['user']=$name;
		header('location:admin.php');
		
	}
	else{
		echo "fail";
	}
}
 ?>


  <html>
 <head>
 	<title>adminlogin</title>
 </head>
 <body>
<center>
 <h1>LOGIN</h1>
 	<form action="adminlogin.php" method="post"> 
 		Username: <input type="text" name="username" placeholder="enter your username"><br><br>
 		 		Password: <input type="password" name="password"placeholder="enter your password"><br><br>
 		 		<input type="submit" name="submit"><br>
 	</form>
</center> 
 </body>
 </html>
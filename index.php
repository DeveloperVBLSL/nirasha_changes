<?php

include 'database/connection.php';

session_start();


if($conn===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from user where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["type"]=="rsm")
	{	

		$_SESSION["username"]=$username;

		header("location:rsm.php");
	}

	elseif($row["type"]=="ce")
	{

		$_SESSION["username"]=$username;
		
		header("location:ce.php");
	}

	
	else
	{
		echo "username or password incorrect";
	}

}




?>



<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Login Page</title> 

  <link rel="stylesheet" href="css/login.css">

 </head> 

 <body> <!-- partial:index.partial.html --> 
 <div class="login-box">
  <h2>Login to KPI</h2>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>

</body>

</html>

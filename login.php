<?php
require "config.php";
if(!empty($_SESSION["id"])){
header("Location: login.php");
}
if(isset($_POST["submitbtn"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpass = $_POST["confirmpass"];
  $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpass){
      $query = "INSERT INTO signup VALUES('','$username','$email','$password','$confirmpass')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('welcome!'); </script>";
    }
    else{
      echo
      "<script> alert('Password is Incorrect'); </script>";
    }
  }
}
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
if(isset($_POST["loginbtn"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?><!-- Title  -->
 <title>VIRTUAL DARZEE</title>

 <!-- Favicon  -->
 <link rel="icon" href="img/core-img/logo q.png">


<link rel="stylesheet" href="login.css">
 <!-- <link rel="stylesheet" href=""> -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post" autocomplete="off">
			<h1>Create Account</h1>
			<input type="text" placeholder="Name" name="username"/>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<input type="confirmpassword" placeholder="Confirm Password" name="confirmpass" />

			<button name="submitbtn">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post" autocomplete="off">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button name="loginbtn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn" >Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome To </h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp" >Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="login.js"></script>

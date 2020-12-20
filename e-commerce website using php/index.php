<html>
<head>
<title>Login Using Cookie with Logout</title>
<img src="13.png" style="float:left;width:100 px;height:100px">
<style>
#container{
background-color:grey;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111111;
}
</style>
<br><br><br><br><br><br>
<hr>
<ul>
  <li><a href="#New arrivals">New arrivals</a></li>
  <li><a href="#Men">Men</a></li>
  <li><a href="#Women">Women</a></li>
  <li><a href="#Kids">Kids</a></li>
  <li><a href="#Register">Register</a></li>
  <li><a href="C:\wamp\www\ecom\index.php">login</a></li>
</ul><br>
</head>
<body style="background-color:grey;">
<?php
	session_start();
	include('conn.php');
?>

	<h2>Login Form</h2>
	<form action="login.php" method="POST" >
	<label><h1>Username:</h1></label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
	<label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
	<input type="checkbox" name="remember"> Remember me <br><br>
	<input type="submit" value="Login" name="login">
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</body>
</html>
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

<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('conn.php');
	$query=mysqli_query($conn,"select * from log where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>

<body style="background-color:grey;">
	<h2>Login Success</h2>
	<?php echo $row["fullname"]; ?>
	<br>
	<a href="logout.php">Logout</a>
	<br><br><br>
<img src="PUMA._CB427401010_.jpg" style="width:30%;height:50%">
<img src="images.jfif" style="width:30%;height:50%;" hspace="60">
<iframe src="https://www.bata.in/" style="float:right;width:25%;height:80%">
<iframe src="https://in.puma.com/" style="width:50%;height:30%">
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<img src="C:\wamp\www\New folder (2)\13.png" style="float:left;width:100 px;height:100px"><br>
<h style="padding:20px 0px 0px 0px;color:red;font-family:algerian;font-size:200%">BANK APPLICATION</h>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 250px; 
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
#container{
background-color:grey;
width:50%;
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
.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
h1{
font-family:castellar;
color:red;
}
h2{
font-family:castellar;
color:red;
}



</style>
<hr>
<ul>
  <li><a href="#Bank operations">Bank operations</a></li>
  <li><a href="#Loan options">Loan options</a></li>
  <li><a href="#Gallery">Gallery</a></li>
  <li><a href="#Login">Login</a></li>
  <li><a href="C:\Users\Administrator\Desktop\Register.html">Register</a></li>
</ul><br>
</style>
</head>
<body style="background-image:url('22.jpg');background-size:cover;">
<?php
session_start();
$name=$_POST["name"];
echo "<pre><center> <b> <h1>   WELCOME  ".$name."<h2></b><center></pre></h2>";
$_SESSION["username"]=$name;
?>
<form action=""> <center>
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select an option:</option>
    <option value="Accinfo">Accinfo</option>
    <option value="Balance summary ">Balance summary</option>
    <option value="ram">personalinfo</option>
  </select></center>
</form>
<br>
<div id="txtHint"><center>Customer info will be listed here...</div></center>

<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ts.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>
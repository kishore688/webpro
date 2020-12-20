<html>
<head>
<style>
tr,th,td{
	border:2px solid orange;
}
table{
	float:center;
}
</style>
</head>

<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "pers");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT customername,customerid, city, country, addr
FROM pers1 WHERE customername = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cname, $cid, $city, $country, $adr);
$stmt->fetch();
$stmt->close();

echo "<center><table>";
echo "<tr>";
echo "<th>Customername</th>";
echo "<th>Companyid</th>";
echo "<th>City</th>";
echo "<th>Country</th>";
echo "<th>address</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $cname . "</td>";
echo "<td>" . $cid . "</td>";
echo "<td>" . $city . "</td>";
echo "<td>" . $country . "</td>";
echo "<td>" . $adr . "</td>";
echo "</tr>";
echo "</table></center>";


?>
<br>
<a href="logout.html"><center>LOGOUT</center></a>
</body>
</html>
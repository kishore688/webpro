<?php
$conn=new mysqli("localhost","root","","t17");
if($conn->connect_error){
   exit("Could not connect");
}
$sql="SELECT * FROM bank WHERE account=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("s",$_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($account,$customername,$balanceamount,$address,$phno);
$stmt->fetch();
$stmt->close();
echo "<table>";
echo "<tr>";
echo "<th>account</th>";
echo "<th>customername</th>";
echo "<th>balanceamount</th>";
echo "<th>address</th>";
echo "<th>ph.no</th>";
echo "<tr>";
echo "</tr>";
echo "<td>".$account."</td>";
echo "<td>".$customername."</td>";
echo "<td>".$balanceamount."</td>";
echo "<td>".$address."</td>";
echo "<td>".$phno."</td>";
echo "<tr>";
echo "</table>";
?>

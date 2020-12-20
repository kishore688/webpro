<?php
$id1= $_POST["did"];
$con = new mysqli("localhost","root","","form");
$sql1="DELETE FROM insdel WHERE mail='$id1'";
if($con->query($sql1) === TRUE)
{
echo "Data which is inserted is deleted form the Database";
}
$sql1 = "SELECT name,mail,age FROM insdel";
$res = $con->query($sql1);
if ($res->num_rows > 0) {
echo "<center><table border='1'.'solid'.'black'
<tr>
<th>User Name</th>
<th>Email-ID</th>
<th>Age</th>
</tr>";
while($row = $res->fetch_assoc()) {
       echo "<tr>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["mail"]."</td>";
echo "<td>". $row["age"]."</td>";
echo "</tr>";
   }
echo "</table></center>";
} else {
echo "There is no records in the given sql table and its database";
}
?>
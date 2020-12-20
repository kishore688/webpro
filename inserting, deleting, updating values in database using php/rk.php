<html>
<?php
echo "<style>
  table,td,th{
  border:2px solid black;
  border-collapse:collapse;
  }
  td,th{
  height:50px;
  }
  </style>";
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $age = $_POST["age"];
    $con = new mysqli("localhost","root","","form");
    $sql = "INSERT INTO insdel(name,mail,age) VALUES('$name','$mail','$age')";
    if ($con->query($sql) === TRUE){
        echo "Registration Successful!";
    }
    else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
    $sql1 = "SELECT name,mail,age FROM insdel";
$result = $con->query($sql1);
 
if ($result->num_rows > 0) {
   
    echo "<center><table border='1'>
    <tr>
    <th>NAME</th>
    <th>MAIL</th>
    <th>AGE</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
       echo "<tr>";
       echo "<td>" . $row['name'] . "</td>";
       echo "<td>" . $row['mail'] . "</td>";
       echo "<td>" . $row['age'] . "</td>";
       echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}
$con->close();
?>
<form action="for.html" method="post">
<h3><center>To insert new values<center></h3>
 <center><input type="submit" value="insert"></button><center>
</form>
<form action="456.php" method="post">
<h3><center>Enter the mail to delete</h3><center>
<p>
 <label><center>mail:</label><center>
 <center><input type="text" name="did"><center>
</p>
 <center><input type="submit" value="delete"></button><center>
 
 
 <form action="789.php" method="post">
<h3><center>Enter the mail to update</h3><center>
<p>
 <label><center>mail:</label><center>
 <center><input type="text" name="up2"><center>
 <label><center>name:</label><center>
 <center><input type="text" name="up1"><center>
</p>
 <center><input type="submit" value="update"></button><center>
 
</form>
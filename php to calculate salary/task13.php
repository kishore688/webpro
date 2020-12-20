<html>
<head>
<title>BASIC PHP</title>
<style>
h2{
    font-family:century gothic;
	background-color:grey;
}
</style>
</head>
<body style="background-color:lightblue;">
<?php
echo "<br><h2><b>The below table contains employee_ID and Total hours<br></h2></b>";



echo"<h2></h2>";

echo "<br>Employee_ID&nbsp&nbspTotal_Hours<br><br>";
$EmpD=array("111"=>"23","112"=>"40","113"=>"14","114"=>"65","115"=>"34","116"=>"25","117"=>"50");

foreach($EmpD as $x => $x_value) {
    echo " &nbsp &nbsp ".$x." &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ".$x_value;
    
    echo "<br>";
}

$Ed = $_POST['id'];
echo "<br><h2><b>The below table contains salary of the employee<br></b></h2>";

foreach($EmpD as $x => $x_value) {
        echo "<br>Salary of The Employee_ID ".$x." = ".salary($x_value);
		echo "<br>";
}

function salary($s1)
{
    if($s1<=40)
        return $s1*150;
    else if($s1>40 && $s1<50)
        return $s1*150*1.5;
    else
        return 0;
}





?>
</body>
</html>
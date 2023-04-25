<?php

include("../admin/Select.php");

$college="College of computing and informatics";


$sql="select *from teacher";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$fname=$row['Full_name'];
$dept=$row['Department'];
$ac_yr=$row['Academic_Year'];
$date=date("m/d/y");

?>
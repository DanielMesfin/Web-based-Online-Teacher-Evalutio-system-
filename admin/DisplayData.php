<?php 
include("Select.php");
function fetchData($table){
global $con;
    $sql="Select *from $table";
    $Result=mysqli_query($con,$sql);
    return $Result;
}
?>
<?php
function session_control($username){
session_start();
$_SESSION['User_Name']=$username;
}
function get_data($uname,$uid,$tname){
$found=false;
$con=mysqli_connect("localhost","root","","otes",);
if($con){
  echo "Successfully connected";
  $sql="Select *from $tname";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      if($row['Full_name']==$uname && $row['Password']==$uid){
        $found=true;
        break;
      }
      else{
        $found=false;
      }
    }
}else{
  echo "Failed to fetch data ".mysqli_error($con);
  }
}
mysqli_close($con);
  return $found;
}
if(isset($_POST['submit'])){
$uname=$_POST['userName'];
$pwd = $_POST['password'];
    if(!empty($uname) && !empty($pwd)){
      if(get_data($uname,$pwd,"student")){
        session_control($uname);
        header('Location: ../Evaluation/evaluation(student).php');
      }
      else if(get_data($uname,$pwd,"teacher")){
        session_control($uname);
        header('Location: ../Evaluation/evaluation(peers).php');
      }
      else if(get_data($uname,$pwd,"head")){
        session_control($uname);
        header('Location: ../Evaluation/evaluation(head).php');
  // TODO :check if evaluation for teachers by teachers is connectd correctly
      }
      else{
        // user is not found in this system 
        echo "Failed Please try again";
      }
    }
}
else{
  echo "<script> alert('Please Check your user Name and password') </script>";
  echo "Please Check your user Name and password";
}
?>
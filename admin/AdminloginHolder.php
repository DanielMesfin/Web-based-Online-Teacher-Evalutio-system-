<?php
// define variables and set to empty values to assign condition 
$userNameErr = $passwordError = "";
$userName = $password  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){  
  $userName=$_POST['userName'];
  $password = $_POST['password'];
    if(isset($_POST['submit_login'])){
    // check if user name is empty
    if (empty($userName)) {
    $userNameErr = "User Name is required";
    }
  else{
    $userName = test_input($userName);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {
      $userNameErr = "Only letters and white space allowed";
    }
  }
  // check if password is correct
if (empty($password)) {
    $passwordError = "Password  is required";
  }else {
    $password = test_input($password);
    // check if password is length is long or not 
    if (len($password)<6) {
      $passwordError = "password must be grater than 6 characters";
    }
  }
  // if the login information is filed correctly 
  if(!empty($userName)&&!empty($password)){
    function session_control($userName){
        session_start();
        $_SESSION['User_Name']=$userName;
        }
        $error="";
      function get_data($uname,$uid,$tname){
        $found=false;
        $con=mysqli_connect("localhost","root","","otes");
        $sql="SELECT * FROM admin";
        if($con){
          $result=mysqli_query($con,$sql);
          if($result){
            if(isset($_POST['submit_login'])){
                $uname=$_POST['userName'];
                $pwd = $_POST['password'];
                if(!empty($uname) && !empty($pwd)){
                    if($row['ID']==$uname && $row['Password']==$pwd){
                    //header('Location: ../Evaluation/evaluation(peers).php');
                    }else{
                        $error="User name or Password is incorrect";
                    }
                }else{
                    $error="User name or Password is Empty";
                }
            }
          }
        }else{
            $error="server is not found ";
        }
      }
      }
    

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
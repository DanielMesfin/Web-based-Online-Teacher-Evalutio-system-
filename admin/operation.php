<?php 
include ("Select.php");
if(isset($_GET['deleteid'])){
function delete($idno){
    global $con;
    $sql="Delete from head where ID = '$idno'";
    $Result=mysqli_query($con,$sql);
    if($Result){
       echo "Successfully deleted";
       return true;
    }
    else{
      die("failed to delete".mysqli_error($con));
      return false;
    }
}    

$deleted=delete($_GET['deleteid']);

if($deleted){
    header("Refresh:0; url=admin_trial.php"); 
}   
}
else if(isset($_GET['updateid'])){   
  

  
}


          //CHANGING PASSWORD BY USERS
function changePassword($newpwd,$table,$id){
global $con;
$changed=false;
if(!empty($newpwd)){
  $sql="Update $table  set Password ='$newpwd' where ID ='$id'";
    $Result=mysqli_query($con,$sql);
      if($Result){
      echo "Successfully changed";
      $changed=true;
     }
  else{
    echo "something went wrong";
    die(mysqli_error($con));
    $changed=false;
  }
}
return $changed;
}

// FOR TEACHERS

    if(isset($_POST['change_pwd_T'])){ 
        $id=$_POST['ID'];
        $new =$_POST['new_pwd'];
        if(!empty($new)){
            $result=changePassword($new,'teacher',$id);
          if($result){
            echo "<script> alert('successfull') </script>";
          }
          else{
            echo "<script> alert('some thing went wrong') </script>";
            // header("Location:../Evaluation/evaluation(Peers).php");
          }
        }
        else{
          echo "<script> alert('please enter a new password') </script>";
        }
}

// FOR STUDENTS
if(isset($_POST['change_pwd_S'])){ 
  $id=$_POST['ID'];
  $new =$_POST['new_pwd'];
      $result=changePassword($new,'student',$id);
      echo $result;
}
// FOR HEAD
if(isset($_POST['change_pwd_H'])){ 
  $id=$_POST['ID'];
  $new =$_POST['new_pwd'];
      $result=changePassword($new,'head',$id);
      echo $result;
}
?>
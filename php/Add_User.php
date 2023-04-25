<?php
function validate_input($input){
    $valid=false;
    if(empty($input)){
        echo "Please check inputs ";
    }
    else{
        $valid= true;
    }
    return $valid;
}
function Add_user($fullname,$id,$pwd,$dept,$program=null,$ac_yr,$tablename){
    $con=mysqli_connect("localhost","root","","otes");
    if($con){
        echo "connection established";
    $sql="Insert into $tablename value ('$fullname','$id','$pwd','$dept','$program','$ac_yr')";
    $result=$con->query($sql);
    if($result){
        echo "<h1>Successfull </h1>";
        return true;
    }
    else{
        echo "OOPS ! failed to record , please try again";
    return false;
    }
}
else{
    die("failed to connect");
    }
}
//---ADDING STUDENTS-----
if(isset($_POST['st_submit'])){
$fullname=$_POST['st_fname']." ".$_POST['st_mname']." ".$_POST['st_lname'];
$id=$_POST['st_id_no'];
$dept=$_POST['st_department'];
$ac_yr=$_POST['st_Academic_year'];
$program=$_POST['st_Academic_program'];
$pwd=$_POST['st_pwd'];
if(validate_input($_POST['st_fname']) && validate_input($_POST['st_mname']) && validate_input($_POST['st_lname']) && validate_input($id) && validate_input($dept) && validate_input($ac_yr) && validate_input($program) && validate_input($pwd) ){
    Add_user($fullname,$id,$pwd,$dept,$program,$ac_yr,"student");
    // TO DO: ADD POP TO SHOW THE SUCCESSFULL COMPLETION OF OPERATION
    header("Refresh:0; url=../admin/admin_trial.php"); 
     }
     else{
        echo "Please  check your inputs";
     }
}
//----FOR ADDING TEACHERS-----
else if(isset($_POST['te_submit'])){
$fullname=$_POST['te_fname']." ".$_POST['te_mname']." ".$_POST['te_lname'];
$id=$_POST['te_id_no'];
$dept=$_POST['te_department'];
$ac_yr=$_POST['te_Academic_year'];
$course=$_POST['te_course_id'];
$pwd=$_POST['te_pwd'];
if(validate_input($_POST['te_fname']) && validate_input($_POST['te_mname']) && validate_input($_POST['te_lname']) && validate_input($id) && validate_input($dept) && validate_input($ac_yr) && validate_input($course) && validate_input($pwd) ){
    Add_user($fullname,$id,$pwd,$dept,$course,$ac_yr,"teacher");
   // TO DO: ADD POP TO SHOW THE SUCCESSFULL COMPLETION OF OPERATION
   header("Refresh:0; url=../admin/admin_trial.php");  
}else{
    echo "Please  check your inputs";
}
}
        //----ADDING HEAD---
else if(isset($_POST['head_submit'])){
$fullname=$_POST['head_fname']." ".$_POST['head_mname']." ".$_POST['head_lname'];
$id=$_POST['head_id_no'];
$dept=$_POST['head_department'];
$ac_yr=$_POST['head_Academic_year'];
$pwd=$_POST['head_pwd'];
    if(validate_input($_POST['head_fname']) && validate_input($_POST['head_mname']) && validate_input($_POST['head_lname']) && validate_input($id) && validate_input($dept) && validate_input($ac_yr) && validate_input($pwd) ){
        $con=mysqli_connect("localhost","root","","otes");
        if($con){
            echo "connection established";
        $sql="Insert into head value ('$fullname','$id','$pwd','$dept','$ac_yr')";
        
        $result=$con->query($sql);
        
        if($result){
            echo "<h1>Successfull </h1>";
        }
        else{
            echo "OOPS ! failed to record , please try again";
        }
        
    }
        else{
            die("failed to connect");
        }

    // TO DO: ADD POP TO SHOW THE SUCCESSFULL COMPLETION OF OPERATION
    
    header("Refresh:0; url=../admin/admin_trial.php"); 
}
else{
    echo "Please  check your inputs";
}
}
?>
<?php
if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $id=$_POST['id'];
    $dept=$_POST['dept'];
    $pwd=$_POST['pwd'];
    $pwd_confirm=$_POST['confirm-Password'];
    $fullname=$fname." ".$mname." ".$lname;
    if($pwd===$pwd_confirm){
            $con=mysqli_connect("localhost","root","","otes");
            if($con){
                    $sql="Update admin set Full_name ='$fullname' ,ID='$id',Password='$pwd'  where ID = '$id' "; 
                    $result=$con->query($sql);
                    if($result){
                        echo "Successfully updated";
                    }
                    else{
                        echo "Failed to update";
                    }
            }
            else{
                echo "Failed to Establish connection";
            }
 }else{
    echo "Please chech your passwords";
 }

}
?>
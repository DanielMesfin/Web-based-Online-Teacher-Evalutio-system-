<?php 
$con=mysqli_connect("localhost","root","","otes");
         $sql="Select *from teacher";
        $result = mysqli_query($con,$sql);
         if($result){                 
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $fullname=$row['Full_name']; 
    $id=(String)$row['ID'];  
    $dept=$row['Department'];
  echo "
    <tr>
      <th scope='row'>$fullname</th>
      <td>$id</td>
      <td>$dept</td>
      <td >
      <Button class='btn btn-primary '><a href='../php/operation.php?updateid=$id'  class='text-light'>Update</a><Button>
      <Button class='btn btn-danger '><a href='../php/operation.php?deleteid=$id'  class='text-light'>Delete</a><Button>
      </td>
    </tr>
   ";
  }  

}
else{
    die("failed to insert".mysqli_error($con));
}

//TO DO: function to update user data 

$closed=mysqli_close($con); 

?>
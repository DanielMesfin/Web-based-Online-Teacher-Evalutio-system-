<?php 
$con=mysqli_connect("localhost","root","","otes");
$sql="Select *from head";
$result = mysqli_query($con,$sql);
if($result){                 
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $fullname=$row['Full_name']; 
    $id=(String)$row['ID'];  
    $dept=$row['Department'];
    $acadamiy_year=$row['Academic_year'];
    // this is the data of head
    echo "  <tbody>
    <tr>
      <th scope='row'>$fullname</th>
      <td>$id</td>
      <td>$dept</td>
      <td>$acadamiy_year</td>
      <td>
      <Button class='btn btn-primary '><a href='operation.php?updateid=$id'  class='text-light'>Update</a><Button>
      <Button class='btn btn-danger '><a href='operation.php?deleteid=$id'  class='text-light'>Delete</a><Button>
      </td>
    </tr>
  </tbody>
   ";
  }  

}
else{
    die("failed to insert".mysqli_error($con));
}
//TO DO: function to update user data 
$closed=mysqli_close($con); 

?>
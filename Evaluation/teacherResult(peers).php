<?php
function connection_to_result(){
    $connection=mysqli_connect("localhost","root","","otes");
    if($connection){
        $sql="SELECT * FROM teacher WHERE Id=1122";
        $result = mysqli_query($connection,$sql);
        if($result){
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                 $fullname=$row['Full_name']; 
                 $id=(String)$row['ID'];  
                 $dept=$row['Department'];
                 
                 echo $dept;
                }
            }
        }
                else{
                    echo "connectin failurefull";
                 }
                }
echo connection_to_result();

    if(isset($_POST['peerEvalution'])){
        $value1=$_POST['1']; $value2=$_POST['2'];
        $value3=$_POST['3']; $value4=$_POST['4'];
        $value5=$_POST['5'];$value6=$_POST['6'];
        $value7=$_POST['7'];$value8=$_POST['8'];
        $value9=$_POST['9'];$value10=$_POST['10'];
        $value11=$_POST['11'];$value12=$_POST['12'];
        $value13=$_POST['13'];$value14=$_POST['14'];
        $value15=$_POST['15']; $value16=$_POST['16'];
        $value17=$_POST['17'];$value18=$_POST['18'];
        $value19=$_POST['19'];$value20=$_POST['20'];
        $value21=$_POST['21'];$value26=$_POST['26'];
        $value22=$_POST['22']; $value23=$_POST['23'];
        $value24=$_POST['24'];$value25=$_POST['25'];
        $value25=$_POST['26'];$value27=$_POST['27'];
        $value28=$_POST['28'];$value29=$_POST['29'];
        $value30=$_POST['30'];$value31=$_POST['31'];
        $value32=$_POST['32'];$value33=$_POST['33'];
        $value34=$_POST['34'];$value35=$_POST['35'];
        $totalSum=$value1+$value2+$value3+$value4+$value5+
                $value6+$value7+$value8+$value9+$value10+$value11+$value12+$value13+
                $value14+$value15+$value16+$value17+$value18+$value19+$value20+$value21
                +$value22+$value23+$value24+$value25+$value26+$value27+$value28+$value29+$value30+$value31+$value32+$value33+$value34+$value35;
       echo $totalSum."this is the total sum of the teacher";
}
?>
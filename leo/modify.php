<?php
$host='localhost';
$user='root';
$pass='';
$db='students';

$conn=new mysqli($host,$user,$pass,$db);
echo "Success";

$sid=$_POST['sid'];
$sna=$_POST['sna'];
$sage=$_POST['sage'];
$sq=$_POST['sq'];

$sql="update student_details set student_name='$sna' , student_age='$sage',student_q='$sq' where student_id='$sid'";
$res=$conn->query($sql);
if($res==true){
    echo "Modification  Success";
}
else
{
   echo "Error";
}

$conn->close();

?>
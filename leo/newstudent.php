<?php
$host='localhost';
$user='root';
$pass='';
$db='students';

$conn= new mysqli($host,$user,$pass,$db);
echo "Success";

$sid=$_POST['sid'];
$sna=$_POST['sna'];
$sage=$_POST['sage'];
$sq=$_POST['sq'];

$sql="insert into student_details(student_id,student_name,student_age,student_q) values('$sid','$sna','$sage','$sq')";
$res=$conn->query($sql);
if($res==true){
    echo "Connection Success";
}
else
{
   echo "Error";
}

$conn->close();

?>
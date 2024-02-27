<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: blueviolet;
           
        }
        #h{
           background-color: aliceblue;
           color: black;
           border-color:black;
        }
    </style>
</head>
<body>
    <div id="h">
    <center> <h1><i>Student Details</i></h1></center>
        <hr>
        <div id="nav">
          <a href="student.html">Home</a>
          <a href="newstudent.html">New Student</a>
          <a href="modify.html">Modify Student</a>
          <a href="readstudent.php">View Details</a>

        </div>
    </div>
    

<?php
$host='localhost';
$user='root';
$pass='';
$db='students';

$conn=new mysqli($host,$user,$pass,$db);
$sql="select * from student_details";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
        echo '<td>' . $row['student_id'] . '</td>';
        echo '<td>' . $row['student_name'] . '</td>';
        echo '<td>' . $row['student_age'] . '</td>';
        echo '<td>' . $row['student_q'] . '</td>';
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>
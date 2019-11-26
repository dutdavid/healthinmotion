<?php

$con = mysqli_connect('127.0.0.1', 'root', '');

if(!$con)
{
  echo 'not connected to server';
}
if(!mysqli_select_db($con,'locum'))
{
  echo'database not slected';
}

$patient_Fn = $_POST['patient_Fn'];
$patient_Ln = $_POST['patient_Ln'];
$report = $_POST['report'];

$sql = "INSERT INTO diag (patient_Fn,patient_Ln,report) VALUES ('$patient_Fn','$patient_Ln','$report')";

if(!mysqli_query($con,$sql))
{
  echo 'Not Inserted';
}
else
{
  echo 'Inserted';
}

header("refresh:2; url=upload.php");

?>





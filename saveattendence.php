<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("Config.php");
//include ("AttendenceForm.php");
$stid=$_POST['sttid'];
//$subj=$_POST['subj'];
$atten=$_POST['present'];
$date = date('Y-m-d');
$query=mysql_query("Insert into tbl_attendence (StudentRollNumber,Attendence,Date)  VALUES('$stid','$atten','$date')");

//echo "$stid\n";
//echo "$subj\n";
//echo "$atten\n";
//echo "$date\n";
header("location:AttendenceForm.php");




?>
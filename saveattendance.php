<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("Config.php");
//include ("attendanceForm.php");
$stid=$_POST['sttid'];
//$subj=$_POST['subj'];
$atten=$_POST['present'];
$date = date('Y-m-d');

$query = mysql_query("select count(StudentRollNumber) from tbl_attendance where(Date = '$date' and StudentRollNumber = '$stid') ");
$row2 = mysql_fetch_row($query);
//echo $row2[0];

if( $row2[0] == 0 )
	$query=mysql_query("Insert into tbl_attendance (StudentRollNumber,Attendance,Date)  VALUES('$stid','$atten','$date')" );		

//echo "$stid\n";
///echo "$subj\n";
//echo "$atten\n";
//echo "$date\n";
header("location:attendanceForm.php");




?>
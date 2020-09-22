<?php

include("connection.php"); 


$roll_no=$_POST['roll_no'];
$student_name=$_POST['student_name'];
$marks=$_POST['marks'];

	$student_id=$_POST['student_id'];

//echo $student_name;

	$sql="update student set ";
	$sql .= "roll_no='".$roll_no."',";
	$sql .= "student_name='".$student_name."',";
	$sql .= "marks='".$marks."'";
	$sql .= " where student_id='$student_id'";
	
	
	echo $sql;
	
	mysqli_query($conn,$sql);


?>
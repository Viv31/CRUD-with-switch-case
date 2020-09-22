<?php

include("connection.php"); 



	$student_id=$_GET['id'];

//echo $student_name;

	$sql="delete from student ";
	$sql .= " where id='$student_id'";
	
	
	echo $sql;
	
	mysqli_query($conn,$sql);


?>
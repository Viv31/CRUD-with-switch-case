<?php

include("connection.php"); 


$action = $_GET['action'];

switch($action) {
	case 'add':
	   addData();
	   break;
	case 'modify':
	   editData();
	   break;
	case 'delete':
	   deleteData();
	   break;
	
}

header("location:index.php");


function addData(){

include("connection.php"); 
			$roll_no=$_POST['roll_no'];
			$student_name=$_POST['student_name'];
			$marks=$_POST['marks'];
			
			//echo $student_name;
			
				$sql="insert into student(roll_no,student_name,marks) values (";
				$sql .= "'".$roll_no."',";
				$sql .= "'".$student_name."',";
				$sql .= "'".$marks."'";
				$sql .= ")";
				
				
				echo $sql;
				
				mysqli_query($conn,$sql);
	
	}
	
	
function editData(){

include("connection.php"); 
			$roll_no=$_POST['roll_no'];
			$student_name=$_POST['student_name'];
			$marks=$_POST['marks'];
			
			$student_id=$_POST['id'];

//echo $student_name;

	$sql="update student set ";
	$sql .= "roll_no='".$roll_no."',";
	$sql .= "student_name='".$student_name."',";
	$sql .= "marks='".$marks."'";
	$sql .= " where id='$student_id'";
				
				
				echo $sql;
				
				mysqli_query($conn,$sql);
	
	}	



function deleteData(){

include("connection.php"); 
			
			
			$student_id=$_GET['id'];

	$sql="delete from student ";
	$sql .= " where id='$student_id'";
					
				echo $sql;
				
				mysqli_query($conn,$sql);
	
	}	


?>
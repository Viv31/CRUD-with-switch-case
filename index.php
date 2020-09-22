<?php
include("connection.php");
include_once('header.php');
?>
<h3>Students Details:</h3>
<p><a href="add_data.php" class="btn btn-primary">Add Data</a></p>
<table class="table table-dark">
	<thead>
		<tr>
		<th>S.No.</th>
		<th>Roll No.</th>
		<th>Name</th>
		<th>Marks</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
	</thead>
<tbody>

		<?php
			$sql="select * from student ";
			$result=mysqli_query($conn,$sql);
				$count=0;
			while($rs=mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".++$count."</td>";
				echo "<td>".$rs['roll_no']."</td>";
				echo "<td>".$rs['student_name']."</td>";
				echo "<td>".$rs['marks']."</td>";
					$student_id=$rs['id'];
				echo "<td><a href='edit_data.php?id=$student_id'>Edit</a></td>";
				echo "<td><a href='process_student.php?action=delete&id=$student_id'>Delete</a></td>";
				echo "</tr>";
			}
		
		
		?>		
	</tbody>	
		
</table>
<?php include_once("footer.php"); ?>

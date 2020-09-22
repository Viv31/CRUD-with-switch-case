<?php

include("connection.php"); 
include("header.php");
?>

			<?php
			
				$student_id=$_GET['id'];
				
			$sql="select * from student where id='$student_id' ";
			$result=mysqli_query($conn,$sql);
			$rs=mysqli_fetch_array($result);
			
			?>
<div class="col-md-6 mx-auto">
		<form action="process_student.php?action=modify" method="post">
		<p>&nbsp;</p>

<div class="form-group">
	<label>Roll No.</label>
	<input name="roll_no" type="text"  value="<?php echo $rs['roll_no']; ?>" class="form-control"/>
</div>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="student_name"   value="<?php echo $rs['student_name']; ?>" class="form-control" />
</div>
<div class="form-group">
	<label>Marks</label>
	<input type="text" name="marks"   value="<?php echo $rs['marks']; ?>" class="form-control" />
</div>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $student_id; ?>" />
</div>
	<input type="submit" value="Update" class="btn btn-primary" />
		</form>
	</div>	

<?php include("footer.php"); ?>
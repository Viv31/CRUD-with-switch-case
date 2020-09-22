
<?php  include_once('header.php'); ?>

<div class="col-md-6 mx-auto">
<form action="process_student.php?action=add" method="post">
	<div class="form-group">
		<label>Roll No.</label>
		<input type="text" name="roll_no"  class="form-control" placeholder="Enter Roll number" />
	</div>

	<div class="form-group">
		<label>Name</label>
		<input type="text" name="student_name" class="form-control" placeholder="Enter name" />
	</div>
	<div class="form-group">
		<label>Marks</label>
		<input type="text" name="marks" class="form-control" placeholder="Enter Marks" />
	</div>
	<input type="submit" value="Save" class="btn btn-primary" />
</form>
</div>
<?php include_once("footer.php"); ?>

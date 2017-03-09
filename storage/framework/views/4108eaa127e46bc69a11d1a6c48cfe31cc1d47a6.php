<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>
	<form method="POST" action="/save-student">
		<table>
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($student->id); ?>" >
		<tr><td>ID No.:</td> <td><input type="text" name="idnum" value="<?php echo e($student->idnum); ?>" ></td></tr>
		<tr><td>First Name:</td> <td><input type="text" name="fname" value="<?php echo e($student->fname); ?>" ></td></tr>
		<tr><td>Last Name:</td> <td><input type="text" name="lname" value="<?php echo e($student->lname); ?>" ></td></tr>
		<tr><td>Age:</td> <td><input type="number" name="age" value="<?php echo e($student->age); ?>" ></td></tr>
		<tr><td>Contact:</td> <td><input type="number" name="contactnum" value="<?php echo e($student->contactnum); ?>" ></td></tr>
		<tr><td>Program:</td> <td><input type="text" name="program" value="<?php echo e($student->program); ?>" ></td></tr>
		<tr><td>City:</td> <td><input type="text" name="city" value="<?php echo e($student->city); ?>" ></td></tr>
		<tr><td>Guardian:</td> <td><input type="text" name="guardian" value="<?php echo e($student->guardian); ?>" ></td></tr>
		</table>
		<input type="submit" value="Save">
	</form>
</body>
</html>
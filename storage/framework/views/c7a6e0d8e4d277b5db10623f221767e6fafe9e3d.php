<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<form method="POST" action="/add-student">
		<table>
		<?php echo e(csrf_field()); ?>

		<tr><td>ID No.:</td> <td><input type="text" name="idnum"></td></tr>
		<tr><td>First Name:</td> <td><input type="text" name="fname"></td></tr>
		<tr><td>Last Name:</td> <td><input type="text" name="lname"></td></tr>
		<tr><td>Age:</td> <td><input type="number" name="age"></td></tr>
		<tr><td>Contact:</td> <td><input type="number" name="contactnum"></td></tr>
		<tr><td>Program:</td> <td><input type="text" name="program"></td></tr>
		<tr><td>City:</td> <td><input type="text" name="city"></td></tr>
		<tr><td>Guardian:</td> <td><input type="text" name="guardian"></td></tr>
		</table>
		<input type="submit" value="Register">
	</form>

	<table border="1">
		<tr>
			<th hidden>ID</th>
			<th>ID No.</th>
			<th>Full Name</th>
			<th>Age</th>
			<th>Contact No.</th>
			<th>Program</th>
			<th>City</th>
			<th>Guardian</th>
			<th>Options</th>
		</tr>
		<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td hidden><?php echo e($student->id); ?></td>
			<td><?php echo e($student->idnum); ?></td>
			<td>
			<?php
			$fullname = $student->fname.' '. $student->lname;
			echo $fullname
			?>
			</td>
			<td><?php echo e($student->age); ?></td>
			<td><?php echo e($student->contactnum); ?></td>
			<td><?php echo e($student->program); ?></td>
			<td><?php echo e($student->city); ?></td>
			<td><?php echo e($student->guardian); ?></td>
			<td>
				<a href="/edit-student/<?php echo e($student->id); ?>">
					Edit
				</a>
				<a href="">
					Delete
				</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>what?</title>
</head>
<body >
<style type="text/css">
	background-color: black;
</style>
<link rel="stylesheet" type="text/css" href="public/1.css">
<div id="registration">
<form action="\process-registration" method="post">
<?php echo e(csrf_field()); ?>

	First Name<input type="textbox" name="Fname">
	
	Last Name<input type="textbox" name="Lname">

	Middle Name<input type="textbox" name="Mname">
	
	Age<input type="textbox" name="age">

	Course<input type="textbox" name="course">
	
	Address<input type="textbox" name="address">
	<input type="submit" value="submit">
</div>
</form>
</body>
</html>
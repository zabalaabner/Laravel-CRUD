 <?php $__env->startSection('content'); ?>
<?php 

session_start(); // Pang start lang ng session.

try {$DatabaseConnection = new PDO ("mysql:host=localhost;dbname=finalproject","root","");
	print "Connected"; 
	if (isset($_POST['Sign_In'])) { // Itong condition, ibig sabihin, kung may laman yung POST variable mo, gagawin nya yung nasa loob. Same lang yan ng not empty, slightly different lang.
		$Username = $_POST['Username']; // Declaration ng Username ng user.
		$Password = $_POST['Password']; // Declaration ng Password ng user. Ibig sabihin, pag laman yung POST variable specific kay password, iseset nya ito sa ginawa mong variable, same sa Username.

		$Select_Command = $DatabaseConnection -> prepare("select * from users where Username = '$Username' and Password = '$Password'"); // Ito yung prepare command mo. Madali namang intindihin eh.

		$Select_Command -> setFetchMode(PDO::FETCH_ASSOC); // Iseset mo yung fetchmode as Associative array.

		$Select_Command -> execute(); // Then, opkors, execute mo yung command na prinepare mo sa taas.

		$Container = $Select_Command -> fetch(); // Then fetch mo at ilagay mo sa isang variable.

		if ($Container['Username'] != $Username && $Container['Password'] != $Password) { // Ito yung condition sa login mismo, if hindi tugma ang alin mang input sa database, mag eeror.
			print "Wrong Username or Password!";
		} elseif ($Container['Username'] == $Username && $Container['Password'] == $Password) { // Else, pasok ka na.
			$_SESSION['Username'] = $Container['Username']; // Then ilalagay mo yung impormasyong nasa database ayon sa statement mo sa SESSION variables, na magagamit mo once na nag start na yung session mo.
			$_SESSION['Password'] = $Container['Password']; // Same definition sa taas.
			$_SESSION['Name'] = $Container['Name']; // Same Definition sa taas.
			
			header("location:Finalproject.index"); // Then, i reredirect mo na si user sa profile nya.
		}

	}
} catch (PDOExeption $Error) { // Ito na yung else ni try, alam nyo na yun XD.
	echo "Error".$Error -> getMessage(); // Pang print ng error ni PDO.
}

 ?>
 <div class="row">
 	<div class="col-md-12">
 		<h1>placeholder</h1>
<style>
		* {
			margin: auto;
			text-align: center;
		}

		form {
			margin-top: 100px;
		}

	</style>
</head>
 		<form method="post">
 		<?php echo e(csrf_field()); ?> <!-- Alam nyo na to, basta remember, never forget to put an attribute of "name", yan kasi yung basihan ni POST variable. -->
	<!-- PS - kung mapapansin nyo, walang action, ok lang yun, kasi gumamit naman tayo ng header sa taas pang redirect sa profile ni user, in default, papasa nya lang uli sa sarili nya yung data then checking ng conditions. -->
	<input type="text" name="Username" placeholder="Username">
	<br>
	<input type="password" name="Password" placeholder="Password">
	<br>
	<input type="submit" name="Sign_In" value="Submit">
	<a href="register.php">Register</a>
</form>

 	</div>
 </div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('masterproject', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
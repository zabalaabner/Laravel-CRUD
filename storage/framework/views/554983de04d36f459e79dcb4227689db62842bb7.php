 <?php $__env->startSection('content'); ?>
 	<div class="row">
 		<div class="col-md-12">
 			<h1>CREATE CRUD</h1>
 		</div>
 	</div>

<div class="row">
	<div class="col-md-12">
		<form class="" action="<?php echo e(route('blog.store')); ?>" method="post">
			<?php echo e(csrf_field()); ?>


			<div class="form-group<?php echo e(($errors->has('studentnumber')) ? $errors->first('title') : ''); ?>">
				<input type="text" name="studentnumber" class="form-control" placeholder="Student ID">
				<?php echo $errors->first('studentnumber' , '<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('Fname')) ? $errors->first('title') :''); ?>">
				<input type="text" name="Fname" class="form-control" placeholder="First Name">
				<?php echo $errors->first('Fname','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('Mname')) ? $errors->first('title') :''); ?>">
				<input type="text" name="Mname" class="form-control" placeholder="Middle Name">
				<?php echo $errors->first('Mname','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('Lname')) ? $errors->first('title') :''); ?>">
				<input type="text" name="Lname" class="form-control" placeholder="Last Name">
				<?php echo $errors->first('Lname','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('address')) ? $errors->first('title') :''); ?>">
				<input type="text" name="address" class="form-control" placeholder="Address">
				<?php echo $errors->first('address','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('course')) ? $errors->first('title') :''); ?>">
				<input type="text" name="course" class="form-control" placeholder="Course">
				<?php echo $errors->first('course','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('contactnumber')) ? $errors->first('title') : ''); ?>">
				<input type="text" name="contactnumber" class="form-control" placeholder="Contact Number">
				<?php echo $errors->first('contactnumber' , '<p class="help-block">:message</p>'); ?>

			</div>

			<div class="form-group">
					<input type="submit" class="btn btn-primary" value="save">
			</div>
		</form>
	</div>
</div>
 	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
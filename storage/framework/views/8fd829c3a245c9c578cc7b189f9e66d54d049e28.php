 <?php $__env->startSection('content'); ?>
 	<div class="row">
 		<div class="col-md-12">
 			<h1>EDIT CRUD</h1>
 		</div>
 	</div>

 	<div class="row">
 		<div class="col-md-12">
 			<form class="" action="<?php echo e(route('blog.update' , $blog->id)); ?>" method="post">
 			<input name="_method" type="hidden" value="PATCH"></input>
			<?php echo e(csrf_field()); ?>

			<div class="form-group<?php echo e(($errors->has('studentnumber')) ? $errors->first('title') : ''); ?>">
				<input type="text" name="studentnumber" class="form-control" placeholder="StudentID" value="<?php echo e($blog->studentnumber); ?>">
				<?php echo $errors->first('studentnumber' , '<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('Fname')) ? $errors->first('title') :''); ?>">
				<input type="text" name="Fname" class="form-control" placeholder="First Name" value="<?php echo e($blog->Fname); ?>">
				<?php echo $errors->first('Fname','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('Mname')) ? $errors->first('title') :''); ?>">
				<input type="text" name="Mname" class="form-control" placeholder="Middle Name" value="<?php echo e($blog->Mname); ?>">
				<?php echo $errors->first('Mname','<p class="help-block">:message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('Lname')) ? $errors->first('title') :''); ?>">
				<input type="text" name="Lname" class="form-control" placeholder="Last Name" value="<?php echo e($blog->Lname); ?>">
				<?php echo $errors->first('Lname','<p class="help-block">message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('address')) ? $errors->first('title') :''); ?>">
				<input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo e($blog->address); ?>">
				<?php echo $errors->first('address','<p class="help-block">message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('course')) ? $errors->first('title') :''); ?>">
				<input type="text" name="course" class="form-control" placeholder="Course" value="<?php echo e($blog->course); ?>">
				<?php echo $errors->first('course','<p class="help-block">message</p>'); ?>

			</div>


			<div class="form-group<?php echo e(($errors->has('contactnumber')) ? $errors->first('title') : ''); ?>">
				<input type="text" name="contactnumber" class="form-control" placeholder="Contact number" value="<?php echo e($blog->contactnumber); ?>">
				<?php echo $errors->first('contactnumber' , '<p class="help-block">:message</p>'); ?>

			</div>

			<div class="form-group">
					<input type="submit" class="btn btn-primary" value="save">
			</div>
		</form>
		</div>
 	</div>



<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
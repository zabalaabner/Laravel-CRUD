 <?php $__env->startSection('content'); ?>
 	<div class="row">
 		<div class="col-md-12">
 			<h1>Simple CRUD</h1>
 		</div>
 	</div>
 	<div class="row">
 		<table class="table table-striped">
 			<tr>
 				<th>Student#</th>
 				<th>Firstname</th>
 				<th>Middlename</th>
 				<th>Lastname</th>
 				<th>Address</th>
 				<th>Course</th>
 				<th>Contact#</th>
 				<th>ACTION</th>
 			</tr>

 			<a href="<?php echo e(route('blog.create')); ?>" class="btn btn-info pull-right">Create New Entry?</a><br>
 				
 			<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 			<tr>
 				<td><?php echo e($blog->studentnumber); ?></td>
 				<td><?php echo e($blog->Fname); ?></td>
 				<td><?php echo e($blog->Mname); ?></td>
 				<td><?php echo e($blog->Lname); ?></td>
 				<td><?php echo e($blog->address); ?></td>
 				<td><?php echo e($blog->course); ?></td>
 				<td><?php echo e($blog->contactnumber); ?></td>
 				<td>
 					<form class="" action="<?php echo e(route('blog.destroy',$blog->id)); ?>" method="post">
 						<input type="hidden" name="_method" value="delete">
 						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?> ">
 						<a href="<?php echo e(route('blog.edit',$blog->id)); ?>" class="btn btn-primary">EDIT</a>
 						<input type="submit" class="btn btn-danger" onclick="return confirm("Are you sure?");" 
 						name="name" value="DELETE">
 					</form>
 				</td>
 			</tr>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 		</table>
 	</div>

 	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
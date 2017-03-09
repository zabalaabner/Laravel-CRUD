@extends('master')
 @section('content')
 	<div class="row">
 		<div class="col-md-12">
 			<h1>EDIT CRUD</h1>
 		</div>
 	</div>

 	<div class="row">
 		<div class="col-md-12">
 			<form class="" action="{{route('blog.update' , $blog->id)}}" method="post">
 			<input name="_method" type="hidden" value="PATCH"></input>
			{{csrf_field()}}
			<div class="form-group{{ ($errors->has('studentnumber')) ? $errors->first('title') : '' }}">
				<input type="text" name="studentnumber" class="form-control" placeholder="StudentID" value="{{$blog->studentnumber}}">
				{!! $errors->first('studentnumber' , '<p class="help-block">:message</p>') !!}
			</div>


			<div class="form-group{{ ($errors->has('Fname')) ? $errors->first('title') :''}}">
				<input type="text" name="Fname" class="form-control" placeholder="First Name" value="{{$blog->Fname}}">
				{!!$errors->first('Fname','<p class="help-block">:message</p>')!!}
			</div>


			<div class="form-group{{ ($errors->has('Mname')) ? $errors->first('title') :''}}">
				<input type="text" name="Mname" class="form-control" placeholder="Middle Name" value="{{$blog->Mname}}">
				{!!$errors->first('Mname','<p class="help-block">:message</p>')!!}
			</div>


			<div class="form-group{{ ($errors->has('Lname')) ? $errors->first('title') :''}}">
				<input type="text" name="Lname" class="form-control" placeholder="Last Name" value="{{$blog->Lname}}">
				{!!$errors->first('Lname','<p class="help-block">message</p>')!!}
			</div>


			<div class="form-group{{ ($errors->has('address')) ? $errors->first('title') :''}}">
				<input type="text" name="address" class="form-control" placeholder="Address" value="{{$blog->address}}">
				{!!$errors->first('address','<p class="help-block">message</p>')!!}
			</div>


			<div class="form-group{{ ($errors->has('course')) ? $errors->first('title') :''}}">
				<input type="text" name="course" class="form-control" placeholder="Course" value="{{$blog->course}}">
				{!!$errors->first('course','<p class="help-block">message</p>')!!}
			</div>


			<div class="form-group{{ ($errors->has('contactnumber')) ? $errors->first('title') : '' }}">
				<input type="text" name="contactnumber" class="form-control" placeholder="Contact number" value="{{$blog->contactnumber}}">
				{!! $errors->first('contactnumber' , '<p class="help-block">:message</p>') !!}
			</div>

			<div class="form-group">
					<input type="submit" class="btn btn-primary" value="save">
			</div>
		</form>
		</div>
 	</div>



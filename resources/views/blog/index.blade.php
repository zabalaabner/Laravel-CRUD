@extends('master')
 @section('content')
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

 			<a href="{{route('blog.create')}}" class="btn btn-info pull-right">Create New Entry?</a><br>
 				
 			@foreach ($blogs as $blog)
 			<tr>
 				<td>{{$blog->studentnumber}}</td>
 				<td>{{$blog->Fname}}</td>
 				<td>{{$blog->Mname}}</td>
 				<td>{{$blog->Lname}}</td>
 				<td>{{$blog->address}}</td>
 				<td>{{$blog->course}}</td>
 				<td>{{$blog->contactnumber}}</td>
 				<td>
 					<form class="" action="{{route('blog.destroy',$blog->id)}}" method="post">
 						<input type="hidden" name="_method" value="delete">
 						<input type="hidden" name="_token" value="{{ csrf_token()}} ">
 						<a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">EDIT</a>
 						<input type="submit" class="btn btn-danger" onclick="return confirm("Are you sure?");" 
 						name="name" value="DELETE">
 					</form>
 				</td>
 			</tr>
 			@endforeach
 		</table>
 	</div>

 	@stop
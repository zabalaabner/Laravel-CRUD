@extends('masterproject')
 @section('content')


 <div class="row">
 	<div class="col-md-12">
 		<h1>Placeholder</h1>
 	</div>
 </div>
 	<div class="row">
 		<div class="col-md-12">
 			<form class="" action="{{route(Finalproject.store)}}" method="post">
 				{{csrf_field()}}
 			</form>
 		</div>
 	</div>
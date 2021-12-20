@extends('layouts.master')

@section('title','Login')


@section('content')
<div class="container custom-login">
	<x-alert message="{{$message}}/>
	<form class="form-horizontal" role="form" action="{{route('login')}}" method="POST">
		@csrf
<div class="form-group">
<label for="firstname" class="col-sm-2 control-label">First Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="email" id="firstname"
placeholder="Enter First Name">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
<input type="text" name="passowrd" class="form-control" id="lastname"
placeholder="Enter Password">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label>
<input type="checkbox"> Remember me
</label>
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-default">Login</button>
</div>
</div>
</form>
</div>


@endsection
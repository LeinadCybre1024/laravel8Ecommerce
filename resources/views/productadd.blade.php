@extends('layouts.master')

@section('title','Register')


@section('content')
<div class="container custom-login">
	<form class="form-horizontal" action="{{route('register')}} " method="POST" role="form">
<div class="form-group">
<label for="firstname" class="col-sm-2 control-label"> UserName</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="username" id="firstname"
placeholder="Enter UserName">
</div>
</div>
<div class="form-group">
<label for="firstname" class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" name="email" id="firstname"
placeholder="Enter Email">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
<input type="password"  name="password" class="form-control" id="lastname"
placeholder="Enter Password">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-default">Register Me</button>
</div>
</div>
</form>
</div>


@endsection
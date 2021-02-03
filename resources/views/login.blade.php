@extends('master')
@section('content')
<div class="container custom-login">
<div class="raw">
<div class="col-sm-4 col-sm-offset">
<form action="login" method="POST">
@csrf
    <div class="form-group">
      <label  class="form-label">Email address</label>
      <input type="email" class="form-control"  name="email">
    </div>
    <div class="form-group">
      <label  class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
@endsection

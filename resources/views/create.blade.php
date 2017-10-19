@extends('layout.main')
@section('content')

<div class="panel panel-default">
  <form class="form-horizontal" method="POST" action="{{ }}">
    <div class="panel-heading">New Contact</div>
    <div class="panel-body">
      <div class="row">
      <form>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <input type="text" name="firstname" class="form-control" placeholder="First Name">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Address">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
        </div>
      </form>

        </div>
      </div>
      <div class="panel-footer">
          <input type="submit" class="btn btn-default" value="Save">
        </div>
    </div>



@endsection

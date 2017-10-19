@extends('layout.main')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">New Contact</div>
    <div class="panel-body">
      <div class="row">
      <form role="form" method="POST" action="{{ url('/insert') }}">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            @if(count($errors) >0 )
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                   {{$error}}
                  </div>
                @endforeach
              @endif
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
            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <textarea name="address" class="form-control" placeholder="Address"></textarea>
          </div>
        </div>

        </div>
      </div>
      <div class="panel-footer">
        <a href="{{ url('/') }}" class="btn btn-default">Back</a>
          <button type="submit" class="btn btn-default pull-right" >Save</button>
        </div>
        
    </div>
</form>

@endsection

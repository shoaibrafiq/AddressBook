@extends('layout.main')
@section('content')

@if(session('info'))
<div class="alert alert-success">
  {{session('info')}}
  </div>
@endif
<legend>My Contacts</legend>

@if(count($contacts) > 0)

  @foreach($contacts->all() as $contact)



<div class="card card-default" id="card_contacts">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
            <ul class="list-group pull-down" id="contact-list">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 px-0">
                            <img src="{{ url('img/profile.png') }}" class="img-thumbnail">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9">
                      
                            <label class="name lead">{{ $contact->firstname }}</label>
                            <label class="name lead">{{ $contact->lastname }}</label>
                            <br> 
                            <div class="col-4 pull-right" style="text-align:right">
                              <a href="" class="btn btn-default">View</a>
                              <a href='{{ url("/update/$contact->id") }}' class="btn btn-primary">Edit</a> 
                              <a href="" class="btn btn-danger">Delete</a>
                           </div>
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title=""></span>
                            <span class="text-muted">{{ $contact->address }}</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title=""></span>
                            <span class="text-muted small">{{ $contact->phone }}</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                            <span class="text-muted small text-truncate">{{ $contact->email }}</span>
                        </div>
                       
                    </div>
                </li>
              </ul>
                @endforeach

                 @endif
            </div>
        </div>

@endsection


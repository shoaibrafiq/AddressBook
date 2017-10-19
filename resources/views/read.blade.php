@extends('layout.main')
@section('content')


<h1></h1>

<div class="card card-default" id="card_contacts">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
            <ul class="list-group pull-down" id="contact-list">
                <li class="list-group-item">
                    <div class="row">

                        <div class="col-2 col-sm-2 col-md-2 px-0">
                            <img src="{{ url('img/profile.png') }}" class="img-thumbnail">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9">
             
                          <label class="name lead">{{ $contacts->firstname }}</label>
							<label class="name lead">{{ $contacts->lastname }}</label><br>
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title=""></span>
                            <span class="text-muted">{{ $contacts->address }}</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title=""></span>
                            <span class="text-muted small">{{ $contacts->phone }}</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                            <span class="text-muted small text-truncate">{{ $contacts->email }}</span>
                      
                        </div>
                       
                    </div><br>
       <div class="panel-footer">
        <a href="{{ url('/') }}" class="btn btn-default">Back</a>
    
        </div>
                </li>
              </ul>
            </div>
        </div>

 @endsection
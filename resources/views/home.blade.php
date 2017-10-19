@extends('layout.main')
@section('content')
<legend>My Contacts</legend>
<div class="card card-default" id="card_contacts">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
            <ul class="list-group pull-down" id="contact-list">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2 col-sm-2 col-md-2 px-0">
                            <img src="{{ url('img/profile.png') }}" class="img-thumbnail">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9">
                      
                            <label class="name lead">Mike Anamendolla</label>
                            <br> 
                             <div class="col-4 pull-right" style="text-align:right">
                          <input type="submit" href="{{ url('') }}" class="btn btn-default" value="View"></input>
                          <input type="submit" href="{{ url('') }}" class="btn btn-primary" value="Edit"></input> 
                          <input type="submit" href="{{ url('') }}" class="btn btn-danger" value="Delete"></input>
                        </div>
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
                            <span class="text-muted">5842 Hillcrest Rd</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
                            <span class="text-muted small">(870) 288-4149</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                            <span class="text-muted small text-truncate">mike.ana@example.com</span>
                        </div>
                       
                    </div>
                </li>
              </ul>

@endsection


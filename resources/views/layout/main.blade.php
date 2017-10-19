<!doctype html>
<html>
<head>
	<title>Address Book</title>
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Address Book</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/create') }}">Add Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

	<div class="container">
		@yield('content')
	</div>

  <div class="footer text-center">
    <div class="container-fluid">
        <p>© 2017 AddressBook All Rights Reserved | Created by Shoaib Rafiq</p>
    </div>
  </div>
</body>
</html>
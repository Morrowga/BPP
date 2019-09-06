<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Burmese Plight</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/reset.css') }}.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light display-flex">
			<a class="navbar-brand" href="/">BURMESE PLIGHT</a>							
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/contact">Contact Us</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('user_login') }}">Member Login</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/blogg">Blogs</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</div><!--container-->



<div class="container-login" style="margin-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header font-weight-bold" style="font-family: 'Crimson Text', serif; text-transform: uppercase; color:#19333d;"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
          <div class="card-body">

            @isset($url)
            <form method="GET" action='{{ route("user_login") }}' aria-label="{{ __('Login') }}">
            @else
            <form method="GET" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @endisset
            @csrf

          <div class="form-group row">
              <div class="col-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>
          </div><!--from-group-->

</div><!--card-body-->
</div><!--card-->
</div><!--col-->
</div><!--row-->
</div><!--container-->


<style>
.card-header{
    text-align: center;
    
}

.card{
    max-width: 50%;
    background: #ffffff none repeat scroll 0 0;
    border-radius: 2px;
    margin: 30px auto 30px;
    line-height: 47px;
}


.btn.btn-primary{
    background: #f0ad4e;
    border-color: #f0ad4e;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 50px;
    padding: 0;
    
  
}


.card .btn.btn-primary {
  background: #19333d;
}

.forget {
    color: #777777;
    text-decoration: underline;
}
body,html {
	width: 100%;
	margin: 0 auto;
    height: auto;
    scroll-behavior: smooth;
  -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
}


.zawgyi {
      font-family:Zawgyi-One,second font,third font;
        }
.unicode{
      font-family:Myanmar3,Yunghkio,'Masterpiece Uni Sans';
    }

.container{
	margin-top: 20px;
	width: 100%;
	height: auto;
	background: #FFFFFF;
  font-family: 'Philosopher', sans-serif;
   margin-right: 40px !important;
}
 



.navbar-brand{
  font-size: 25px !important;
}

.nav-item {
  padding-right: 90px;
  padding-left: -90px;
	font-size: 15px;
	display: inline-block;
  font-size: 20px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Burmese Plight</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#l">Contact Us</a>
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

<div class="container-register" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
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
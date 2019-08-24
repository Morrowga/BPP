<!DOCTYPE html>
<html lang="en";">
<head>
    <title>{{ $post->title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{[ asset('Parsley.js/parsley.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Member Login</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/blogg">Blogs</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</div><!--container-->
	
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 40px; left:11%;">
                    <h1 style="text-align:left;">{{$post->title }}</h1>
                    <p style="text-align:right; padding-top:10px; font-weight:bold;">{{ $post->body }}</p>
                </div>
            </div>
            
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>


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






<meta charset="UTF-8">
	<title>Burmese Plight</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                    @if (Auth::check())
                    <li class="dropdown active" style="margin-top: 2px; font-size: 18px;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" 
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" 
                                    method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                @else
                    <a href="{{ route('user_login') }}" style="text-decoration: none; color : #000; margin-top: 10px; font-size:19px;">Login</a>
                @endif
    			</ul>
			</div>
		</nav>
	</div><!--container-->

    @foreach ($feeds as $feed)
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-8 col-md-offset-2" style="left: 20%;">
            <h2>{{ $feed->title }}</h2>
            <h5>Published: {{ date('M j, Y',strtotime($feed->created_at)) }}</h5>

            <p>{{ substr($feed->body, 0, 250) }}{{ strlen($feed->body) > 250 ? '...' : ""}}</p>

            <a href="{{ url('newfeed/'.$feed->slug) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
    @endforeach
    </div>
	
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12" style="left: 45%;">
            <div class="text-center">
                {{ $feeds->links() }}
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
l

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
}
 



.navbar-brand{
  font-size: 25px !important;
}

.nav-item {
  padding-right: 90px;
  padding-left: -90px;
	font-size: 10px;
	display: inline-block;
  font-size: 20px;
}



</style>
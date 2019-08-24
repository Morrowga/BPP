<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BurmesePlight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('public/images') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{[ asset('Parsley.js/parsley.css') }}">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">

</head>
<body>
<div class="container navigation">
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
                            <a class="nav-link" href="/blogg">Blog</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div><!--navigation-->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1 class="display-4" style="font-family: 'Philosopher', sans-serif;">Here!</h1>
                        <p class="lead" style="font-family: 'Slabo 27px', serif; font-size: 40px;">We All Need The Food For Life</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-outline-info btn-lg" href="#" role="button" style="font-family: 'Philosopher', sans-serif;">Porpular Posts</a>
                        <a class="btn btn-outline-info btn-lg" href="{{ route('blogg.index') }}" role="button" style="font-family: 'Philosopher', sans-serif;">All Blogs</a>
                    </div>
                </div>
            </div><!--row-->
                <div class="row">
                    <div class="col-md-8">

                    @foreach($posts as $post)
                    
                        <div class="post">
                            <h2 style="font-family: 'Philosopher', sans-serif;">{{ $post->title }}</h2>
                            <p style="color: #000000">{{ str_limit($post->body, 450) }}</p>
                            <a href="{{ url('blogg/'.$post->slug) }}" class="btn btn-outline-info">Read More</a>
                        </div>

                        <hr style="border-color: #30a88e;">

                    @endforeach
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1" style="left: 8%;">
                    <div class="card" style="border-color:#30a88e;">
                        <div class="card-header" style="border-bottom: none;">
                        <h2 style="text-align: center; font-family: 'Philosopher', sans-serif;">Author</h2>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                    </div>
                </div>
        </div><!--container-->
        <section id="footer">
			<div class="container-footer">
				<div id="footer-text" class="row">
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<a href="mainpage.html"><h3 class="foottext"> Home BurmesePlight</h3></a>
						
					</div>
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<a href="">
            <h3 class="foottext"> Join Now +959795864194</h3>
            </a>
					</div>
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<a href="aboutus.html"><h3 class="foottext"> More About Us Contact Now </h3></a>
					</div>
				</div>
				
				
				
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
						<ul class="list-unstyled list-inline social text-center">
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">Humanitarian Transaction Corporation</a></u> is a Registered Own Business. Yangon [Bahan Township]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">YANGON</a></p>
				</div>
			</hr>
		</div>	
	</div>
</section><!--footer-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<style>
body,html {
    width: 100%;
    margin: 0 auto;
    scroll-behavior: smooth;
    -webkit-font-smoothing: antialiased;
    height: 100%;
    overflow-x: hidden;

}
   
.navigation{
    width: 100%;
    height: auto;
    background: #ffff;
    font-family: 'Philosopher', sans-serif;
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

.dropdown-menu, .dropdown-item{
    font-size: 19px;
}

.media{
    padding-top: 25px; 
}

.container{
    width:100%;
}
.jumbotron{
    color:#fff;
    background-image: url("../images/photo.jpg");
    background-size: cover;

}

section .section-title {
    text-align: center;
    color: #007b5e;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
    width: 100%;
    margin-top:20px;

}

#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
    font-family: 'Merriweather', serif;

}
#footer ul.social li{
  padding: 3px 0;

}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
  margin-top:-10px;
  
}

#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}

#footer ul.quick-links li:hover a i {
    font-weight: 700;
}




#footer h3{
	color: #fff;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px  10px;
  text-transform: uppercase;
  text-align: center;
  font-family: 'Philosopher', sans-serif;

}


#footer-text{
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
   -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
   -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    
}


/*footer*/
</style>
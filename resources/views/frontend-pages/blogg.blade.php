<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BurmesePlight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{[ asset('Parsley.js/parsley.css') }}">    
    <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
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
                        <h1 class="display-4" style="font-family: 'Philosopher', sans-serif;">Welcome !</h1>
                        <p class="lead">Thanks A Lot for Coming</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-outline-secondary btn-lg" href="#" role="button">Porpular Posts</a>
                        <a class="btn btn-outline-secondary btn-lg" href="{{ route('blogg.index') }}" role="button">All Blog Posts</a>
                    </div>
                </div>
            </div><!--row-->
                <div class="row">
                    <div class="col-md-8">

                    @foreach($posts as $post)
                    
                        <div class="post">
                            <h5>{{ $post->title }}</h5>
                            <p>{{ $post->body, 0,300 }} {{ strlen($post->body) > 300 ? "..." : "" }}</p>
                            <a href="{{ url('blogg/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                        </div>

                        <hr>

                    @endforeach
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <h2>Sidebar</h2>
                    </div>
                </div>
        </div><!--container-->
        

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

</style>
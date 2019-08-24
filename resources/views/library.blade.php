@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en";">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid display-table">
<div class="row justify-content-between display-row-table">
  <div class="col-sm-2 navcard">
        <div class="card">
            <div class="card-body">
            <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('dashboard') }}">
            <h4 style="font-family: 'Noto Serif', serif;">
                    DASHBOARD
                </h4>
            </a>
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-light pb-2">
                        <nav class="nav nav-pills flex-sm-row">
                                <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('library') }}">Library</a>
                                    <ul class="flex-sm-fill text-sm-center nav navbar-nav pt-1">
                                        <li class="dropdown">
                                            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                Posts History
                                            <span class="caret"></span>
                                     </a>
                                    <ul class="flex-sm-fill text-sm-center dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('posts.bloghist') }}">Blogs History</a></li>
                                    <hr>
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="#">Newfeeds History</a></li>
                                    </ul>
                                    </li>
                                    <ul class="flex-sm-fill text-sm-center nav navbar-nav pt-3">
                                        <li class="dropdown">
                                            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                Add New
                                            <span class="caret"></span>
                                     </a>
                                    <ul class="flex-sm-fill text-sm-center dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('posts.create') }}">Blog</a></li>
                                    <hr>
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('newfeed') }}">Post</a></li>
                                    </ul>
                                        </li>
                                    <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link pt-3" style=" border-radius: 0;" href="#">Notifications</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('users.index') }}">Users</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Analytics</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('setting') }}">Settings</a>
                    </nav><!--nav-->
            </div><!--bg-light-->
            </div><!--collapse-->
            <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button><!--button-->
                </div><!--pos-f-t-->
            </div><!--card-body-->
        </div><!--card-->
  </div><!--col-sm-2-->
  <div class="col-sm-10 w-100 font-weight-bold">
        <div class="card">
            <div class="card-header" style="font-family: 'Noto Serif', serif; border-bottom: none; background-color:#e8e2e1;">
                <h1>Media Library</h1>
            </div>
            <div class="card-body" style="font-family: 'Noto Serif', serif;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Upload Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Media Library</a>
                    </li>
                </ul><!--ul-->
                <div class="tab-content pt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="card" style="width: 50%; height: 400px; border: solid 2px #575b61; margin-left: 14px;">
                            <div class="card-body">
                                <form action="myForm">
                                    <div class="wrapper vertical-center" style="text-align:center; left: 35%; position: 
                                        absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                                            <input type="file" name="uploadfile" id="file" style="display:none;"/>
                                            <label for="file"><i class="btn btn-outline-secondary fas fa-plus-circle fa-7x" style="border:none;"></i></label>
                                    </div><!--wrapper-->
                                </form><!--form-->
                            </div><!--card-body-->
                            </div><!--card-->
                            <div class="card" style="width: 45%; margin-left: 14px; border: solid 2px #575b61;">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                        </div><!--row-->
                    </div><!--tab-pane-->   
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">hello</div>
                </div><!--tab-content-->
            </div><!--card-body-->
        </div><!--card-->
  </div><!--col-sm-10-->
</div><!--row-->
</div><!--container-fluid-->

    <script>
    $('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});

$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
});

    </script>
                 
    


    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>

<style>
    .container-fluid{
        width: 100%;
        height: auto;
    }
    html {
        margin: 0 auto;
    }
    .pos-f-t{
        padding-top: 10px;
        font-size: 15px;
        font-family: 'Noto Serif', serif;        
    }
  
    h4 {
        text-align: center;
        font-size: 17px;
    }

    .card-body a{
        text-decoration: none;
        list-style-type: none;
        color: #000;
    }

    .flex-sm-fill,.text-sm-center,.active a{
        margin-top: 5px;
        text-decoration: none;
        
    } 

    .dashboard{
        text-align: center;
    }
</style>
@endsection
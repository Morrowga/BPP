@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en";">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('newfeeds.newfeedhist') }}">Newfeeds History</a></li>
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
                                    <li role="presentation "><a role="menutitem" tabindex="-1" href="{{ route('newfeeds.create') }}">Post</a></li>
                                    </ul>
                                        </li>
                                    <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link pt-3" style=" border-radius: 0;" href="#">Notifications</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('users.index') }}">Users</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Language</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('editor.management') }}">Management</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('tasks.setting') }}">Settings</a>
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
  <div class="col-sm-10 w-100 dashboard">
    <div class="card">
        <div class="card-body">
        <div class="row">
        <div class="card w-50">
                <div class="card-body-left">
                        
                </div>
            </div>
            <div class="card w-50">
                <div class="card-body-right">
                        
                </div>
            </div>
        </div>
        <div class="row">
        <div class="card w-50">
                <div class="card-body-left2">
                        
                </div>
            </div>
            <div class="card w-50">
                <div class="card-body-right2">
                        
                </div>
            </div>
        </div><!--card-body-->
        </div><!--card-->
    </div><!--row-->
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
        overflow: scroll;  
    }
    .pos-f-t{  
        padding-top: 10px;
        font-size: 15px;
        font-family: 'Noto Serif', serif;
        height: auto;       
    }
  
    h4 {
        text-align: center;
        font-size: 16px;
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
        text-decoration: none;
    }
</style>
@endsection

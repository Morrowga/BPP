@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en";">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    

</head>
<body>
<div class="container-fluid display-table">
<div class="row justify-content-between display-row-table">
  <div class="col-sm-2 navcard">
        <div class="card">
            <div class="card-body">
            <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('dashboard') }}">
            <h4 style="font-family: 'Noto Serif', serif; "> 
                    DASHBOARD
                </h4>
            </a>
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-light p-4">
                        <nav class="nav nav-pills flex-sm-row">
                        <ul class="flex-sm-fill text-sm-center nav navbar-nav">
                                        <li class="dropdown">
                                            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                Library
                                            <span class="caret"></span>
                                     </a>
                                    <ul class="flex-sm-fill text-sm-center dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="#">Media</a></li>
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="#">Posts</a></li>
                                    </ul>
                                    </li>
                                    <ul class="flex-sm-fill text-sm-center nav navbar-nav pt-2">
                                        <li class="dropdown">
                                            <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                Add New
                                            <span class="caret"></span>
                                            </a>
                                    <ul class="flex-sm-fill text-sm-center dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('blog') }}">Blog</a></li>
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('newfeed') }}">NewFeeds</a></li>
                                    </ul>
                                        </li>
                                    <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Notifications</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Users</a>
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
  <div class="col-sm-10 w-100 blog">
    <div class="row">
        <div class="card" style="width: 99%;">
            <div class="card-header" style="font-family: 'Noto Serif', serif;">
                  <h1>CREATE BLOG</h1>
            </div>
            <div class="card-body">
                <h3 style="text-align: left; font-family: 'Noto Serif', serif;">Title Description</h3>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                    <nav class="navbar navbar-expand-lg navbar-light font-weight-bold">
                            <ul class="navbar-nav" style="font-family: 'Noto Serif', serif;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="far fa-images pr-1"></i>Add Media</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-heading pr-2"></i></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-bold pr-2"></i></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-paperclip pr-2"></i></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-italic pr-2"></i></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-align-right"></i></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-align-left"></i></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-align-justify"></i></a>
                                </li>
                                <li class="nav-item active pl-3 ">
                                    <a class="nav-link btn btn-light" href="#"><i class="far fa-eye pr-1"></i>Preview</a>
                                </li>
                                <li class="nav-item active pl-3">
                                    <a class="nav-link btn btn-light" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="padding-right: 10px;"><i class="far fa-images pr-1"></i>Feature Photo</a>
                                </li>
                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="card">
                                                image here
                                            </div>
                                    </div>
                                </div>
                            </ul><!--ul-->
                    </nav><!--nav-->
                    <div class="row" id="text-area">
                        <div class="form-group pl-2" style="width: 99%;">
                            <textarea class="form-control"rows="19" id="exampleFormControlTextarea1 rounded-0"style="width: 99%;"></textarea>
                            </div><!--form-group-->
                    </div><!--text-area-->
                    <div class="row" style="float: right;">
                    <nav class="navbar navbar-expand-lg navbar-light font-weight-bold">
                            <ul class="navbar-nav" style="font-family: 'Noto Serif', serif;">
                                <li class="nav-item active pr-3">
                                    <a class="nav-link btn btn-light " data-toggle="modal" 
                                    data-target="#exampleModal" data-whatever="@fat" href="#"><i class="far fa-clock pr-1"></i>Schedule Date</a>
                                </li>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            
                                            </div><!--modal-body-->
                                        </div><!--modal-content-->
                                    </div><!--modal-dialog-->
                                </div><!--modal-fade-->
                                </li>
                                <li class="nav-item active">
                                <a class="nav-link btn btn-light "href="#"><i class="fas fa-globe-americas pr-1"></i>Publish</a>
                                </li>
                            </ul><!--navbar-nav-->
                        </nav><!--nav-->
                    </div><!--row-->
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







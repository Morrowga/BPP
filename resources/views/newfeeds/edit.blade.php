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
    <link rel="stylesheet" href="{[ asset('Parsley.js/parsley.css') }}">
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
                    <div class="bg-light pb-2">
                        <nav class="nav nav-pills flex-sm-row">
                        <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('library') }}">Library</a>
                                    <ul class="flex-sm-fill text-sm-center nav navbar-nav">
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
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('newfeeds.create') }}">Post</a></li>
                                    </ul>
                                        </li>
                                    <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link pt-3" style=" border-radius: 0;" href="#">Notifications</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('users.index') }}">Users</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Analytics</a>
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
  <div class="col-sm-10 w-100 blog">
    {{ Form::model($feed, ['route' => ['newfeeds.update', $feed->id], 'method' => 'PUT']) }}
    <div class="row">
        <div class="col-md-8">
            {{ Form::label('title', 'Title', ["class" => 'h2']) }}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'h2', 'style' => 'margin-top:5px;']) }}
            {{ Form::text('slug', null, ['class'=> 'form-control']) }}

            {{ Form::label('body', 'Body', ["class" => 'h2 form-spacing-top', 'style' => 'margin-top: 5px;']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control', 'style' => 'margin-top: 10px;']) }}
            <div class="card" style="margin-top: 10px;">
                <div class="card-header" style="font-family: 'Noto Serif', serif;">
                    <h1>{{ $feed->title }}</h1>
                </div>
                <div class="card-body" style="font-family: 'Noto Serif', serif;">
                    <p class="lead">{{ $feed->body }}<p>
                </div>
            </div>
        </div><!--col-md-8-->

        <div class="col-md-4">
            <div class="card" style="text-align:center; padding-top: 20px;">
                <dl class="dl-horizontal">
                    <dt><h5 style="font-weight:bold; font-family: 'Noto Serif', serif;">Created At:</h5></dt>
                    <dd> {{ date('M j, Y h:ia', strtotime($feed->created_at)) }} </dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt><h5 style="font-weight:bold; font-family: 'Noto Serif', serif;">Last Updated:</h5></dt>
                    <dd> {{ date('M j, Y h:ia', strtotime($feed->updated_at)) }} </dd>
                </dl>
                <hr>
                <div class="row" style="padding-right: 5px;">
                    <div class="col-sm-6">
                        {{ Html::linkRoute('newfeeds.show', 'Cancel', array($feed->id), array('class' => 'btn btn-light btn-block', 'style'=> 'font-family: Noto Serif, serif; margin-bottom: 10px; margin-left: 8px;')) }}
                    </div>
                    <div class="col-sm-6">
                    @if (Session::has('success'))
                    <div class="alert alert-success" style="font-family: 'Noto Serif', serif;" role="alert">
                        <strong>Success:</strong> {{ Session::get('success') }}
                    </div>
                    @endif
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block', 'style'=> 'font-family: Noto Serif, serif;']) }}
                    </div>
                </div>
            </div>
        </div><!--col-md-4-->
        {{ Form::close() }}
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







@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en";">
<head>
    <meta charset="UTF-8">
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
                                    <li role="presentation "><a role="menuitem" tabindex="-1" href="{{ route('newfeeds.create') }}">Post</a></li>
                                    </ul>
                                        </li>
                                    <a class="flex-sm-fill text-sm-centerflex-sm-fill text-sm-center nav-link pt-3" style=" border-radius: 0;" href="#">Notifications</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="{{ route('users.index') }}">Users</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Analytics</a>
                                    <a class="flex-sm-fill text-sm-center nav-link" style=" border-radius: 0;" href="#">Settings</a>
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
  <div class="col-sm-10 w-100">
        <div class="card">
        <div class="card-header" style="text-align: left; font-family: 'Noto Serif', serif;">
                <h1>Team Management</h1>
            </div>
            <div class="card-body">
                        <div class="row" style="margin-left: 4px;">
                            <p style="margin-left: 12px;">
                                <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" 
                                role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    Editors
                                </a>
                            </p>
                        </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                            <a href="{{ route('editor.create') }}" class="btn btn-success">Create Editor</a>
                                    <br>
                                    <br>
                                @if($editors->isEmpty())
                                        <h2>No Editor</h2>
                                @else 
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>s
                                    </thead>
                                    <tbody>
                                    @foreach($editors as $editor)
                                    <tr>
                            <td>{{ $editor->id }}</td>
                            <td>{{ $editor->name }}</td>
                            <td>
                            <td>{{ $editor->email }}</td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
         </div>
    </div>
</div>
                <div class="row">  
                    <p class="editor ml-3">
                        <a href="{{ route('editor.create') }}" class="btn btn-outline-secondary">
                         Create Editor
                      </a>
                    </p><!--p-->
              
                
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
        height: 1500px;
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

    .form-control:focus {
        border-color: #10ad93;
        box-shadow: 0px 1px 1px rgba(16, 173, 147) inset, 0px 0px 8px rgba(16, 173, 147);
    }
   
</style>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">

<div class="card-header font-weight-bold" style="font-family: 'Crimson Text', serif; text-transform: uppercase; color:#19333d;"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

<div class="card-body">

@isset($url)
<form method="POST" action='{{ route("login.$url") }}' aria-label="{{ __('Login') }}">
@else
<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
@endisset
@csrf

<div class="form-group row">

<div class="col-12">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">

<div class="col-12">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

@if (Route::has('password.request'))
<a class="forget" href="{{ route('password.request') }}">
{{ __('Forgot Your Password?') }}
</a>
@endif
<div class="form-group row">
<div class="col-12">
<div class="form-check ">
<input class="form-check-input mt-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
{{ __('Remember Me') }}
</label>
</div>
</div>
</div>

<div class="form-group row mb-0 button">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Login') }}
</button>


</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection


<style>
.card-header{
    text-align: center;
    
}

.card{
    max-width: 50%;
    background: #ffffff none repeat scroll 0 0;
    border-radius: 2px;
    margin: 30px auto 30px;
    line-height: 47px;
}


.btn.btn-primary{
    background: #f0ad4e;
    border-color: #f0ad4e;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 50px;
    padding: 0;
    
  
}


.card .btn.btn-primary {
  background: #19333d;
}

.forget {
    color: #777777;
    text-decoration: underline;
}

</style>
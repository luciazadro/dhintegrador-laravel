@extends('layouts.master')
@include('partials.navbar')
@section('content')
  <br>
  <div class="profile">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <button type="button" data-dismiss="alert"></button>
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
            <h1>Login</h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>
                <label for="inputEmail">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="inputAddress2">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Recordar') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <button type="submit" class="btn btn-danger"> {{ __('Login') }} </button>
            </h1>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
            @endif
            </form>
<br>
</div>
@endsection
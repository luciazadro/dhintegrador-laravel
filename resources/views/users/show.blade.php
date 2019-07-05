@extends('layouts.master')
@section('content')
<div class="profile col-6">
        <div>
            <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
        </div>
            <h1>Bienvenido/a:
              <br>
            {{Auth::user()->name}} {{Auth::user()->lastname}}
            <br>
            <button type="button" class="btn btn-danger"> <a href={{ route('logout') }}>Logout </a> </button>
            </h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> {{Auth::user()->email}}  </h2>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
    </div>
@endsection
@extends('master')

@section('content')


<br>
<br>
<br>
<br>
<div class="profile">
    <form action="" method="POST">
        
        <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
    
        <h1>Login
    
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            
            <div>
                <label for="inputEmail">Email</label>
                <input name="email"type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            
            <div class="form-group col-12">
                <label for="inputAddress2">Password</label>
                <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
            </div>
            
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            
            <button type="submit" class="btn btn-danger"> Sign In </button>
        </h1>
    </form>
<br>

@endsection

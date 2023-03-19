@extends('layout/loginapp')
@section('Judul')
    Login
@endsection
@section('Style')
    <link rel="stylesheet" href="css/login.css">

@endsection

@section('Content2')
<div class="container">
    <!-- <div class="kotak"> -->
    <div class="form">
        <h4>Hi, There.</h4>
        <h2>Welcome back to our system</h2>
        <div class="username"><label for="username">Username</label></div>
        <div><input type="username"></div>
        <div class="password"><label for="password">password</label></div>
        <div><input type="password"></div>
        <button>Login</button>
    </div>
    <div class="gambar">
        <div class="background"></div>
        <!-- <img src="background 1.png" alt="">  -->
    </div>
    <!-- </div> -->
</div>
@endsection

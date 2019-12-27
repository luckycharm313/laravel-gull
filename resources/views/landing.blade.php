@extends('layouts.app')
@section('extra_style')
@endsection
@section('content')
<div class="container">
  <div class="loginForm">    
    <div class="d-flex flex-column p-4">
      <div style="border: 1px solid black; height: 100px; width: 100px; margin: 0px auto 70px;">
      </div>
      <a href="{{route('login')}}" class="btn btn-primary btn-lg mt-4">Login</a>
      <a href="{{route('register')}}" class="btn btn-primary btn-lg mt-4">Signup</a>
    </div>    
  </div>
</div>
@endsection
@extends('layouts.app')
@section('extra_style')

@endsection
@section('content')
<div class="container">
  <div class="loginForm">
    <form method="POST" action="{{ route('landing') }}">
    @csrf
      <div class="d-flex flex-column align-items-center">
        <div style="border: 1px solid black; height: 100px; width: 100px; margin-bottom: 70px">
        </div>
        <a href="{{route('login')}}" class="btn btn-primary btn-lg mt-5">Login</a>
        <a href="{{route('landing')}}" class="btn btn-primary btn-lg my-5">Signup</a>
      </div>      
    </form>
  </div>
</div>
@endsection
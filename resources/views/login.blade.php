@extends('layouts.app')
@section('extra_style')

@endsection
@section('content')
<div class="container">
  <div class="loginForm">
    <form method="POST" action="{{ route('login') }}">
    @csrf
      <div class="d-flex flex-column align-items-center">
        <div style="border: 1px solid black; height: 100px; width: 100px; margin-bottom: 70px">
        </div>
        <div class="form-group">
          <label for="usr">Work Email:</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password">
        </div>
        <a href="{{route('vehicle')}}" class="btn btn-primary btn-lg mt-5">Login</a>
      </div>      
    </form>
  </div>
</div>
@endsection
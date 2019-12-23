@extends('layouts.app')
@section('extra_style')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js" ></script>
<script src="{{ asset('js/login.js') }}"></script>
@endsection
@section('content')
<div class="container">
  <div class="loginForm">
    <form method="POST" action="{{ route('login') }}" id="loginForm">
    @csrf
      <div class="d-flex flex-column p-4">
        <div style="border: 1px solid black; height: 100px; width: 100px; margin: 0px auto 70px;">
        </div>
        <div class="form-group">
          <label for="usr">Work Email:</label>
          <input type="email" class="form-control" name="email" required>
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
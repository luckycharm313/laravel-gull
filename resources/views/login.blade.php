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
    <form method="POST" action="{{ route('signin') }}" id="loginForm">
    @csrf
      <div class="d-flex flex-column p-4">
        <div style="border: 1px solid black; height: 100px; width: 100px; margin: 0px auto 70px;">
        </div>
        <div class="form-group">
          <label for="email">Work Email:</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg mt-5">Login</button>
        @if($errors->any())
          <div class="mt-3 error text-center">{{$errors->first()}}</div>
        @endif
      </div>      
    </form>
  </div>
</div>
@endsection
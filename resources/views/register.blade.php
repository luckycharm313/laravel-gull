@extends('layouts.app')
@section('extra_style')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js" ></script>
<script src="{{ asset('js/register.js') }}"></script>
@endsection
@section('content')
<div class="container">
  <div class="registerForm">
    <form method="POST" action="{{ route('signup') }}" id="registerForm">
    @csrf
    <div class="d-flex flex-column p-4">
        <div class="row">
          <div class="col-md-6 my-2">
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" name="first_name" required>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" required>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="company_name">Company Name:</label>
                  <input type="text" class="form-control" name="company_name" required>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="job_title">Job Title:</label>
                  <input type="text" class="form-control" name="job_title" required>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 my-2">
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="text" class="form-control" name="phone" required>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Work Email:</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="confirm_password">Confirm Password:</label>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg mt-5">Register</button>
        @if($errors->any())
          <div class="mt-3 error text-center">{{$errors->first()}}</div>
        @endif
      </div>      
    </form>
  </div>
</div>
@endsection
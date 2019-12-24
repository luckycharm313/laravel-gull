@extends('layouts.app')
@section('extra_style')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js" ></script>
<script src="{{ asset('js/add_location.js') }}"></script>
@endsection
@section('content')
<div class="container">
  <form method="POST" action="{{ route('vehicle') }}" id="addForm">
    @csrf
    <div class="row my-3">
      <div class="col-md-6 my-2">
        <div class="row my-2">
          <div class="col-md-12">
            <h3><i class='fas fa-map-marker-alt' style='font-size:20px'></i> Pickup:</h3>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Location Name :</label>
            <input type="text" class="form-control"  placeholder="" name="location_name">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Address :</label>
            <input type="text" class="form-control"  placeholder="" name="address">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Contact Name :</label>
            <input type="text" class="form-control"  placeholder="Name / Last Name" name="contact_name">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Phone # :</label>
            <input type="text" class="form-control"  placeholder="" name="phone1">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Notes for Driver :</label>
            <textarea class="form-control rounded-0"  placeholder="" name="note_driver" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="col-md-6 my-2">
      <div class="row my-2">
          <div class="col-md-12">
            <h3><i class='fas fa-map-marker-alt' style='font-size:20px'></i> Dropoff:</h3>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Location Name :</label>
            <input type="text" class="form-control"  placeholder="" name="location_name">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Address :</label>
            <input type="text" class="form-control"  placeholder="" name="address">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Contact Name :</label>
            <input type="text" class="form-control"  placeholder="Name / Last Name" name="contact_name">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Phone # :</label>
            <input type="text" class="form-control"  placeholder="" name="phone2">
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12">
            <label class="mb-2">Notes for Driver :</label>
            <textarea class="form-control rounded-0"  placeholder="" name="note_driver" rows="3"></textarea>
          </div>
        </div>
        <div class="row mt-5 mb-2">
          <div class="col-md-12 d-flex justify-content-center">
            <a href="{{route('vehicle')}}" class="btn btn-primary btn-lg mx-1">Cancel</a>
            <button type="button" class="btn btn-primary btn-lg mx-1">Save</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
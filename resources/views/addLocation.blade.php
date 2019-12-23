@extends('layouts.app')
@section('extra_style')
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
@section('content')
<div class="container">
  <form method="POST" action="{{ route('vehicle') }}">
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
            <input type="text" class="form-control"  placeholder="" name="phone">
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
            <input type="text" class="form-control"  placeholder="" name="phone">
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
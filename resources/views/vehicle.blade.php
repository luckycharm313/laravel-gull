@extends('layouts.app')
@section('extra_style')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script src="{{ asset('js/vehicle.js') }}"></script>
@endsection
@section('content')
<div class="container">
  <form method="POST" action="{{ route('vehicle') }}">
  @csrf
    <div class="row my-4">
      <div class="col-md-12">
        <a href="{{route('addLocation')}}" class="btn btn-primary btn-lg">Add Locations</a>
      </div>
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-2 my-2">
        <h5 class="mb-0">Vehicle Type :</h5>
      </div>
      <div class="col-md-10 my-2">
        <select class="form-control" id="sel1">
          <option>Select Vehicle</option>
          <option>Vehicle 1</option>
          <option>Vehicle 2</option>
          <option>Vehicle 3</option>
        </select>
      </div>      
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-2 my-2">
        <h5 class="mb-0">Accessories :</h5>
      </div>
      <div class="col-md-10 my-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="traping" value="option1">
          <label class="form-check-label" for="traping">Tarping</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="food_grade" value="option2">
          <label class="form-check-label" for="food_grade">Food Grade</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="protective_gear" value="option2">
          <label class="form-check-label" for="protective_gear">Protective Gear</label>
        </div>
      </div>
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-2 my-2">
        <h5 class="mb-0">Load Type :</h5>
      </div>
      <div class="col-md-10 my-2">
        <input type="text" class="form-control"  placeholder="Load Type" name="load_type">
      </div>
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-2 my-2">
        <h5 class="mb-0">Weight(KG) :</h5>
      </div>
      <div class="col-md-10 my-2">
        <input type="text" class="form-control"  placeholder="weight" name="load_type">
      </div>
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-2 my-2">
        <h5 class="mb-0">Pickup Date :</h5>
      </div>
      <div class="col-md-10 my-2">
        <input id="datepicker"/>
      </div>
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-2 my-2">
        <h5 class="mb-0">Packaging :</h5>
      </div>
      <div class="col-md-10 my-2">
        <select class="form-control" id="sel1">
          <option>Select Packaging</option>
          <option>Packaging 1</option>
          <option>Packaging 2</option>
          <option>Packaging 3</option>
        </select>
        <!-- <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="vehicleType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Packaging
          </button>
          <div class="dropdown-menu" aria-labelledby="vehicleType">
            <a class="dropdown-item" href="#">Packaging 1</a>
            <a class="dropdown-item" href="#">Packaging 2</a>
            <a class="dropdown-item" href="#">Packaging 3</a>
          </div>
        </div> -->
      </div>
      
    </div>
    <div class="row my-3 d-flex align-items-center">
      <div class="col-md-12 my-2">
        <button type="button" class="btn btn-primary btn-lg float-right">Send</button>
      </div>
    </div>
  </form>
</div>
@endsection
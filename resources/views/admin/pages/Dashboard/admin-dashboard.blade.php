@extends("admin.master")
@section('content')

@if(session()->has('message'))
<p class="alert alert-success">
    {{session()->get('message')}}
</p>
@endif

<h3>Dashboard</h3>
<br>

<div class="row">
<div class="col-sm-4">
    <div class="card text-dark bg-info mb-2" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Passenger Details</h5>
        <p class="card-text">9K+</p>
        <a href="{{route('passenger')}}" class="btn btn-primary">Show More</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-success mb-2"  style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Driver Details</h5>
        <p class="card-text"><b>25+</b></p>
        <a href="{{route('admin.driver')}}" class="btn btn-primary">Show More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-dark bg-warning mb-2" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Counter list</h5>
        <p class="card-text">35+</p>
        <a href="{{route('admin.counter')}}" class="btn btn-primary">Show More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-dark bg-info mb-2" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Bus Details</h5>
        <p class="card-text">35+</p>
        <a href="{{route('admin.bus')}}" class="btn btn-primary">Show More</a>
      </div>
    </div>
  </div>
</div>
@endsection
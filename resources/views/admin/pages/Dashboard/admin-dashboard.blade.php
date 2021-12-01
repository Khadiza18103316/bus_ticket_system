@extends("admin.master")
@section('content')
<h3>Dashboard</h3>
<br>
<div class="row">
<div class="col-sm-4">
    <div class="card text-dark bg-info mb-2" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Passengers Details</h5>
        <p class="card-text">9K+</p>
        <a href="{{route('admin.passengers')}}" class="btn btn-primary">Show More</a>
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
    <div class="card text-dark bg-success mb-2" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Bus</h5>
        <p class="card-text">35+</p>
        <a href="{{route('admin.bus')}}" class="btn btn-primary">Show More</a>
      </div>
    </div>
  </div>
  {{-- <div class="col-sm-4">
    <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Booking Info</h5>
        <p class="card-text">125</p>
        <a href="{{route('admin.booking')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Payment Details</h5>
        <p class="card-text">15K+</p>
        <a href="{{route('admin.payment')}}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
      <div class="card-body">
        <h5 class="card-title" >Report</h5>
        <p >15K+</p>
        <a href="{{route('admin.report')}}" class="btn btn-danger">Read More</a>
      </div>
    </div>
  </div> --}}
</div>
@endsection
@extends('admin.master')

@section('content')

    <h3>Add passenger</h3>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            <p class="alert alert-danger">{{$error}}</p>
        </div>
    @endforeach
@endif

@if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

    <form action="{{ route('admin.passengers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Passenger Name</label>
            <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Passenger Phone Number</label>
            <input required name="phone" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Passenger Address</label>
            <input required name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Passenger Email</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
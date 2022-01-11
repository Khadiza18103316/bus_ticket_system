@extends('admin.master')
@section('content')

    <h3>Add trip</h3>

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

        <form action="{{route('admin.trip.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Location From</label>
            <select class="form-control" required name="location from">
                @foreach ($locations as $location)
                <option value="{{$location->location_from}}">{{$location->location_from}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Location To</label>
            <select class="form-control" required name="location to">
                @foreach ($locations as $location)
                <option value="{{$location->location_to}}">{{$location->location_to}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Bus No</label>
            <input required name="bus no" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Bus Fare</label>
            <input required name="bus fare" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
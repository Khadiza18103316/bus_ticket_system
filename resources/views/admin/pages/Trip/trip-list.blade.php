@extends('admin.master')
@section('content')

    <h3>Trip list</h3>


@if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif 

    <a href="{{route('admin.trip.create')}}" class="btn btn-success">Add Trip</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">From Location</th>
                <th scope="col">To Location</th>
                <th scope="col">Bus No</th>
                <th scope="col">Bus Fare</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($trips as $key => $trip)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $trip->location_from}}</td>
                    <td>{{ $trip->location_to}}</td>
                    <td>{{ $trip->bus_no}}</td>
                    <td>{{ $trip->fare}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
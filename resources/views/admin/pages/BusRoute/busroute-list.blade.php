@extends('admin.master')
@section('content')

    <h3>Busroute list</h3>

    <a href="{{ route('admin.busroute.create') }}" class="btn btn-success">Add Bus Route</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">bus_name</th>
                <th scope="col">bus_no</th>
                <th scope="col">bus_type</th>
                <th scope="col">bus_route_time</th>
                <th scope="col">bus_route_date</th>
                <th scope="col">bus_departure_from</th>
                <th scope="col">bus_departure_to</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($busroutes as $key => $busroute)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <th>{{ $busroute->bus_name}}</th>
                    <td>{{ $busroute->bus_no}}</td>
                    <td>{{ $busroute->bus_type}}</td>
                    <td>{{ $busroute->bus_route_time}}</td>
                    <td>{{ $busroute->bus_route_date}}</td>
                    <td>{{ $busroute->bus_departure_from}}</td>
                    <td>{{ $busroute->bus_departure_to}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
  
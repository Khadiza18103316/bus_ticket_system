@extends('admin.master')
@section('content')

<h3> Bus Route Details </h3>

<p>Bus No:{{$busroute->bus_no}} </p>
<p>Bus Type:{{$busroute->bus_type}} </p>
<p>Location From:{{$busroute->location_from}} </p>
<p>Location To:{{$busroute->location_to}} </p>
<p>Bus Route Time:{{$busroute->bus_route_time}} </p>
<p>Bus Route Date:{{ $busroute->bus_route_date}} </p>
<p>Bus Departure From:{{$busroute->bus_departure_from}} </p>
<p>Bus Departure To:{{ $busroute->bus_departure_to}} </p>
<p>Bus Fare:{{$busroute->bus_fare}} </p>

@endsection
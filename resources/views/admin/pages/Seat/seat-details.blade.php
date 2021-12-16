@extends('admin.master')
@section('content')

<h3> Seat Details </h3>

<p>Seat No:{{$seat->seat_no}} </p>
<p>Seat Type:{{$seat->seat_type}} </p>
<p>Seat Bus No:{{$seat->seat_bus_no}} </p>

@endsection
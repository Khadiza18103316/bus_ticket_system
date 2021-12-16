@extends('admin.master')
@section('content')

<h3> Location Details </h3>

<p>From Location:{{$location->location_from}} </p>
<p>To Location:{{$location->location_to}} </p>

@endsection
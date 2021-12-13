@extends('admin.master')
@section('content')

<h3> Bus View </h3>

<p>                        
    <img src="{{url('/uploads/'.$bus->image)}}" width="100px" alt="">
</p>
<p>bus_name:{{$bus->bus_name}} </p>
<p>bus_no:{{$bus->bus_no}} </p>
<p>bus_type:{{$bus->bus_type}} </p>

@endsection
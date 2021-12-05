@extends('admin.master')
@section('content')

    <h3>Location list</h3>

    <a href="{{route('admin.location.create')}}" class="btn btn-success">Add location</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">from_location</th>
                <th scope="col">to_location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $key => $location)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $location->location_from}}</td>
                    <td>{{ $location->location_to}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
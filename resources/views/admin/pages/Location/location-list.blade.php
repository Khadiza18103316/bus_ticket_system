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
                <th scope="col">From Location</th>
                <th scope="col">To Location</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $key => $location)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $location->location_from}}</td>
                    <td>{{ $location->location_to}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.location.details',$location->id)}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-info" href=""><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" href="{{route('admin.location.delete',$location->id)}}"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
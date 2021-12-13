@extends('admin.master')
@section('content')

    <h3>Bus list</h3>

    <a href="{{ route('admin.bus.create') }}" class="btn btn-success">Add bus</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">bus_name</th>
                <th scope="col">image</th>
                <th scope="col">bus_no</th>
                <th scope="col">bus_type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buses as $key => $bus)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $bus->bus_name }}</td>
                    <td>
                        <img src="{{url('/uploads/'.$bus->image)}}" width="100px" alt="">
                    </td>
                    <td>{{ $bus->bus_no }}</td>
                    <td>{{ $bus->bus_type }}</td>

                    <td>
                        <a class="btn btn-primary" href="{{route('admin.bus.view', $bus->id)}}">View</a>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-danger" href="{{route('admin.bus.delete', $bus->id)}}">Delete</a>
                  </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
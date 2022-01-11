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
                <th scope="col">Bus Name</th>
                <th scope="col">Image</th>
                <th scope="col">Bus No</th>
                <th scope="col">Bus Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buses as $key => $bus)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $bus->bus_name }}</td>
                    <td><img src="{{url('/uploads/'.$bus->image)}}" width="80"></td>
                    <td>{{ $bus->bus_no }}</td>
                    <td>{{ $bus->bus_type }}</td>

                    <td>
                        <a class="btn btn-primary" href="{{route('admin.bus.details', $bus->id)}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-info" href=""><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" href="{{route('admin.bus.delete', $bus->id)}}"><i class="fas fa-trash-alt"></i></a>
                  </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
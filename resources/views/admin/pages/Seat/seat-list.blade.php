@extends('admin.master')
@section('content')

    <h3>Seat list</h3>

    <a href="{{ route('admin.seat.create') }}" class="btn btn-success">Add seat</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Seat Id</th>
                <th scope="col">Bus Type</th>
                <th scope="col">Bus No</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($seats as $key => $seat)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $seat->seat_id}}</td>
                    <td>{{ $seat->bus_type}}</td>
                    <td>{{ $seat->bus_no}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.seat.details',$seat->id)}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-info" href="{{route('admin.seat.edit',$seat->id)}}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" href="{{route('admin.seat.delete',$seat->id)}}"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
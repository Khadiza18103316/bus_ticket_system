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
                <th scope="col">seat_no</th>
                <th scope="col">seat_type</th>
                <th scope="col">seat_bus_no</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seats as $key => $seat)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $seat->seat_no}}</td>
                    <td>{{ $seat->seat_type}}</td>
                    <td>{{ $seat->seat_bus_no}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
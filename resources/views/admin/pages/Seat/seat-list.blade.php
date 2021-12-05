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
        {{-- <tbody>
            @foreach ($buses as $key => $bus)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $bus->bus_name }}</td>
                    <td>
                        <img src="{{url('/uploads/'.$bus->image)}}" width="100px" alt="">
                    </td>
                    <td>{{ $bus->bus_no }}</td>
                    <td>{{ $bus->bus_type }}</td>
                </tr>
            @endforeach
        </tbody> --}}
    </table>
@endsection
@extends('admin.master')
@section('content')

    <h3>Driver list</h3>

    <a href="{{route('admin.driver.create')}}" class="btn btn-success">Add Driver</a>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">driver_name</th>
                <th scope="col">driver_id</th>
                <th scope="col">driver_phone_number</th>
                <th scope="col">bus_name</th>
                <th scope="col">bus_number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $key=> $driver)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $driver->driver_name }}</td>
                    <td>{{ $driver->driver_id }}</td>
                    <td>{{ $driver->driver_phone_number }}</td>
                    <td>{{ $driver->bus_name }}</td>
                    <td>{{ $driver->bus_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

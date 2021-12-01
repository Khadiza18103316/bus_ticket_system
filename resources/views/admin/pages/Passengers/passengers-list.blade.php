@extends('admin.master')
@section('content')

    <h3>Passenger list</h3>

    <a href="{{ route('admin.passengers.create') }}" class="btn btn-success">Add Passenger</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">number</th>
                <th scope="col">address</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($passengers as $key => $passenger)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $passenger->name }}</td>
                    <td>{{ $passenger->number }}</td>
                    <td>{{ $passenger->address }}</td>
                    <td>{{ $passenger->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
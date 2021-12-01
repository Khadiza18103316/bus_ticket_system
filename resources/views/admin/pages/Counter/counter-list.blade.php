@extends('admin.master')
@section('content')

    <h3>Counter list</h3>

    <a href="{{ route('admin.counter.create') }}" class="btn btn-success">Add counter</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">counter_name</th>
                <th scope="col">counter_no</th>
                <th scope="col">counter_phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($counters as $key => $counter)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $counter->name }}</td>
                    <td>{{ $counter->counter_no }}</td>
                    <td>{{ $counter->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
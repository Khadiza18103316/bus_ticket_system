@extends('admin.master')


@section('content')
<h3>Searched Bus list</h3>

<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>

<div id="PrintTableArea">
<table class="table">
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

        {{-- @else
            <tr>
            <h1>product not found...404!</h1>
                <th></th>
            </tr>

        @endif --}}



    </tbody>
</table>
</div>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
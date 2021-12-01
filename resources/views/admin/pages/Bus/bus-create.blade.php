@extends('admin.master')

@section('content')

    <h3>Add bus</h3>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            <p class="alert alert-danger">{{$error}}</p>
        </div>
    @endforeach
@endif

@if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

        <form action="{{route('admin.bus.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Bus Name</label>
            <input required name="bus name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Bus No</label>
            <input required name="bus no" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Bus Type</label>
            <select class="form-control" required name="bus_type">
                <option value=""></option>
                <option value="AC Bus">AC Bus</option>
                <option value="Non AC Bus">Non AC Bus</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Bus Image</label>
            <input required name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
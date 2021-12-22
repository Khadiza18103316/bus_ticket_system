@extends('admin.master')

@section('content')

    <h3>Add seat</h3>

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

        <form action="{{route('admin.seat.update',$seat->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Seat No</label>
            <input value="{{$seat->seat_no}}" required name="seat no" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Seat Type</label>
            <select class="form-control" required name="seat type">
                <option value=""></option>
                <option value="AC Bus">AC Bus</option>
                <option value="Non AC Bus">Non AC Bus</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Seat Bus No</label>
            <input value={{$seat->seat_bus_no}} required name="seat bus no" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
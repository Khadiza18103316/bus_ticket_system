@extends('admin.master')

@section('content')

    <h3>Add location</h3>

        <form action="{{route('admin.location.store')}}" method="POST">
        @csrf

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
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Location From</label>
            <select class="form-control" required name="location from">
                <option value=""></option>
                <option value="Dhaka">Dhaka</option>
                <option value="Khulna">Khulna</option>
                <option value="Jessore">Jessore</option>
                <option value="Satkhira">Satkhira</option>
                <option value="Mymenshingh">Mymenshingh</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Cox's Bazar">Cox's Bazar</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Location To</label>
            <select class="form-control" required name="location to">
                <option value=""></option>
                <option value="Dhaka">Dhaka</option>
                <option value="Khulna">Khulna</option>
                <option value="Jessore">Jessore</option>
                <option value="Satkhira">Satkhira</option>
                <option value="Mymenshingh">Mymenshingh</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Cox's Bazar">Cox's Bazar</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
@extends('frontend.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Available Trips</div>

                    <div class="card-body">
                        @forelse ($buses as $bus )
                        <p>
                            <h3>{{  $trip->location_from }}</h3>
                            </p>
                            <p>
                            <h3>{{ $trip->location_to }}</h3>
                            </p>
                            <p>
                            <h3>{{ $trip->bus_no }}</h3>
                            </p>
                            <p>
                            <h3>{{ $trip->fare }}</h3>
                            </p>
                           
                    @empty
                        <p>no buses to show</p>

                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        a.list-group-item {
            font-size: 18px;
        }
        a.list-group-item:hover {
            background-color: red;
            color: #fff;
        }
        .card-header {
            background-color: red;
            color: #fff;
            font-size: 20px;
        }
    </style>
@endsection

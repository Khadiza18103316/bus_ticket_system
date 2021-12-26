@extends('frontend.index')
@section( 'content')
<div id="gallery">
    <div class="container">
        <div class="text-center">
            <h3>Bus List</h3>
            <p>BUSES For<br>Our Passenger</p>
        </div>
        <div class="row">
                    @foreach ($buses as $bus)
                    <a href="{{url('/uploads/'.$bus->image)}}"class="flipLightBox" >
                        <img src="{{url('/uploads/'.$bus->image)}}" width="280">
                    </a>
                    @endforeach
        </div>
    </div>
</div>
@endsection

            	
            
            
    

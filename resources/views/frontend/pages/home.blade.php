{{-- @extends('frontend.index')
@section( 'content')
<div class="gallery">
        <div class="container">
            <div class="text-center">
                <h3>Gallery</h3>
                <p>BUSES For<br>Our Customer</p>
            </div>
            <div class="row">
                <figure class="effect-chico">
                    <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                        @foreach ($buses as $bus)
                        <a href="#"class="flipLightBox" >
                        <img src="{{url('/uploads/'.$bus->image)}}" class="img-responsive" alt="">
                        </a>
                        @endforeach
                    </div>
                </figure> 
            </div>
        </div>
</div><!--/#gallery-->
@endsection --}}

@extends('frontend.index')
@section( 'content')
<div id="gallery">
    <div class="container">
        <div class="text-center">
            <h3>Gallery</h3>
            <p>BUSES For<br>Our Customer</p>
        </div>
        <div class="row">
            <figure class="effect-chico">
                <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    @foreach ($buses as $bus)
                    <a href="{{url('/uploads/'.$bus->image)}}"class="flipLightBox" >
                    <img src="{{url('/uploads/'.$bus->image)}}" class="img-responsive" alt="">
                    </a>
                    @endforeach
                </div>
            </figure> 	  
        </div>
    </div>
</div><!--/#gallery-->
@endsection

            	
            
            
    

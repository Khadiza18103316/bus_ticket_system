<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bus Reservation</a>
            </div>				
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="{{route('frontend.booking')}}">Reservation</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#location">Locations</a></li> 
                    <li><a href="#contact">Contact</a></li>

                    @if(auth()->user())
                    <li><a href="{{route('user.logout')}}">{{auth()->user()->name}} ({{auth()->user()->role}})| Logout</a></li> 
                    @else           
                    <li><a href="{{route('user.login')}}">Login</a></li>  
                    <li><a href="{{route('user.registration')}}">Registration</a></li>  
                    @endif                   
                       
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->		
</header><!--/header-->	

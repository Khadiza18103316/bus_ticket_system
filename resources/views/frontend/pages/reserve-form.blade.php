<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<title>Reservation</title>

			<!-- Google font -->
			<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

			<!-- Bootstrap -->
			<link type="text/css" rel="stylesheet" href="{{url('frontend/book/css/bootstrap.min.css')}}" />

			<!-- Custom stlylesheet -->
			<link type="text/css" rel="stylesheet" href="{{url('frontend/book/css/style.css')}}" />
		</head>

		<body>
			<div id="booking" class="section">
			<div class="section-center">
			<div class="container">
			<div class="row">
			<div class="booking-form">
			<form>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<label for="exampleInputEmail1" class="form-label">From</label>
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
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<label for="exampleInputEmail1" class="form-label">To</label>
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
			</div>
			</div>

			<div class="row">
			<div class="col-md-4">
			<div class="form-group">
			<span class="form-label">Date</span>
			<input class="form-control" type="date" required>
			</div>
			</div>

			<div class="col-md-4">
			<div class="form-group">
			<label for="exampleInputEmail1" class="form-label">Time</label>
			<select class="form-control" required name="time">
			<option value=""></option>
			<option value="Morning (05:00AM-11:59AM)">Morning (05:00AM-11:59AM)</option>
			<option value="Afternoon (12:00PM-05:59PM)">Afternoon (12:00PM-05:59PM)</option>
			<option value="Night (06:00PM-11:59PM)">Night (06:00PM-11:59PM)</option>
			</select>
			</div>
			</div>
			<div class="col-md-4">
			<div class="form-group">
			<label for="exampleInputEmail1" class="form-label">Bus Type</label>
			<select class="form-control" required name="bus type">
			<option value=""></option>
			<option value="AC Bus">AC Bus</option>
			<option value="Non AC Bus">Non AC Bus</option>
			</select>
			</div>
			</div>
			</div>

			<div class="row">
			<div class="col-md-3">
			<div class="form-btn">
		    <a href="{{route('frontend.showTrip')}}">
            <button class="btn btn-danger mb-1">Search</button>
            </a>
			{{-- <button class="submit-btn">Search</button> --}}
			</div>
			</div>
			</div>
			<br>
			<a class="btn btn-primary" href="{{route('frontend.home')}}">Back</a>
			</form>
			</div>
			</div>
			</div>
			</div>
			</div>
		</body>
		</html>
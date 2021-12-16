<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

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
										<span class="form-label">From</span>
										<input class="form-control" type="text" placeholder="enter from location">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">To</span>
										<input class="form-control" type="text" placeholder="enter to location">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Enter Bus Type</label>
									<select class="form-control" required name="bus type">
										<option value=""></option>
										<option value="AC Bus">AC Bus</option>
										<option value="Non AC Bus">Non AC Bus</option>
									</select>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Show</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
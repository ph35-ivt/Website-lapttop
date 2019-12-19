<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<h1>Hello, world!</h1>
          <form action="{{route('sendemail')}}" method="post">
         	@csrf
         	<div class="form-group">
				<label for="name" >Your name: <span style="color:red">*</span>: </label>
				<input type="text" class="form-control"  name="name" >
			</div>
			<div class="form-group">
				<label for="email">Email <span style="color:red">*</span>:</label>
				<textarea name="email" class="form-control"></textarea>
			</div> 	
			<div class="form-group">
				<label for="email">phone <span style="color:red">*</span>:</label>
				<textarea name="phone" class="form-control"></textarea>
			</div> 		
			<div class="form-group">
				<label for="phone">Address <span style="color:red">*</span>:</label>
				<input type="text" class="form-control" name="address" id="address" >
			</div>
			<div class="form-group">
				<label for="phone">Date_order <span style="color:red">*</span>:</label>
				<input type="date" class="form-control" name="date_order"  >
			</div>

			<button type="submit" >submit</button>
         	
         </form>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
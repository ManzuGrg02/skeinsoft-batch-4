<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<form>
	<div class="container">
		<div class="form-group">
		<label for ="name">Name:</label>
		<input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
		</div>

		<div class="form-group">
      	<label for="rollno">RollNo:</label>
      	<input type="number" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno">
    	</div>
    	<div class="form-group">
      	<label for="address">Address:</label>
      	<input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
   	    </div>
   	    <div class="form-group">
      	<label for="gender">Gender:</label>
      	<input type="radio" name="gender" value="male" checked> Male<br>
  		<input type="radio" name="gender" value="female"> Female<br>
  		<input type="radio" name="gender" value="other"> Other
   	    </div>
   	    <button type="submit" class="btn btn-primary">Submit</button>
   	    <button type="submit" class="btn btn-primary">Cancel</button>	
	</form>
	</div>
</body>
</html>
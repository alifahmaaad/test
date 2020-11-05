<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

	<title>Hello, world!</title>
</head>

<body>
	<h2>Form HTML</h2>

	<form action="/action_page.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br><br>
		<label for="address">Address:</label>
		<input type="text" id="address" name="address"><br><br>
		<label for="negara">country:</label>
		<select id="negara" name="negara">
			<option value="indonesia">Indonesia</option>
			<option value="amerika serikat">Amerika Serikat</option>
		</select><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="photo">Photo:</label>
		<input type="file" name="fileToUpload" id="fileToUpload"><br><br>

		<label for="comment">Comment:</label>
		<textarea></textarea>
		<br>
		<input type="submit" value="Submit">

	</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>
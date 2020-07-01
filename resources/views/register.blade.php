<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><b>Buat Account Baru</b></h1>
	<h3>Sign Up Form</h3>

	<form action="/welcome2" method="post">
		
		@csrf

		<label for="Nama Awal">First Name : </label><br><br>
		<input type="text" name="first_name" autofocus placeholder="First Name" id="Nama Awal" autocomplete="off"><br><br>
		<label for="Nama Akhir">Last Name : </label><br><br>
		<input type="text" name="last_name" placeholder="Last name" id="Nama Akhir" autocomplete="off"><br><br>
		
		<label>Gender : </label><br><br>
		<input type="radio" name="gender" value="male">
		<label>Male</label><br>
		<input type="radio" name="gender" value="female">
		<label>Female</label><br>
		<input type="radio" name="gender" value="other">
		<label>Other</label><br><br>
		
		<label>Nationality : </label><br><br>
		<select name="nationality">
            <option disabled selected>Select Your Nationality</option>
			<option value="indonesian">Indonesian</option>
			<option value="malaysian">Malaysian</option>
			<option value="singaporean">Singaporean</option>
			<option value="other">Other</option>
		</select><br><br>

		<label>Language Spoken : </label><br><br>
		<input type="checkbox" name="language" value="bahasa" id="indonesia">
		<label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" value="english" id="en">
		<label for="en">English</label><br>
		<input type="checkbox" name="language" value="other" id="other">
		<label for="other">Other</label><br><br>

		<label>Bio : </label><br><br>
		<textarea name="message" rows="10" cols="30"></textarea><br>
		<button type="submit">Sign Up</button>
	</form>

</body>
</html>
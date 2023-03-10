<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bio Data</title>
		<link rel="stylesheet" href="BioDataStyle.css">
	</head>
	
	<body>
		<h1 class="heading">BIO DATA</h1>
		<form action="" method="post">
			<p class="inputs">
				<label for="name">Name:</label>
				<input class="input-box" type="text" name="name" id="name">
			</p>
			
			<p class="inputs">
				<label for="address">Addres:</label>
				<input class="input-box" type="text" name="addr" id="addr">
			</p>
			
			<p class="inputs">
				<label for="age">Age:</label>
				<input class="input-box" type="number" name="age" id="age">
			</p>
			
			<p class="inputs">
				<label for="phone">Phone:</label>
				<input class="input-box" type="text" name="phone" id="phone">
			</p>
			
			<p class="inputs">
				<label for="email">Email:</label>
				<input class="input-box" type="email" name="email" id="email">
			</p>
			
			<p class="inputs">
				<label for="quali">Qualification:</label>
				<input class="input-box" type="text" name="quali" id="quali">
			</p>
			
			<p class="inputs">
				<input type="submit" name="submit" id="submit" value="Submit">
			</p>
		</form>

		<?php
			if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["phone"]) && 
				isset($_POST["email"]) && isset($_POST["addr"]) && isset($_POST["quali"]) && isset($_POST["submit"]))
			{
				echo '
				<p class="output">Name: '. $_POST["name"] . '</p>
				<p class="output">Address: '. $_POST["addr"] . '</p>
				<p class="output">Age: '. $_POST["age"] . '</p>
				<p class="output">Mobile: '. $_POST["phone"] . '</p>
				<p class="output">Email: '. $_POST["email"] . '</p>
				<p class="output">Qualification: '. $_POST["quali"] . '</p>';
			}
		?>
	</body>
</html>

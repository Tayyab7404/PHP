<html>
	<head>
		<title>Greeting Message</title>
		<link rel="stylesheet" href="GreetingStyle.css">
	</head>

	<body>
		<center><br><br>
			<div class="double"><b>GREETING TEXT</b></div><br>

			<div class="dashed">
				<form action="" method="post">
				<p>Enter your name:<br>
				<input type="text" name="name"></p>
				<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">
				</form>
			</div>
		</center>

		<?php
			if($_POST)
			{
				$name = $_POST["name"];

				echo'<center><br>
					 <font color="darkblue" face="arial" size="6">WELCOME</font></center>
					 
					 <center><br>
					 <font color="red" face="calibri" size="6"><name><b>' . $name . '</b></name>
					 </font></center>
					 
					 <p><img src="flower1.png" alt="flower" style="float:right;">
					 <img src="flower2.png" alt="flower" style="float:left;"></p>';
			}
		?>
	</body>
</html>

<html>
	<head>
		<title>Age Calculator</title>	
	</head>

	<body bgcolor = "lightgreen">
		<form action="" method="post">
			<br>
			<table bgcolor = "orange" align="center" border="2" WIDTH=600>
				<tr><td><br><center>
				<h1><u><font color="black">AGE CALCULATOR</font></u></h1>
				</center><br></td><br></tr>
			</table><br>

			<table bgcolor="white" align="center" border="2" WIDTH=600>
				<tr><td><center><h3><u>
				<font color="black">Enter your Date of Birth</font>
				</u></h3></center><br>
				<input type="number" name="Date" placeholder = "Date"/>
				<input type="number" name="Month" placeholder = "Month"/>
				<input type="number" name="Year" placeholder = "Year"/>
				<br><center><br>
				<input type="submit" value="SUBMIT"/>
				<br><br><br></center></td></tr>
			</table>
		</form>

		<?php
			$y1 = date("Y");
			$m1 = date("m");
			$d1 = date("d");
			
			$d2 = $_POST["Date"];
			$m2 = $_POST["Month"];
			$y2 = $_POST["Year"];
			
			if($y1>=$y2)
			{
				$y = $y1 - $y2;
				
				if($m1 >= $m2) $m = $m1 - $m2;
				else
				{
					$y = $y - 1;
					$m = 12 - ($m2 - $m1);
				}
				
				if($d1 >= $d2) $d = $d1 - $d2;
				else
				{
					$m = $m - 1;
					$d = 30 - ($d2 - $d1);
				}
				
				if($d >= 31)
				{
					$m = $m + 1;
					$d = 0;
				}
				
				if($m >= 12)
				{
					$y = $y + 1;
					$m = 0;
				}

				echo '<table align="center" border="2" WIDTH=600 bgcolor = "green">
					  <tr align="center"><td><br>
					  <font color="black">';
				if($y > -1) 
					echo 	'<h2>Your age is '.$y.' years '.$m.' months '.$d.' days</h2>';
				else 
					echo	'<h2>Invalid Date of Birth!</h2>';
			}
			else 
				echo "<h2>Invalid Date of Birth!</h2>";
			echo	 '</font></td></tr></table>';
		?>
	</body>
</html>

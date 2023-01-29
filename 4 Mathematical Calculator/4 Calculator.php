<html>
	<head>
		<title>Calculator</title>
	</head>

	<body  bgcolor = "coral">
		<form action="" method="post">
			<br>
			<center><h1><u><font color="red">CALCULATOR</font></u></h1></center>
			<br>
			<table bgcolor="darkcyan" align="center">
			<tr><td><br><input type="text" value="Enter number 1:" readonly>
			<input type="number" name="num1"></tr></td>

			<tr><td><br><input type="text" value="Enter the operator:" readonly>
  				<select name="operator" id="operator">
					<option value="NULL">-----------</option>
    				<option value="+">Add</option>
					<option value="-">Subtract</option>
   					<option value="*">Multiply</option>
    				<option value="/">Divide</option>
    				<option value="%">Mod</option>
    				<option value="**">Power</option>
  				</select>

			<tr><td><br><input type="text" value="Enter number 2:" readonly>
			<input type="number" name="num2"></tr></td>
			<tr><td><br><br><center><br><br>
			<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">
			<br><br><br></center></tr></td></table>
		</form>

		<?php 
			if($_POST)
			{
				$n1 = $_POST["num1"];
				$n2 = $_POST["num2"];
				$operator = $_POST["operator"];
			
				switch($operator)
				{
					case "+": $answer = $n1 + $n2; break;
					case "-": $answer = $n1 - $n2; break;
					case "*": $answer = $n1 * $n2; break;
					case "/": $answer = $n1 / $n2; break;
					case "%": $answer = $n1 % $n2; break;
					case "**": $answer = $n1 ** $n2; break;
				} 

				echo '<table align="center" border="2" width="50%"><tr align="center"><td><br>
					 <font color="black">'; 

				if($operator != "NULL")echo"<h2> ",$n1," ",$operator," ",$n2 ," = ",$answer,"</h2>"; 
				else echo "Invalid Operator!";
			}

			echo'</font></td></tr></table>';
		?>
	</body>
</html>

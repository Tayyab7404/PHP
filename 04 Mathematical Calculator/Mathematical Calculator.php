<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Mathematical Calculator</title>
	</head>

	<body  bgcolor = "coral">
		<form action="" method="post">
			<center><br><br>
				<h1>
					<u>
						<font color="black">MATHEMATICAL CALCULATOR</font>
					</u>
				</h1>
			</center><br><br>
			
			<table bgcolor="darkcyan" align="center" height="30%" width="30%">
				<tr align="center">
					<td><br>
						<input type="text" value="Enter Operand 1:" readonly>
						<input type="number" name="num1">
					</td>
				</tr>

				<tr align="center">
					<td><br>
						<input type="text" value="Enter the Operator:" readonly>
						<select name="operator" id="operator">
							<option value="NULL">----------------------------------</option>
							<option value="+">Add</option>
							<option value="-">Subtract</option>
							<option value="*">Multiply</option>
							<option value="/">Divide</option>
							<option value="%">Mod</option>
							<option value="**">Power</option>
						</select>

				<tr align="center">
					<td><br>
						<input type="text" value="Enter Operand 2:" readonly>
						<input type="number" name="num2">
					</td>
				</tr>
			</table>

			<table bgcolor="darkcyan" align="center" height="10%" width="30%">
				<tr align="center">
					<td><input type="submit" value="SUBMIT"></td>
					<td><input type="reset" value="CLEAR"></td>
				</tr>
			</table>
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

				echo'
				<table align="center" border="2" width="50%">
					<tr align="center">
						<td><br>
					 		<font color="black">'; 
				if($operator != "NULL")
					echo"<h2> ",$n1," ",$operator," ",$n2 ," = ",$answer,"</h2>"; 
				else echo "<h2>Invalid Operator!</h2>";
			}

			echo'<br></font></td></tr></table>';
		?>
	</body>
</html>

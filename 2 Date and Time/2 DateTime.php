<html>
	<head>
		<title>Date and Time</title>
	</head>
	
	<body bgcolor="lightgreen">
		<style>
			table
			{
				font-family:calibri;
			}
		</style>
		
		<?php
			date_default_timezone_set("Asia/Kolkata");
			
			echo'<table bgcolor="skyblue" align="center" border="2" width="50%" height="50%">
				 <th>Format</th>
				 <th>Date and Time</th>
				 
				 <tr align="center">
				 <td>Current Date in dd/mm/yy format: </td>
				 <td>'.date("d/m/y").'</td>
				 </tr>
				 
				 <tr align="center">
				 <td>Current Date in dd/mm/yyyy format: </td>
				 <td>'.date("d/m/Y").'</td>
				 </tr>
				 
				 <tr align="center">
				 <td>Current Date in dd MON yyyy format: </td>
				 <td>'.date("d M Y").'</td>
				 </tr>
				 
				 <tr align="center">
				 <td>Current Date in Day, dd MON yyyy format: </td>
				 <td>'.date("D, d M Y").'</td>
				 </tr>

				 <tr align="center">
				 <td>Current Date in Day, dd MONTH yyyy format: </td>
				 <td>'.date("D, d F Y").'</td>
				 </tr>
			
				 <tr align="center">
				 <td>Current Time in 12-Hour Format:</td>
				 <td>'.date("h : i : s a").'</td>
				 </tr>
				 
				 <tr align="center">
				 <td>Current Time in 24-Hour Format:</td>
				 <td>'.date("H : i : s ").'</td>
				 </tr>
				 </table>';
		?>
	</body>
</html>
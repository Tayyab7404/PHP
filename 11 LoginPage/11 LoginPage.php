<html>
	<body bgcolor="azure">
		<?php 
			$username=$_POST['username'];
			$password=$_POST['password'];
			 
			if($username=="tayyab777" && $password=="123456789")
			{
				echo'<table align="center" border="2">
					 <tr><td><center><h1><br>** PERSONAL DETAILS **<br><br></h1></center>
					 <font color="black" face="Courier">
					 <h3><b><pre>
	NAME 		: 	T.Tayyab	<br>
	D.O.B		: 	7 April 2004	<br>
	BLOOD GROUP	: 	O+	<br>
	ADDRESS		: 	Guntur, Andhra Pradesh	<br>
	CONTACT NO	: 	9032301700	<br>
	EMAIL ID	: 	tayyabtavvagunta@gmail.com	<br><br></pre>
					 </h3></b></font></td></tr></table>';
			}

			else
			{
				echo'<font face="calibri" size="20" color="black">
					 <center>Invalid<br>USERNAME or PASSWORD!</center></font>';
			}
		?>
	</body>
</html>

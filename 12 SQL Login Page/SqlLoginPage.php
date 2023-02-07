<?php
	$username = $_POST['username'];//"Y21CS172";//
	$password = $_POST['password'];//"Tayyab@172";//

	$sql = "SELECT * FROM `students`";//Name, Regd.no, CGPA, Password where Regd.no = $uname
	$conn = mysqli_connect("localhost", "root", "","Login" ) or 
			die("Unable to connect to MySQL". mysqli_connect_error());

	$res = mysqli_query($conn,$sql);

	if(!$res)
	{
		echo "Invalid Credential By the Student Roll no ".$username;
		echo " <a href=./SqlLoginPage.htm>Goto home</a>";
	}

	else if(mysqli_num_rows($res) == 0)
	{
		echo "Invalid Credential By the Student Roll no ".$username;
		echo " <a href=./SqlLoginPage.htm>Goto home</a>";
	}
		
	while($row = mysqli_fetch_row($res))
	{
		$_POST['Name'] = $row[0];
		$_POST['Regd.no'] = $row[1];
		$_POST['CGPA'] = $row[2];
		$_POST['Password'] = $row[3];
		
		if($username == $row[1] && $password == $row[3])
		{	
			echo "Login Successful!";
			echo "<br>Student Name	: ".$row[0];
			echo "<br>Roll No     	: ".$row[1];
			echo "<br>CGPA        	: ".$row[2];
		}
		else
		{
			echo "Invalid Credential By the Student Roll no ".$username;
			echo "<a href=./SqlLoginPage.htm>Goto home</a>";
		}
	}
?>
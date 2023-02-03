<?php
$uname=$_POST['username'];
$pwrd=$_POST['password'];
include "./sconnect.php";
$sql = "select Name,Redg. no,CGPA,Password from student where Name='$uname'";
$res = mysqli_query($db,$sql);
 // $res = mysql_query($sql);
	if(!$res){
			echo "Invalid Credential By the Student Roll no ".$uname;
		echo "<a href=./slogin.html>Goto home</a>";
	}
	if(mysqli_num_rows($res) == 0){
		echo "Invalid Credential By the Student Roll no ".$uname;
		echo "<a href=./slogin.html>Goto home</a>";
	}
	
	
	while($row = mysqli_fetch_row($res))
		{
		$_POST['sname'] = $row[0];
		$_POST['rno'] = $row[1];
		$_POST['cgpa'] = $row[2];
		$_POST['pwd'] = $row[3];
        
 		if($uname == $row[0] && $pwrd == $row[3])
			{
				
				echo "Successfully Login By the Student";
				echo "<br>Student Name: =".$row[0];
				echo "<br>Roll No     : =".$row[1];
				echo "<br>CGPA        : =".$row[2];
		    }
		else{ 
			  echo "Invalid Credential By the Student Roll no ".$uname;
			echo "<a href=./slogin.html>Goto home</a>";
			}
         }
?>
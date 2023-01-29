<?php
	// Opening a file:
	$myfile = fopen("textfile 1.txt", "r") or die("Unable to open file!");

	// reading the entire file using fread() function:
	$content = fread($myfile, filesize("textfile 1.txt"));  

	// Displaying the content:   
	echo $content;

	// closing the file:
	fclose($myfile);
?>

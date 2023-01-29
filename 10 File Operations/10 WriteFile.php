<?php

$file_name = 'textfile 2.txt';

//opens the file.txt file or implicitly creates the file:
$myfile = fopen($file_name, 'w') or die('Cannot open file: '.$file_name); 
$movie_name = "Die Another Day\n";

// write name to the file:
fwrite($myfile, $movie_name);

// lets write another movie name to our file:
$movie_name = "No Time To Die\n";
fwrite($myfile, $movie_name);

// close the file:
fclose($myfile);
?>

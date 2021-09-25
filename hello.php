<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$name=$_POST['name'];
		echo 'Xin chào bạn ';
		echo $name;
        echo ' ,email của bạn là ';
        echo $email;	
	}
?>

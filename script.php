<?php
	if(isset($_POST['submit'])){
		$bridge=mysqli_connect('localhost','root','','exten');
	$name=$bridge->real_escape_string($_POST['uname']);
	$email=$bridge->real_escape_string($_POST['uemail']);
	/*var_dump($email);*/
	$query="INSERT INTO info (name,email) VALUES ('$name','$email')";

	if($bridge->query($query)){
		echo 'Added';		
	}
		echo 'Success';
/*		die();*/
	}
	
	
?>

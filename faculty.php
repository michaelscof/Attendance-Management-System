<?php
include_once 'dbconnect.php';
if(isset($_POST['register'])){
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
    $query="INSERT INTO faculty(email,password) VALUES('$email','$password')";
	$result=$conn->query($query);
	if($result==True){
		echo 'added successfully';
	}
else
	echo 'hello';
}
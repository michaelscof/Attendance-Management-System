<?php
include_once 'dbconnect.php';
if(isset($_POST['Teacher'])){
	$name=trim($_POST['Name']);
	$gender=trim($_POST['Gender']);
	$Designation=trim($_POST['Designation']);
	$T_ID=trim($_POST['T_ID']);
	$password=trim($_POST['Password']);
	// $C_password=trim($_POST['ConfirmPassword']);

    $query="INSERT INTO teacher(T_ID,Name,Gender,Designation,Password)VALUES('$T_ID','$name','$gender','$Designation','$password')";
	$result=$conn->query($query);
	if($result==True){
		header("Location: AdminPage.php");
	}
else
		echo header("Location: home.php");
}
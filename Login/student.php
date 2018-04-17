<?php
include_once 'dbconnect.php';
if(isset($_POST['Student'])){
	
	$RegNo=trim($_POST['RegNo']);
	$name=trim($_POST['Name']);
	$course=trim($_POST['Course']);
	$branch=trim($_POST['Branch']);
	$gender=trim($_POST['Gender']);
	$email=trim($_POST['Email']);
	$sem=trim($_POST['Sem']);
 	

$query="INSERT INTO stud(RegNo,name,course,branch,gender,email,sem)
VALUES('$RegNo','$name','$course','$branch','$gender','$email','$sem')";
	
	$result=$conn->query($query);
	if($result==True){
		header("Location: AdminPage.html");
	}
else
	echo 'hello';
}
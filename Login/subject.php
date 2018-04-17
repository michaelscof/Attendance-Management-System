<?php
include_once 'dbconnect.php';
if(isset($_POST['Subject'])){
	$name=trim($_POST['Name']);
	$code=trim($_POST['S_code']);
	$sem=trim($_POST['Sem']);
	$course=trim($_POST['Course']);
	$t_name=trim($_POST['TeacherName']);
	$designation=trim($_POST['Designation']);


    $query="INSERT INTO subject(Name,S_Code,Sem,Course,TeacherName,Designation )
    VALUES('$name','$code','$sem','$course','$t_name','$designation')";
	$result=$conn->query($query);
	if($result==True){
		header("Location: AdminPage.html");
	}
else
	echo 'hello';
}
<?php
include_once 'dbconnect.php';
 $Reg=$_GET['id'];	
 /*echo $Reg;
 echo "<br/>";*/
  $query = "SELECT course FROM stud where RegNo='$Reg'";
  $result=$conn->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$Course=$row['course'];
    }
   }
  	if($Course=='Mca')
  	{
  		$query = "SELECT * FROM mca where RegNo='$Reg'";
  		$result=$conn->query($query);
  		if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    		$Present=$row['Present'];
    		$Total=$row['Total'];
    	}
	}
	$Present=$Present+1;
	$Total=$Total+1;
	echo $Present;
	echo "<br/>";
	$query="Update mca set Present='$Present' where RegNo='$Reg'";
	$result=$conn->query($query);
	session_start();
	$_SESSION['Course']=$Course;
	echo $_SESSION['Course'];
	echo "<br/>";
	header("Location:facultyprofile.php");
  	}
 ?>
         
<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    // $password = $_POST['password'];
    // echo $Name;
    // $password = hash('sha256', $upass); // password hashing using SHA256

    // $query="SELECT * FROM `faculty` WHERE `email`='$email' ";
    // $result=$conn->query($query);
    // if ($result->num_rows > 0) {
    // // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     if($row['password']==$password){
    //         header("Location: facultyprofile.html");
    //     }
    // }
    if($course=='Mca'){
    	header("Location: Mca.php");
    }
    else if($course=='Btech_CSE') {
    header("Location: Btech_CSE.php");
    }
    else if($course=='Btech_IT'){
    header("Location: Btech_IT.php");	
    }
}
?>
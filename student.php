<?php
include_once 'dbconnect.php';
if (isset($_POST['slogin'])) {
    $RegNo = $_POST['RegNo'];
    $Password = $_POST['Password'];
    $query="SELECT * FROM `stud` WHERE `RegNo`='$RegNo' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($Password==$RegNo){
            session_start();
            $_SESSION['RegNo']=$RegNo;
            header("Location: studentprof.php");
        }
    }
} else {
    $message='Wrong Credentials';
    
    echo "<script type='text/javascript'>alert('$message');</script>";
   
}
 //header("Location: home.php");
}
?>

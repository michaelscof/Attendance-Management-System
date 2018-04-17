<?php
include_once 'dbconnect.php';
if (isset($_POST['tlogin'])) {
    $T_ID = $_POST['T_ID'];
    $password = $_POST['password'];
    $query="SELECT * FROM `teacher` WHERE `T_ID`='$T_ID' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row['Password']==$password){
            session_start();
            $_SESSION['T_ID']=$T_ID;
            header("Location: facultyprofile.php");
        }
        else
        {
            header("Location: home.php");
        }
    }
} else {
     echo "WRONG CREDENTIALS";
     header("Location: home.php");
     echo "WRONG CREDENTIALS";
}   
}
?>

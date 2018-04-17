<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    // echo $Name;
    // $password = hash('sha256', $upass); // password hashing using SHA256

    $query="SELECT * FROM `faculty` WHERE `email`='$email' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['email']==$email){
            $query="UPDATE faculty SET password='$new_password'";
            $result=$conn->query($query);
            if($result){
                echo 'password updated';
            }
        }
    }
} else {
    echo "0 results";
}
    
}
?>
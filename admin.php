<?php
include_once 'dbconnect.php';
if (isset($_POST['login'])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    // echo $Name;
    // $password = hash('sha256', $upass); // password hashing using SHA256

    $query="SELECT * FROM `Admin1` WHERE `UserName`='$UserName' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row['Password']==$Password){
            header("Location: Login/AdminPage.php");
        }
        else {
    header("Location:home.php");}
    }
}
    
}
?>

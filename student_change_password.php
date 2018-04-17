<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $RegNo = $_POST['RegNo'];
    // echo $Name;
    // $password = hash('sha256', $upass); // password hashing using SHA256

    $query="SELECT * FROM `stud` WHERE `RegNo`='$RegNo' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['RegNo']==$ReNo){
            $query="UPDATE faculty SET name='$name'";
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
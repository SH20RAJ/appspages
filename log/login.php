<?php
include '../conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM ap_users WHERE password = '".$password."' AND username = '".$username."'";

$result = mysqli_num_rows(mysqli_query($conn,$sql));
if($result){
    $_SESSION['user']=$username;
    echo "Logged in Succesfully";
    header('location:../');
} else {
    echo "No";
    header('location:../log?error=InvalidDeteils');
}

?>
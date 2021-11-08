<?php
session_start();
include_once '../conn.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM ap_users WHERE password = '".$password."' AND username = '".$username."'";

$result = mysqli_num_rows(mysqli_query($conn,$sql));
if($result){
    $_SESSION['username'] = $username ;
    header('location:../');
} else {
    header('location:../log?error=Invalid Deteils !');
}

?>
<?php
include '../conn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$user = "";
$sql = "SELECT * FROM ap_users WHERE password = '".$password."' AND email = '".$email."' LIMIT 1";

$result = mysqli_num_rows(mysqli_query($conn,$sql));
$row = mysqli_fetch_array(mysqli_query($conn,$sql));
print_r($row);
if($result == 1){
    $_SESSION['email']=$row['email'];
    $_SESSION['user']=$row['username'];
    $_SESSION['id']=$row['ur_id'];
    echo "Logged in Succesfully";
    header('location:../');
} else {
    echo "No";
    header('location:../log?error=InvalidDetails');
}

?>
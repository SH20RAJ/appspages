<?php
include '../conn.php';

$user = uniqid();
$name = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$bio = "";
$website = "";
$logo = "";

$sql = "INSERT INTO `ap_users` (`ur_id`, `username`, `password`, `ur_name`, `email`, `ur_bio`, `ur_website`, `ur_time`, `ur_logo`) 
VALUES (NULL, '".$user."', '".$pass."', '".$name."', '".$email."', '".$bio."', '".$website."', current_timestamp(), '".$logo."');";

if(mysqli_query($conn,$sql)){
    echo "User Registered!";
}


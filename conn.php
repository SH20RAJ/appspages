<?php
session_start();

$conn = mysqli_connect('remotemysql.com','QaHBRkrLkM','fBL0a9PGLH','QaHBRkrLkM');
//$conn = mysqli_connect('localhost','shr','deep','appspages');

$sitename = "AppsPages";
$siteurl = "";


if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $loggedin = true;
} else {
    $loggedin = false;
}

?>
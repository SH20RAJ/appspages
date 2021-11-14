<?php
session_start();

//$conn = mysqli_connect('remotemysql.com','QaHBRkrLkM','fBL0a9PGLH','QaHBRkrLkM');
$conn = mysqli_connect('localhost','shr','deep','appspages');

$sitename = "AppsPages";
$siteurl = "";


if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $loggedin = true;
} else {
    $loggedin = false;
}

?>
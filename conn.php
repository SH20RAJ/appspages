<?php
session_start();

$conn = mysqli_connect('remotemysql.com','QaHBRkrLkM','fBL0a9PGLH','QaHBRkrLkM');
//$conn = mysqli_connect('localhost','shr','deep','appspages');

$sitename = "BooksD - Books Pdf Downloading.....";
$siteurl = "http://localhost/booksd/";


if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $loggedin = true;
} else {
    $loggedin = false;
}

?>
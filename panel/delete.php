<?php
include "../conn.php";
$sql = "DELETE FROM ap_apks WHERE ap_apks.ap_id = ".$_GET['id']." and user = ".$_SESSION['id']."";

if(mysqli_query($conn,$sql)){
    echo "Data deleted Successfully";
} else {
    echo "Something Wents Wrong!";
}

?>
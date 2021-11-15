<?php
include '../conn.php';

if(isset($_SESSION['id'])){
  echo "Done";
}else{
  echo "Not Done";
  header('location:index.html');
}

$ap_name = $_POST["ap_name"];
$ap_uploader = $_SESSION['id'];
$ap_custom_html="";
$package=$_POST['package'];
$screenshots = str_replace("\n", "|", $_POST["ap_screenshots"]);
$sql = "INSERT INTO ap_apks (ap_id, ap_name, apk_link, ap_logo_url, ap_featured, 
ap_screenshots, ap_description, ap_tag, ap_version, user,
 ap_timestamp, ap_youtube, ap_website, 
ap_custom_html, ap_likes, ap_dislikes, ap_hearts, ap_size) 
VALUES (NULL, 
'".$ap_name."', 
'".$_POST["ap_link"]."',
'".$_POST["ap_logo"]."', 
'".$_POST["ap_featured"]."', 
'".$screenshots."', 
'".$_POST["ap_description"]."',
'".$_POST["ap_tag"]."', 
'".$_POST["ap_version"]."', 
'".$ap_uploader."',
current_timestamp(), 
'".$_POST["ap_youtube"]."', 
'".$_POST["ap_website"]."',
'".$ap_custom_html."',
'0','0','0', 
'".$_POST["ap_size"]."')";
echo $sql;


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 
  //header('location:index.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  $conn->close();

?>
<?php
include '../conn.php';
$id = $_GET['id'];
$sql = 'select * from ap_apks where ap_id = '.$id.' and user = '.$_SESSION["id"].'';

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) ;

if(isset($_POST['ap_name'])){
    $ap_name = $_POST["ap_name"];
    $ap_uploader = $_SESSION['id'];
    $ap_custom_html="";
    $package = $_POST['package'];
    $screenshots = str_replace("\n", "|", $_POST["ap_screenshots"]);
    $sql2 = "UPDATE ap_apks SET 
    ap_name ='".$ap_name."', 
    apk_link =  '".$_POST["ap_link"]."', 
    ap_logo_url = '".$_POST["ap_logo"]."' , 
    ap_featured = '".$_POST["ap_featured"]."' , 
    ap_screenshots = '".$screenshots."' , 
    ap_description =  '".str_replace("'", "`",$_POST["ap_description"] )."', 
    ap_tag = '".$_POST["ap_tag"]."' , ap_version = '".$_POST["ap_version"]."' , 
    user = '".$ap_uploader."' ,
    ap_timestamp = current_timestamp() , 
    ap_youtube = '".$_POST["ap_youtube"]."' , 
    ap_website =  '".$_POST["ap_website"]."', 
    ap_custom_html = '".$ap_custom_html."' , 
    ap_likes =  '0' , ap_dislikes = '0' , ap_hearts = '0' ,
    ap_size='".$_POST["ap_size"]."', package = '". $package."'
    WHERE ap_id = ".$id."
    ";
    if ($conn->query($sql2) === TRUE) {
        echo "Updated successfully";
       
        //header('location:index.html');
      } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
      }



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Your App - AppsPages</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../submit/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../submit/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../submit/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../submit/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../submit/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../submit/css/util.css">
	<link rel="stylesheet" type="text/css" href="../submit/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100" style="background-image: url('../submit/images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="">
				<span class="contact100-form-title">
					<?php  
                    include "../log/loginrequired.php";
					if(!isset($_SESSION['user'])){
						echo "Login to Edit Your App";
						}else{
						echo " Edit Your App - ".$_SESSION['user'];
						} ?>
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">App name *</span>
					<input class="input100" type="text" name="ap_name" value="<?php echo $row['ap_name'] ?>" placeholder="Enter your app name">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Enter package name *</span>
					<input  value="<?php echo $row['package'] ?>"  class="input100" type="text" name="package" placeholder="org.mozilla.firefox">
				</div>
				

				<!--<h5 style="display: block;">URL's</h5>-->

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">App Logo URL *</span>
					<input  value="<?php echo $row['ap_logo_url'] ?>"  class="input100" type="text" name="ap_logo" placeholder="https://i.imgur.com/pm4alC9.png">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">App Featured Image * </span>
					<input  value="<?php echo $row['ap_featured'] ?>"  class="input100" type="text" name="ap_featured" placeholder="i.e. : https://i.imgur.com/pm4alC9.png">
				</div>


				<div class="wrap-input100">
					<span class="label-input100">Enter App Download URL</span> | 
					<a target="_blank" rel="dofollow" style="text-decoration:underline;" href="https://codexdindia.blogspot.com/2021/11/free-unlimited-file-hosting-video-hosting-on-siasky-net.html">
						Get Free Hosting
					</a>
					<input  value="<?php echo $row['apk_link'] ?>"  class="input100" type="text" name="ap_link" placeholder="https://drive.google.com/my-app">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Description is required">
					<span class="label-input100">Description</span>
					<textarea class="input100" name="ap_description" placeholder="Put the description here..."
                    ><?php echo $row['ap_description']  ?> </textarea>
				</div>

				<!--Other Details Here-->
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">App Version *</span>
					<input value="<?php echo $row['ap_version'] ?>" class="input100" type="text" name="ap_version" placeholder="1.0">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">App Category * </span>
					<input value="<?php echo $row['ap_tag'] ?>" class="input100" type="text" name="ap_tag" placeholder="Communication">
				</div>

				<!--Other Necessary-->
				<div class="wrap-input100 validate-input" data-validate = "Description is required">
					<span class="label-input100">Screenshots * (Seperate using line breaks)</span>
					<textarea class="input100" name="ap_screenshots" placeholder="https://i.imgur.com/IORqLPK.jpg
https://i.imgur.com/zBTIHbX.jpg
https://i.imgur.com/DLMqYn3.jpg
https://i.imgur.com/QfLxm5q.jpg"><?php echo str_replace("|", "\n", $row['ap_screenshots']);?></textarea>
				</div>

				<!--Other Details Here-->
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Size is required">
					<span class="label-input100">App Size * (In MegaBytes)</span>
					<input value="<?php echo $row['ap_size'] ?>" class="input100" type="text" name="ap_size" placeholder="73.2">
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Website Reference </span>
					<input value="<?php echo $row['ap_website'] ?>" class="input100" type="text" name="ap_website" placeholder="https://">
				</div>
				<div class="wrap-input100">
					<span class="label-input100">YouTube Reference </span>
					<input value="<?php echo $row['ap_youtube'] ?>" class="input100" type="text" name="ap_youtube" placeholder="https://www.youtube.com/watch?v=x74zbmggC-I">
				</div>


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>

		<span class="contact100-more">
				AppsPages - <a href="../">Home</a>
		</span>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../submit/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../submit/bootstrap/js/popper.js"></script>
	<script src="../submit/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../submit/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../submit/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

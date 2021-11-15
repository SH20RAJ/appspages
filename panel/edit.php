<?php
include '../conn.php';
$id = $_GET['id'];
echo $sql = 'select * from ap_apks where ap_id = '.$id.' and user = '.$_SESSION["id"].'';

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Upload Your App - AppsPages</title>
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
						echo "Login to Upload Your App";
						}else{
						echo " Upload Your App - ".$_SESSION['user'];
						} ?>
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">App name *</span>
					<input class="input100" type="text" name="ap_name" value="<?php echo $row['ap_name'] ?>" placeholder="Enter your app name">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Enter pakage name *</span>
					<input  value="<?php echo $row['ap_pakage'] ?>"  class="input100" type="text" name="ap_pakage" placeholder="org.mozilla.firefox">
				</div>
				

				<!--<h5 style="display: block;">URL's</h5>-->

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">App Logo URL *</span>
					<input  value="<?php echo $row['ap_logo'] ?>"  class="input100" type="text" name="ap_logo" placeholder="https://i.imgur.com/pm4alC9.png">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">App Featured Image * </span>
					<input class="input100" type="text" name="ap_featured" placeholder="i.e. : https://i.imgur.com/pm4alC9.png">
				</div>


				<div class="wrap-input100">
					<span class="label-input100">Enter App Download URL</span> | 
					<a target="_blank" rel="dofollow" style="text-decoration:underline;" href="https://codexdindia.blogspot.com/2021/11/free-unlimited-file-hosting-video-hosting-on-siasky-net.html">
						Get Free Hosting
					</a>
					<input class="input100" type="text" name="ap_link" placeholder="https://drive.google.com/my-app">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Description is required">
					<span class="label-input100">Description</span>
					<textarea class="input100" name="ap_description" placeholder="Put the description here..."></textarea>
				</div>

				<!--Other Details Here-->
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">App Version *</span>
					<input class="input100" type="text" name="ap_version" placeholder="1.0">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">App Category * </span>
					<input class="input100" type="text" name="ap_tag" placeholder="Communication">
				</div>

				<!--Other Necessary-->
				<div class="wrap-input100 validate-input" data-validate = "Description is required">
					<span class="label-input100">Screenshots * (Seperate using line breaks)</span>
					<textarea class="input100" name="ap_screenshots" placeholder="https://i.imgur.com/IORqLPK.jpg
https://i.imgur.com/zBTIHbX.jpg
https://i.imgur.com/DLMqYn3.jpg
https://i.imgur.com/QfLxm5q.jpg"></textarea>
				</div>

				<!--Other Details Here-->
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Size is required">
					<span class="label-input100">App Size * (In MegaBytes)</span>
					<input class="input100" type="text" name="ap_size" placeholder="73.2">
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Website Reference </span>
					<input class="input100" type="text" name="ap_website" placeholder="https://">
				</div>
				<div class="wrap-input100">
					<span class="label-input100">YouTube Reference </span>
					<input class="input100" type="text" name="ap_youtube" placeholder="https://www.youtube.com/watch?v=x74zbmggC-I">
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

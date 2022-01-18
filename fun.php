<!DOCTYPE html>
<html>


<?php
$id = uniqid();
echo '<meta property="og:title" content="Here is your Avtar Image - You are a Doctor" />
<meta property="og:description" content="Here is your Avtar Image..." />
<meta property="og:image" content="https://avatars.dicebear.com/api/adventurer/'.$id.'.png"/>

?>
<body>
<?php
<img src="https://avatars.dicebear.com/api/adventurer/'.$id.'.png"/>';
//header("Location: https://avatars.dicebear.com/api/adventurer/".$id.".svg");
  ?>
</body>
</html>


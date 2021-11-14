<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Apps - AppsPages</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br><br>
    <h2>Your Apps - AppsPages</h2>
    <hr><br><br>
<?php
include "../conn.php";
include "../log/loginrequired.php";

$sql = "SELECT * FROM ap_apks where user = ".$_SESSION['id']."";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row" style="text-align:center;">';
    while($row = $result->fetch_array()) {
      echo '

<div class="col-sm-4">
<div class="card" style="max-width: 18rem;min-width: 18rem;">
  <img class="card-img-top" src="'.$row['ap_featured'].'" alt="'.$row['ap_name'].'">
  <div class="card-body">
    <h5 class="card-title">'.$row['ap_name'].'</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-danger">Delete</a>
  </div>
</div>
</div>

        ';
  }
  echo "</div>";
 } else {
 echo "0 results found !!!!! ";
  }






?>


</div>
</body>
</html>
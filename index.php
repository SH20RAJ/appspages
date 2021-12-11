<!--<?php
include "conn.php";


?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appspages - Free Apps Landing Pages - Share, Upload, Download</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    
</head>
<body>
  <script src="assets/autotopbar.js"></script>
<div class="container" style="text-align:center;">
    <header>
        <?php include "assets/header.php" ?>
        <script src='assets/jquery.min.js'></script>
        <script src='assets/bootstrap.min.js'></script>
        <script  src="assets/nav/script.js"></script>
    </header>
    <hr>

<section class="recent"><br>
        <h5>Top Apps by Users Globally</h5><hr><br>
        
<?php
$sql = "SELECT * FROM ap_apks ORDER BY ap_views desc limit 100";
$result = $conn->query($sql); 

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row">';
    while($row = $result->fetch_array()) {
      echo '

<div class="col-sm-4" style="text-align:center;">
<div class="card" style="max-width: 18rem;min-width: 18rem;">
  <img class="card-img-top" src="'.$row['ap_featured'].'" alt="'.$row['ap_name'].'">
  <div class="card-body">
    <h5 class="card-title">'.$row['ap_name'].'</h5>
    <p class="card-text"></p>
    <a href="apk/'.$row['ap_id'].'" class="btn btn-success">Install</a>
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
        
    </section>
    <section class="recent" style="text-align:center;"><br>
      <h5>Recent Apps by Users Globally</h5><hr><br>
            
    <?php
    $sql = "SELECT * FROM ap_apks ORDER BY ap_id desc limit 100";
    $result = $conn->query($sql); 

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="row">';
        while($row = $result->fetch_array()) {
          echo '

    <div class="col-sm-4">
    <div class="card" style="max-width: 18rem;min-width: 18rem;">
      <img class="card-img-top" src="'.$row['ap_featured'].'" alt="'.$row['ap_name'].'">
      <div class="card-body">
        <h5 class="card-title">'.$row['ap_name'].'</h5>
        <p class="card-text"></p>
        <a href="apk/'.$row['ap_id'].'" class="btn btn-success">Install</a>
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
            
    </section>

    

</div>    
<div class="text">

</div>

<?php include "assets/footer.html"?>

</body>
</html>

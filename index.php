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
</head>
<body>
<div class="container2">
    <header>
        <?php include "assets/header.php" ?>
        <script src='assets/jquery.min.js'></script>
        <script src='assets/bootstrap.min.js'></script>
        <script  src="assets/nav/script.js"></script>
    </header>
    <hr>
    <section class="recent">
        <h5>Recent Apps</h5>
        
<?php
$sql = "SELECT * FROM ap_apks ORDER BY ap_id desc";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
      echo '<div class="apks">
      <div class="logo">
      <img src="'.$row['ap_featured'].'"> </div>
      <div class="ap_name">'.$row['ap_name'].'</div>
            
        </div>
        ';
  }
 } else {
 echo "0 results found !!!!! ";
  }?>
        
    </section>

</div>    
<div class="text">

</div>

<?php include "assets/footer.html"?>
</body>
</html>
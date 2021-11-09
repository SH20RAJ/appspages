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
<div class="container">
    <header>
        <?php include "assets/header.php" ?>
        <script src='assets/jquery.min.js'></script>
        <script src='assets/bootstrap.min.js'></script>
        <script  src="assets/nav/script.js"></script>
    </header>
    <hr>
    <section class="recent">
        <h5>Recent Apps</h5>
        <div class="apks">
            <div class="apk">

            </div>
            
        </div>
        <div class="apks">
            <div class="apk">

            </div>
            
        </div>
        <div class="apks">
            <div class="apk">

            </div>
            
        </div>
        <div class="apks">
            <div class="apk">

            </div>
            
        </div>
        <div class="apks">
            <div class="apk">

            </div>
            
        </div>
    </section>

</div>    
<div class="text">
<?php
$sql = "SELECT * FROM ap_apks ORDER BY ap_id desc";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
      echo $row['ap_name'];
  }
 } else {
 echo "0 results found !!!!! ";
  }?>
</div>

<?php include "assets/footer.html"?>
</body>
</html>
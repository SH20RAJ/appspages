<?php
include 'conn.php';
$id = $_GET['id'];
$sql = 'select * from ap_apks where ap_id = '.$id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['ap_name'] ?> Apk Download | AppsPages</title>
    <link rel="stylesheet" href="../assets/bttn.css">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/appview.css">
    <link rel="stylesheet" href="../assets/index.css">

    <link rel="shortcut icon" href="<?php echo $row['ap_logo_url'] ?>" type="image/x-icon">
</head>
<body>
<div class="container">
    <header>
        <h4>Appspages</h4>
        <div class="links">
            <a href="log/">Log</a>
            <a href="submit/">Submit APK</a>
        </div>
    </header>

    <br><br>
    <div class="logo">
        <img src="<?php echo $row['ap_logo_url'] ?>" alt="" srcset="">
    </div><br><br>

    <div class="title">
        <?php echo $row['ap_name'] ?>
    </div>
    <br>
    <div class="uploader center"><a href="../tag/<?php echo $row['ap_uploader']?>"><?php echo $row['ap_uploader']?></a></div>
    <br><br>

    <div class="download">
    <button class="bttn-pill bttn-block bttn-primary">DOWNLOAD ( <?php echo $row['ap_size'] ?>mb )</button>
    </div>

<br><br>
<p class="details">
  <a class="bttn-material-flat bttn-md bttn-primary" onclick="document.querySelector('#desc').classList.toggle('show')" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Show Description 
  </a>
  <a class="bttn-float bttn-md bttn-primary" >
     Version : <?php echo $row['ap_version']?>
  </a>
  <?php  ?>
  <a class="bttn-float bttn-md bttn-primary" >
     Version : <?php echo $row['ap_version']?>
  </a>
</p>
<div class="collapse" id="desc">
  <div class="card card-body">

<div class="description">
    <?php echo nl2br($row['ap_description'])?>
    </div>

  </div>
</div>

    <br><br>
    <div class="screenshots">
        <h3>Screenshots </h3>
        <pre class="sccon">
        <?php 
        $sc = explode('|', $row['ap_screenshots']);

        for($x = 0; $x < count($sc); $x++) {
        echo "<img class='screenshot' src='".$sc[$x]."'>";
        }
        ?>
        </pre>
    </div>
    <br><br>


    <div id="share">

    </div>



</div>    
</body>
</html>
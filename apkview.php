<?php
include 'conn.php';
$id = $_GET['id'];
$sql = 'select * from ap_apks where ap_id = '.$id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) ;

?>

<?php
//Counting Views
$views = $row['ap_views']+1;
$viewsql = "UPDATE ap_apks SET ap_views = ".$views." where ap_id = ".$id."";
mysqli_query($conn,$viewsql);
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
    <link rel="shortcut icon" href="<?php echo $row['ap_logo_url'] ?>" type="image/x-icon">
    <meta name="description" 
content="<?php echo nl2br($row['ap_description'])?>">
<meta property="og:title" content="<?php echo $row['ap_name'] ?>" />
<meta property="og:description" content="<?php echo nl2br($row['ap_description'])?>" />
<meta property="og:image" content="<?php echo $row['ap_featured'] ?>" />
    
</head>

<body>
<script src="../assets/autotopbar.js"></script>
<header>
<h4 class="bttn-material-flat bttn-md bttn-primary" style="color:aqua;background:rgb(2, 83, 107);">
<span style="color:hotpink">Apps</span>pages
</h4>
    <div class="links">
        <a class="bttn-material-flat bttn-md bttn-primary" href="../log/">Log</a>
        <a class="bttn-material-flat bttn-md bttn-primary" href="../submit/">Submit APK</a>
    </div>
</header>
    <div class="container">
        

        <br><br>
        <div class="logo">
            <img src="<?php echo $row['ap_logo_url'] ?>" alt="" srcset="">
        </div><br><br>

        <div class="title">
            <?php echo $row['ap_name'] ?>
        </div>
        <br>
        <div class="uploader center"><a
                href="../user/<?php echo $row['user']?>"><?php 
                $sql3 = "SELECT * FROM ap_users where ur_id =".$row['user']."";
                $result3 = mysqli_query($conn,$sql3);
                $row3 = mysqli_fetch_array($result3);
                echo $row3['username'];
                
                ?></a></div>
        <br><br>

        <div class="download">
            <a href="<?php echo $row['apk_link'] ?>"><button class="bttn-pill bttn-block bttn-primary">DOWNLOAD ( <?php echo $row['ap_size'] ?>mb )</button></a>
        </div>

        <br><br>
        <p class="details">
            <a class="bttn-material-flat bttn-md bttn-primary"
                onclick="document.querySelector('#desc').classList.toggle('show')" data-toggle="collapse"
                href="#desc" role="button" aria-expanded="false" aria-controls="collapseExample">
                Show Description
            </a>
            <a class="bttn-float bttn-md bttn-primary">
                Version : <?php echo $row['ap_version']?>
            </a>
            <a class="bttn-material-flat bttn-md bttn-primary"
                onclick="document.querySelector('#ss').classList.toggle('show')" data-toggle="collapse"
                href="#ss" role="button" aria-expanded="false" aria-controls="collapseExample">
                Screenshots
            </a>
            <a class="bttn-float bttn-md bttn-primary">
                Views : <?php echo $row['ap_views']?>
            </a>
            <a class="bttn-jelly bttn-md bttn-primary" style="border-radius:4px;">
                <?php echo $row['ap_tag']?>
            </a>

        </p>
        
        <div class="fi">
            <img src="<?php echo $row['ap_featured']?>" alt="" srcset="">
        </div>

        <div class="collapse" id="desc">
            <div class="card card-body">

                <div class="description">
                    <?php echo nl2br($row['ap_description'])?>
                </div>
            </div>
        </div>
        


                <br><br>
                <div class="screenshots collapse card card-body" id="ss">
                    
                    <pre class="sscon"><?php $sc = explode('|', $row['ap_screenshots']);for($x = 0; $x < count($sc); $x++) {echo "<img class='screenshot' src='".$sc[$x]."'>";}?>
                    </pre>
                </div>
                <br><br>


                <div id="share">

                </div>



</div>  
<div class="footer">
    <a class="a" href="../">@AppsPages</a>

    <!-- ShareThis BEGIN --><div class="sharethis-inline-reaction-buttons"></div><!-- ShareThis END -->

</div>      
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=619204ca557e30001202fd90&product=sop' async='async'></script>   

</body>

</html>


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'><link rel="stylesheet" href="./style.css">

<!-- partial:index.partial.html -->
<!--

BootStrap NavBar Example Three - Social Media Icons
 //
1. Replaced the ugly toggle with angle
2. Used hover only for large screen and above
3. You can add resize function if you want in javascript
4. SlideIn / SlideUp can be replaced with FadeIn /FadeUp
5. Delay on leaving mouse is applied to ensure the hover actions are not jittery.
//
-->


<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
<div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">
<span class="ml-3 font-weight-bold">APPSPAGES</apan>
</a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbar4">
<ul class="navbar-nav mr-auto pl-lg-4">
<li class="nav-item px-lg-2 active"> <a class="nav-link" href=""> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a> </li>
<li class="nav-item px-lg-2"> <a class="nav-link" href="submit/"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Submit</a> </li>


<li class="nav-item px-lg-2"> <a class="nav-link" href="contact/"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li>


<?php
if(isset($_SESSION['user'])){
  echo '
  
<li class="nav-item px-lg-2 dropdown d-menu">
<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>
'.$_SESSION['user'].'
</a>
<div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
<a class="dropdown-item" href="profile/">Profile</a>
<a class="dropdown-item" href="panel/">Panel</a>
<a class="dropdown-item" href="log/">Switch Account</a>
<a class="dropdown-item" href="log/logout.php">Logout</a>
</div>
</li>
  
  ';
} else {
  echo '<li class="nav-item px-lg-2"> <a class="nav-link" href="log/">
  <span class="d-inline-block d-lg-none icon-width">
    <i class="far fa-envelope"></i>
  </span>Log
</a> 
</li>';
}

?>



</ul>
<ul class="navbar-nav ml-auto mt-3 mt-lg-0">
<li class="nav-item"> <a class="nav-link" href="#">
  <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">
<i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
</a> </li>
<li class="nav-item"> <a class="nav-link" href="#">
<i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
</a> </li>
  <li class="nav-item"> <a class="nav-link" href="#">
<i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
</a> </li>
</ul>
</div>
</div>
</nav>

<!--The html below this line is for display purpose only-->

<!-- partial -->


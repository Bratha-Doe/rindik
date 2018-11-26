<?php
session_start();
if(!isset($_SESSION['username-rindik']) and !isset($_SESSION['password-rindik']) ){
  header('location:login/login.php');
}else{
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="msapplication-tap-highlight" content="no">
<title>Rindik Bali - Administrator</title>
<!-- CORE CSS-->
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
<link rel="stylesheet" href="css/master.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<!-- JS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


</head>
<body>
<!-- START HEADER -->
<header id="header" class="page-topbar">
<div class="navbar-fixed">
  <nav class="white">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo brand-logo-di-admin">Rindik Bali</a>
      <ul class="right">
        <li><a href="login/logout.php" class="log-out">Logout <i class="fa fa-sign-out right modal-trigger"></i></a></li>
      </ul>
    </div>
  </nav>
</div>
</header>
<!-- END HEADER -->

<!-- START MAIN -->
<div id="main">
<!-- START WRAPPER -->
  <div class="wrapper">
  <!-- START LEFT SIDEBAR NAV-->
  <aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation" style="overflow">
      <li class="user-details" style="height:140px;">
        <!-- PROFIL -->
        <div class="row" style="padding-top:25px;">
        <div class="col col s4 m4 l4" style="margin-top:7px;">
          <img src="images/avatar.png" alt="" class="circle responsive-img valign profile-image">
        </div>
        <div class="col col s8 m8 l8">
          <p class="white-text profile-btn">Rindik Bali</i></p>
          <p class="user-roal">Administrator</p>
        </div>
        </div>
      </li>
        <!-- END PROFIL -->
        <!-- DASHBOARD -->
        <li class="bold"><a href="?show=home" class="waves-effect"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
        <li class="bold"><a href="?show=slider" class="waves-effect"><i class="fa fa-columns"></i> Slider</a></li>
        <li class="bold"><a href="?show=about" class="waves-effect"><i class="fa fa-pencil"></i> About</a></li>
        <li class="bold"><a href="?show=berita" class="waves-effect"><i class="fa fa-newspaper-o"></i> Berita</a></li>
        <li class="bold"><a href="?show=galeri" class="waves-effect"><i class="fa fa-photo"></i> Galeri</a></li>
        <li class="bold"><a href="?show=agenda" class="waves-effect"><i class="fa fa-calendar"></i> Agenda</a></li>
        <li class="bold"><a href="?show=video" class="waves-effect"><i class="fa fa-play"></i> Video</a></li>

    </ul>

    </aside>
    <!-- END LEFT SIDEBAR NAV-->

    <!-- Link Ke Content.php di sini -->
    <?php
      include ("content/content.php")
    ?>
    <br><br>

    </div>
</div>

<!-- datepicker -->
<script type="text/javascript">
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
</script>




</body>


<?php
}
 ?>
</html>

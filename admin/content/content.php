<?php
if(isset($_GET['show'])){
  $show=$_GET['show'];
}else{
  $show = "home";
}

if($show == "home") {
  include ("content/home.php");
}else if($show == "about") {
  include ("content/about.php");
}else if($show == "berita") {
  include ("content/berita.php");
}else if($show == "galeri") {
  include ("content/galeri.php");
}else if($show == "agenda") {
  include ("content/agenda.php");
}else if($show == "video") {
  include ("content/video.php");
}else if($show == "slider") {
  include ("content/slider.php");
}

//update
else if($show == "u-about") {
  include ("update/u-about.php");
}else if($show == "u-berita") {
  include ("update/u-berita.php");
}else if($show == "u-galeri") {
  include ("update/u-galeri.php");
}else if($show == "u-agenda") {
  include ("update/u-agenda.php");
}else if($show == "u-slider") {
  include ("update/u-slider.php");
}else if($show == "u-video") {
  include ("update/u-video.php");
}


else {
  echo "Konten tidak ada";
}
 ?>

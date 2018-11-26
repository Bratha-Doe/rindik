<?php
if(isset($_GET['show'])){
  $show=$_GET['show'];
}else{
  $show = "home";
}

if($show == "home") {
  include ("content/home.php");
}else if($show == "post"){
  include ("content/post.php");
}else if($show == "galeri"){
  include ("content/galeri.php");
}else if($show == "agenda"){
  include ("content/agenda.php");
}else if($show == "video"){
  include ("content/video.php");
}else if($show == "galeri-all") {
  include ("content/galeri-all.php");
}

else {
  echo "Konten tidak ada";
}

 ?>

<?php
include"../../db/connection.php";
$video=$_FILES['video']['name'];
$judul=$_POST['judul'];
$lokasi=$_FILES['video']['tmp_name'];
$dir="../images/video/";
$query=mysql_query("INSERT INTO video(video,judul)
  VALUE('$video','$judul')");
  move_uploaded_file($lokasi,"$dir$video");
if($query){
?>
<script type="text/javascript">
  document.location.href="../index.php?show=video";
  alert('Data berhasil di Input');
</script>
<?PHP
?>

  <?php
}else{
  echo "Data tidak masuk";
  echo mysql_error();
}
?>

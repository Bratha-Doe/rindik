<?php
include"../../db/connection.php";
$foto=$_FILES['foto']['name'];;
$judul=$_POST['judul'];
$lokasi=$_FILES['foto']['tmp_name'];
$dir="../images/galeri/";
$query=mysql_query("INSERT INTO galeri(foto,judul)
  VALUE('$foto','$judul')");
  move_uploaded_file($lokasi,"$dir$foto");
if($query){
?>
<script type="text/javascript">
  document.location.href="../index.php?show=galeri";
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

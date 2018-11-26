<?php
include"../../db/connection.php";
$foto=$_FILES['foto']['name'];;
$judul=$_POST['judul'];
$tgl=$_POST['tgl'];
$dess=$_POST['dess'];
$lokasi=$_FILES['foto']['tmp_name'];
$dir="../images/berita/";
$query=mysql_query("INSERT INTO berita(foto,judul,tgl,dess)
  VALUE('$foto','$judul','$tgl','$dess')");
  move_uploaded_file($lokasi,"$dir$foto");
if($query){
?>
<script type="text/javascript">
  document.location.href="../index.php?show=berita";
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

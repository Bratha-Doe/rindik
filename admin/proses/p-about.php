<?php
include"../../db/connection.php";
$foto=$_FILES['foto']['name'];;
$dess=$_POST['dess'];
$lokasi=$_FILES['foto']['tmp_name'];
$dir="../images/about/";
$query=mysql_query("INSERT INTO about(foto,dess)
  VALUE('$foto','$dess')");
  move_uploaded_file($lokasi,"$dir$foto");
if($query){
?>
<script type="text/javascript">
  document.location.href="../index.php?show=about";
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

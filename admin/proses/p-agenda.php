<?php
include"../../db/connection.php";
$judul=$_POST['judul'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
$dess=$_POST['dess'];
$query=mysql_query("INSERT INTO agenda(judul,tgl,bln,thn,dess)
  VALUE('$judul','$tgl','$bln','$thn','$dess')");
if($query){
?>
<script type="text/javascript">
  document.location.href="../index.php?show=agenda";
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

<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

<div class="container">
<div class="row">
  <?php
  include '../db/connection.php';
  $id = $_GET['id'];
  $query=mysql_query("SELECT * FROM agenda where id = '$id'");
  while ($row = mysql_fetch_array($query)) {
   ?>

  <!--form update data-->
  <div class="judul-update">
    <h6>Edit agenda</h6>
  </div>

  <div class="form-update">
    <form class="" action="" method="post" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <div class="input-field col s12">
        <input id="judul" name="judul" type="text" class="validate" value="<?php echo $row['judul'];?>" required>
        <label for="judul">Judul</label>
      </div>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <div class="col s12">
        <p style="color:#9E9E9E;font-size:14px;" >Tanggal :</p>
        <div class="input-field col s4">
          <input id="tanggal" name="tgl" type="number" class="validate" value="<?php echo $row['tgl'];?>" required>
          <label for="tanggal">Tanggal</label>
        </div>
        <div class="input-field col s4">
          <input id="bulan" name="bln" type="number" class="validate" value="<?php echo $row['bln'];?>" required>
          <label for="bulan">Bulan</label>
        </div>
        <div class="input-field col s4">
          <input id="tahun" name="thn" type="number" class="validate" value="<?php echo $row['thn'];?>" required>
          <label for="tahun">Tahun</label>
        </div>
      </div>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <div class="input-field col s12 m12">
        <p style="color:#9E9E9E;font-size:14px;" >Deskripsi :</p>
        <textarea id="text-editor" name="dess" rows="8" cols="80" required placeholder="Deskripsi" class="validate"><?php echo $row['dess'];?></textarea>
        <script type="text/javascript">
         CKEDITOR.replace("text-editor");
        </script>
      </div>

      <div class="btn-form-edit-agenda">
        <button class="btn waves-effect waves-light btn-edit-kirim" type="submit" name="submit" value="Upload">Kirim</button>
        <a href="?show=agenda" class="btn waves-effect waves-light btn-edit-batal">Batal</a>
        <button class="btn waves-effect waves-light btn-edit-hapus" type="submit" name="delete_agenda" onclick="return confirm('Apakah anda yakin?')" value="Delete">Hapus</button>
      </div>

   </form>
  </div>

</div>
</div>

<?php
if(isset($_POST['submit'])){
include "../db/connection.php";
$judul=$_POST['judul'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
$dess=$_POST['dess'];
$query=mysql_query("update agenda set judul='$judul', tgl='$tgl', bln='$bln', thn='$thn', dess='$dess' where  id='$id'");
if($query){
?>
<script type="text/javascript">
  document.location.href="index.php?show=agenda";
  alert('Data berhasil di ubah');
</script>
<?php
}else{
?>
<script type="text/javascript">
   alert('Gagal ubah data');
</script>
<?php
}
}
else if(isset($_POST['delete_agenda'])){
  $query_d_term=mysql_query("DELETE FROM agenda WHERE id='$id'");
  if($query_d_term){
  ?>
  <script>
    location.href='index.php?show=agenda';
    alert('Data berhasil dihapus');
  </script>
  <?php
  }else{
  ?>
  <script type="text/javascript">
     alert('Gagal hapus data');
  </script>
  <?php
  }
}
?>
<?php } ?>

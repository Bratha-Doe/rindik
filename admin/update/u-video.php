<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

<div class="container">
<div class="row">
  <?php
  include '../db/connection.php';
  $id = $_GET['id'];
  $query=mysql_query("SELECT * FROM video where id = '$id'");
  while ($row = mysql_fetch_array($query)) {
   ?>

  <!--form update data-->
  <div class="judul-update">
    <h6>Edit Video</h6>
  </div>

  <div class="form-update">
    <form class="" action="" method="post" enctype="multipart/form-data">

      <div class="col s12">
        <p style="color:#9E9E9E;font-size:14px;" >Masukkan Video :</p>
        <div class="col s2">
         <video src=images/video/<?php echo $row['video']; ?> width="100%">
        </div>
        <div class="col s10">
          <div class="file-field input-field">
            <div class="btn">
              <span>+</span>
              <input name="video" type="file">
            </div>
            <div class="file-path-wrapper isi-form-update">
              <input disabled class="file-path validate" type="text" value="<?php echo $row['video'];?>" id="disabled" placeholder=")* pastikan judul video tidak berisi spasi">
            </div>
          </div>
        </div>
      </div>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <div class="input-field col s12">
        <input id="judul" name="judul" type="text" class="validate" value="<?php echo $row['judul'];?>">
        <label for="judul">Judul</label>
      </div>

      <div class="btn-form-edit-video">
        <button class="btn waves-effect waves-light btn-edit-kirim" type="submit" name="submit" value="Upload">Kirim</button>
        <a href="?show=video" class="btn waves-effect waves-light btn-edit-batal">Batal</a>
        <button class="btn waves-effect waves-light btn-edit-hapus" type="submit" name="delete_video" onclick="return confirm('Apakah anda yakin?')" value="Delete">Hapus</button>
      </div>

   </form>
  </div>

</div>
</div>

<?php
if(isset($_POST['submit'])){
include"../db/connection.php";
$video=$_FILES['video']['name'];
$judul=$_POST['judul'];
$lokasi=$_FILES['video']['tmp_name'];
$dir="images/video/";
if($video==""){
$query=mysql_query("update video set judul='$judul' where id='$id'");
?>
<script type="text/javascript">
  document.location.href="index.php?show=video";
  alert('Data berhasil di ubah');
</script>
<?php
}else{
  $query=mysql_query("update video set video='$video', judul='$judul' where id='$id'");
  move_uploaded_file($lokasi,"$dir$video");
  ?>
  <script type="text/javascript">
    document.location.href="index.php?show=video";
    alert('Data berhasil di ubah');
  </script>
  <?php
}
}
else if(isset($_POST['delete_video'])){
  $query_d_term=mysql_query("DELETE FROM video WHERE id='$id'");
  if($query_d_term){
  ?>
  <script>
    location.href='index.php?show=video';
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

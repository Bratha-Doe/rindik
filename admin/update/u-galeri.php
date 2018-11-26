<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

<div class="container">
<div class="row">
  <?php
  include '../db/connection.php';
  $id = $_GET['id'];
  $query=mysql_query("SELECT * FROM galeri where id = '$id'");
  while ($row = mysql_fetch_array($query)) {
   ?>

  <!--form update data-->
  <div class="judul-update">
    <h6>Edit galeri</h6>
  </div>

  <div class="form-update">
    <form class="" action="" method="post" enctype="multipart/form-data">

      <div class="col s12 m12">
        <div class="col s2">
         <img src=images/galeri/<?php echo $row['foto']; ?> width="100%">
        </div>
        <div class="col s10">
          <div class="file-field input-field">
            <div class="btn">
              <span>+</span>
              <input name="foto" type="file">
            </div>
            <div style="color:white;" class="file-patsh-wrapper isi-form-update">
              <input disabled class="file-path validate" type="text" id="disabled" placeholder=")* pastikan judul gambar tidak berisi spasi">
            </div>
          </div>
        </div>
      </div>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <div class="input-field col s12">
        <input id="judul" name="judul" type="text" class="validate" value="<?php echo $row['judul'];?>" required>
        <label for="judul">Judul</label>
      </div>

      <div class="btn-form-edit-galeri">
        <button class="btn waves-effect waves-light btn-edit-kirim" type="submit" name="submit" value="Upload">Kirim</button>
        <a href="?show=galeri" class="btn waves-effect waves-light btn-edit-batal">Batal</a>
        <button class="btn waves-effect waves-light btn-edit-hapus" type="submit" name="delete_galeri" onclick="return confirm('Apakah anda yakin?')" value="Delete">Hapus</button>
      </div>

   </form>
  </div>

</div>
</div>

<?php
if(isset($_POST['submit'])){
include "../db/connection.php";
$foto=$_FILES['foto']['name'];
$judul=$_POST['judul'];
$lokasi=$_FILES['foto']['tmp_name'];
$dir="images/galeri/";
if($foto==""){
$query=mysql_query("update galeri set judul='$judul' where id='$id'");
?>
<script type="text/javascript">
  document.location.href="index.php?show=galeri";
  alert('Data berhasil di ubah');
</script>
<?php
}else{
  $query=mysql_query("update galeri set foto='$foto', judul='$judul' where id='$id'");
  move_uploaded_file($lokasi,"$dir$foto");
  ?>
  <script type="text/javascript">
    document.location.href="index.php?show=galeri";
    alert('Data berhasil di ubah');
  </script>
  <?php
}
}
else if(isset($_POST['delete_galeri'])){
  $query_d_term=mysql_query("DELETE FROM galeri WHERE id='$id'");
  if($query_d_term){
  ?>
  <script>
    location.href='index.php?show=galeri';
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

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- Breadcum -->
<div id="breadcrumbs-wrapper" class=" grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <ol class="breadcrumb judul-content-admin">
          <li>Slider</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- End BreadCum -->
<!-- Content Here -->
<div class="container">

<div class="row" id="contain-isi">
  <?php
  include '../db/connection.php';
  $query=mysql_query("SELECT * FROM slider");
   ?>
  <form class="" action="proses/p-slider.php" method="post" enctype="multipart/form-data">

    <div class="col s12">
      <p style="color:#9E9E9E;font-size:14px;" >Masukkan Gambar :</p>
      <div class="file-field input-field">
        <div class="btn">
          <span>+</span>
          <input name="foto" type="file">
        </div>
        <div class="file-path-wrapper">
          <input disabled class="file-path validate" type="text" id="disabled" placeholder=")* pastikan judul gambar tidak berisi spasi" required>
        </div>
      </div>
    </div>

    <div class="input-field col s12">
      <input id="judul" name="judul" type="text" class="validate" required>
      <label for="judul">Judul</label>
    </div>

    <div class="btn-form-admin-slider">
      <button class="btn waves-effect waves-light btn-form-kirim" type="submit" name="action">Kirim</button>
      <button class="btn waves-effect waves-light btn-form-batal" type="reset" name="action">Batal</button>
    </div>

  </form>

<hr class="hr-pembatas-form">
</div>

<div class="row">
  <div class="col s11">
  <div class="blue-bg open-form">
    <h6><b>Slider</b></h6>
  </div>
  </div>
  <div class="col s1">
    <a href="#" class="btn right" id="btn-lihat">+</a>
  </div>
</div>

<!-- include tempalte table -->
<?php
include "js/table-search.php"
?>
<!-- table-search -->
<table id="" class="display striped" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th class="center" style="background-image:none;">Action</th>
        </tr>
    </thead>

    <tbody>
      <?php
      include '../db/connection.php';
      $query = mysql_query("SELECT * FROM slider ORDER BY ID desc");
      while($row = mysql_fetch_array($query)){
      ?>
        <tr>
            <td><img src=images/slider/<?php echo $row['foto']; ?> width="50"height="50"></td>
            <td><?php echo $row['judul'] ?></td>
            <td class="center"><a class="waves-effect waves-light btn blue" href="index.php?show=u-slider&id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

</div>

<script type="text/javascript">
$("#btn-lihat").click(function(){
  $("#contain-isi").toggle(200);
});
</script>

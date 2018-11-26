<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- Breadcum -->
<div id="breadcrumbs-wrapper" class=" grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <ol class="breadcrumb judul-content-admin">
          <li>Agenda</li>
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
  $query=mysql_query("SELECT * FROM agenda");
   ?>
  <form class="" action="proses/p-agenda.php" method="post" enctype="multipart/form-data">

    <div class="input-field col s12">
      <input id="judul" name="judul" type="text" class="validate" required>
      <label for="judul">Judul</label>
    </div>

    <div class="col s12">
      <p style="color:#9E9E9E;font-size:14px;" >Tanggal :</p>
      <div class="input-field col s4">
        <input id="tanggal" name="tgl" type="number" class="validate" required>
        <label for="tanggal">Tanggal</label>
      </div>
      <div class="input-field col s4">
        <input id="bulan" name="bln" type="number" class="validate" required>
        <label for="bulan">Bulan</label>
      </div>
      <div class="input-field col s4">
        <input id="tahun" name="thn" type="number" class="validate" required>
        <label for="tahun">Tahun</label>
      </div>
    </div>

    <div class="input-field col s12 m12">
      <p style="color:#9E9E9E;font-size:14px;" >Deskripsi :</p>
      <textarea id="text-editor" placeholder="Deskripsi" name="dess" rows="8" cols="80" required="required" placeholder="Deskripsi"></textarea>
      <script type="text/javascript">
       CKEDITOR.replace("text-editor");
      </script>
    </div>

    <div class="btn-form-admin-agenda">
      <button class="btn waves-effect waves-light btn-form-kirim" type="submit" name="action">Kirim</button>
      <button class="btn waves-effect waves-light btn-form-batal" type="reset" name="action">Batal</button>
    </div>

  </form>

<hr class="hr-pembatas-form">
</div>

<div class="row">
  <div class="col s11">
  <div class="blue-bg open-form">
    <h6><b>Berita</b></h6>
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
            <th>judul</th>
            <th>tanggal</th>
            <th>Deskripsi</th>
            <th class="center" style="background-image:none;">Action</th>
        </tr>
    </thead>

    <?php
    include '../db/connection.php';
    $query = mysql_query("SELECT * FROM agenda ORDER BY ID desc");
    while($row = mysql_fetch_array($query)){
    ?>

    <tbody>
        <tr>
            <td><?php echo substr($row['judul'],0,40).".."; ?></td>
            <td><?php echo $row['tgl'] ?>-<?php echo $row['bln'] ?>-<?php echo $row['thn'] ?></td>
            <td><?php echo substr($row['dess'],0,80).".."; ?></td>
            <td class="center"><a class="waves-effect waves-light btn blue" href="?show=u-agenda&id=<?php echo $row['id']; ?>">Edit</a>
            </td>
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

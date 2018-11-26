<body>

  <div class="containers-non-home">
    <div class="container-kembali">
      <a href="index.php" class="kembali"><i class="fa fa-angle-left"> Kembali</i></a>
    </div>

    <div class="semua-galeri row">
      <h2>Galeri</h2>
       <div class="container-galeri col s12 m12 l12">

        <?php
          include 'db/connection.php';
          $query=mysql_query("select * from galeri ORDER BY ID desc");
          while ($row=mysql_fetch_array($query)) {
        ?>
        <div class="isi-galeri col s12 m6 l4">
          <div class="">
            <img class="responsive-img materialboxed" src="admin/images/galeri/<?php echo $row['foto']; ?>"
            data-caption="<?php echo $row['judul']; ?>">
          </div>
        </div>
        <?php
        }
        ?>

      </div>

    </div>
  </div>

  <!-- back to top ==========================================================  -->
    <a href="#up" class="">
      <div class="b-backtop z-depth-3 " id="b-backtop">
        <i class="fa fa-angle-up fa-2x"></i>
      </div>
    </a>
</body>

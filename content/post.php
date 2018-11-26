<body>

  <div class="containers-non-home">
    <div class="container-kembali">
      <a href="index.php" class="kembali"><i class="fa fa-angle-left"> Kembali</i></a>
    </div>

    <?php
    include 'db/connection.php';
    $id = $_GET['id'];
    $query=mysql_query("SELECT * FROM berita where id = '$id'");
    while ($row = mysql_fetch_array($query)) {
     ?>
    <div class="post-atas">
      <h2><?php echo $row['judul']; ?></h2>
      <h6><i class="fa fa-calendar"></i> <?php echo $row['tgl']; ?></h6>

      <div class="hr-pembatas center-align row">
        <hr>
      </div>

      <div class="center-align">
        <img src="admin/images/berita/<?php echo $row['foto']; ?>" class="responsive-img">
      </div>
      <div class="justify-align dess-post-atas">
        <span><?php echo $row['dess']; ?></span>
      </div>
    </div>
    <?php
    }
    ?>

    <div class="hr-pembatas center-align row">
      <hr>
    </div>

    <div class="semua-post row">
      <h2>Lihat yang Terkait</h2>

      <div class="card-post-container col s12 m12 l12">
        <?php
          include 'db/connection.php';
          $query=mysql_query("select * from berita ORDER BY ID desc");
          while ($row=mysql_fetch_array($query)) {
        ?>
        <div class="card-post col s12 m6 l3">
          <img src="admin/images/berita/<?php echo $row['foto']; ?>" class="responsive-img">
          <p><i class="fa fa-calendar"></i> <?php echo $row['tgl']; ?></p>
          <h4> <?php echo $row['judul']; ?></h4>
          <a href="?show=post&id=<?php echo $row['id']; ?>" class="waves-effect btn-flat btn-selengkapnya">Selengkapnya</a>
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

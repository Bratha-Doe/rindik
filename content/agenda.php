<body>

  <div class="containers-non-home">
    <div class="container-kembali">
      <a href="index.php" class="kembali"><i class="fa fa-angle-left"> Kembali</i></a>
    </div>

    <?php
    include 'db/connection.php';
    $id = $_GET['id'];
    $query=mysql_query("SELECT * FROM agenda where id = '$id'");
    while ($row = mysql_fetch_array($query)) {
     ?>
    <div class="agenda-atas row">
      <h2><?php echo $row['judul']; ?></h2>
      <div class="hr-pembatas center-align row">
        <hr>
      </div>

      <div class="isi-agenda-atas col s12">
        <div class="tgl-agenda col">
          <div class="bln"><?php echo $row['tgl']; ?>-<?php echo $row['bln']; ?></div>
          <div class="thn"><?php echo $row['thn']; ?></div>
        </div>
        <p><?php echo $row['dess']; ?></p>
      </div>
    </div>
    <?php
    }
    ?>

    <div class="hr-pembatas center-align row">
      <hr>
    </div>

    <div class="semua-agenda row">
      <h2>Lihat yang Terkait</h2>

      <div class="container-agenda col s12">
        <?php
          include 'db/connection.php';
          $query=mysql_query("select * from agenda ORDER BY ID desc");
          while ($row=mysql_fetch_array($query)) {
        ?>
        <a href="?show=agenda&id=<?php echo $row['id']; ?>!">
          <div class="isi-agenda col s12">
            <div class="tgl-agenda col">
              <div class="bln"><?php echo $row['tgl']; ?>-<?php echo $row['bln']; ?></div>
              <div class="thn"><?php echo $row['thn']; ?></div>
            </div>
            <h4><?php echo $row['judul']; ?></h4>
            <p><?php echo substr($row['dess'],0,250).".."; ?></p>
          </div>
        </a>
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

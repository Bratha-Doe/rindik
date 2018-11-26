<body>

  <div class="containers-non-home">
    <div class="container-kembali">
      <a href="index.php" class="kembali"><i class="fa fa-angle-left"> Kembali</i></a>
    </div>

    <div class="semua-video row">
      <h2>Video</h2>

      <div class="container-video col s12 m12 l12">
        <?php
          include 'db/connection.php';
          $query=mysql_query("select * from video ORDER BY ID desc");
          while ($row=mysql_fetch_array($query)) {
        ?>
        <div class="isi-video col s12 m6 l4">
          <video class="responsive-video" controls>
            <source src="admin/images/video/<?php echo $row['video']; ?>" type="video/mp4">
          </video>
          <h4><?php echo $row['judul']; ?></h4>
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

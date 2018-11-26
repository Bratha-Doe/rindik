<link rel="stylesheet" type="text/css" href="wow/style.css" />
<script type="text/javascript" src="wow/jquery.js"></script>

<body>

<!-- slider ================================================================ -->
<div id="wowslider-container1">
  <div class="ws_images slider-user-home">
    <ul>
      <?php
        include 'db/connection.php';
        $query=mysql_query("select * from slider");
        while ($row=mysql_fetch_array($query)) {
      ?>
      <li><img src="admin/images/slider/<?php echo $row['foto']; ?>" title="lnd_rindik" id="wows1_1"/></li>
      <?php
      }
      ?>
    </ul>
  </div>
  <div class="ws_script" style="position:absolute;left:-99%"></div>
  <div class="ws_shadow"></div>
</div>


<div class="marq">
  <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend.
  </marquee>
</div>

<div class="containers">

<!-- rindik ================================================================ -->
<?php
  include 'db/connection.php';
  $query=mysql_query("select * from about");
  while ($row=mysql_fetch_array($query)) {
?>

  <div class="row rindik scrollspy" id="rindik">
    <h2>Rindik</h2>
    <div class="rindik-container col s12 m12 l12">

      <div class="img-rindik col s12 m12 l4">
        <img src="admin/images/about/<?php echo $row['foto']; ?>" class="responsive-img">
      </div>
      <div class="content-rindik col s12 m12 l8">
        <p><?php echo $row['dess']; ?></p>
      </div>

    </div>
  </div>

<?php
}
?>

  <div class="hr-pembatas center-align row">
    <hr>
  </div>


<!-- post berita ===================================================================-->
  <div class="row post scrollspy" id="post">
    <h2>Berita</h2>
    <div class="card-post-container col s12 m12 l12">


      <?php
        include 'db/connection.php';
        $query = mysql_query("select * from berita ORDER BY ID desc");
        for ($i=0; $i < 4 ; $i++) {
        $row=mysql_fetch_array($query)
      ?>
        <div class="card-post col s12 m6 l3">
          <img src="admin/images/berita/<?php echo $row['foto']; ?>" class="responsive-img">
          <p><i class="fa fa-calendar"></i> <?php echo $row['tgl']; ?></p>
          <h4><?php echo $row['judul']; ?></h4>
          <a href="?show=post&id=<?php echo $row['id']; ?>" class="waves-effect btn-flat btn-selengkapnya">Selengkapnya</a>
        </div>
      <?php
      }
      ?>

    </div>
  </div>



  <div class="hr-pembatas center-align row">
    <hr>
  </div>


  <!-- galeri ==================================================== -->
    <div class="row galeri scrollspy" id="galeri">
      <h2>Galeri</h2>

      <div class="container-galeri col s12 m12 l12">
        <?php
          include 'db/connection.php';
          $query = mysql_query("select * from galeri ORDER BY ID desc");
          for ($i=0; $i < 4 ; $i++) {
          $row=mysql_fetch_array($query)
        ?>
          <div class="isi-galeri responsive-img col s12 m6 l3">
            <img class="responsive-img imggalerionhome materialboxed" src="admin/images/galeri/<?php echo $row['foto']; ?>"
            data-caption="<?php echo $row['judul']; ?>">
          </div>
        <?php
        }
        ?>
      </div>

      <div class="show-more center-align col s12">
        <a href="?show=galeri-all" class="waves-effect btn-flat">Lihat Lebih Banyak</a>
      </div>

    </div>

    <div class="hr-pembatas center-align row">
      <hr>
    </div>


<!-- agenda =====================================================================-->
  <div class="row agenda scrollspy" id="agenda">
    <h2>Agenda</h2>
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
            <p ><?php echo substr($row['dess'],0,250).".."; ?></p>
          </div>
        </a>
      <?php
      }
      ?>

    </div>
  </div>

  <div class="hr-pembatas center-align row">
    <hr>
  </div>


<!-- video ================================================================= -->
  <div class="video scrollspy row" id="video">
    <h2>Video</h2>
    <div class="container-video col s12 m12 l12">

      <?php
        include 'db/connection.php';
        $query = mysql_query("select * from video ORDER BY ID desc");
        for ($i=0; $i < 3 ; $i++) {
        $row=mysql_fetch_array($query)
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
    <div class="show-more center-align col s12">
      <a href="?show=video" class="waves-effect btn-flat">Lihat Lebih Banyak</a>
    </div>
  </div>



</div><!-- end containers -->


<!-- back to top ==========================================================  -->
  <a href="#up" class="">
    <div class="b-backtop z-depth-3 " id="b-backtop">
      <i class="fa fa-angle-up fa-2x"></i>
    </div>
  </a>



</body>

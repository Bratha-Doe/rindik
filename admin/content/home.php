<style media="screen">
  body{
    overflow: hidden;
  }
</style>
<!-- Breadcum -->
<div id="breadcrumbs-wrapper" class=" grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <ol class="breadcrumb judul-content-admin">
          <li>Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- End BreadCum -->
<!-- Content Here -->
<div class="container">
  <div class="row">
    <div class="col s12">

      <div class="col s7">
        <div class="col s12">
          <div class="box-info-1 box-info box-1">
            <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-newspaper-o fa-3x"></i></div>
            <div class="jumlah-text">
              <div class="jumlahdata">
                <?php
                  include "../db/connection.php";
                  $query=mysql_query("select * from berita");
                  $jumlah=mysql_num_rows($query);
                  echo "<h4>Berita : ".$jumlah ;
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="box-info-1 box-info box-2">
            <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-picture-o fa-3x"></i></div>
            <div class="jumlah-text">
              <div class="jumlahdata">
                <?php
                  include "../db/connection.php";
                  $query=mysql_query("select * from galeri");
                  $jumlah=mysql_num_rows($query);
                  echo "<h4>Galeri : ".$jumlah ;
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="box-info-1 box-info box-3">
            <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-calendar fa-3x"></i></div>
            <div class="jumlah-text">
              <div class="jumlahdata">
                <?php
                  include "../db/connection.php";
                  $query=mysql_query("select * from agenda");
                  $jumlah=mysql_num_rows($query);
                  echo "<h4>Agenda : ".$jumlah ;
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="box-info-1 box-info box-4">
            <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-play fa-3x"></i></div>
            <div class="jumlah-text">
              <div class="jumlahdata">
                <?php
                  include "../db/connection.php";
                  $query=mysql_query("select * from video");
                  $jumlah=mysql_num_rows($query);
                  echo "<h4>Video : ".$jumlah ;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s5">
        <div class="inf-date calendar-home-admin">
          <div class="title-date judul-calendar center">DATE</div>
          <?php
          $mydate=getdate(date("U"));
          ?>
          <div class="white-text center" style="padding-top:60px;">
            <h4><b><?php echo "$mydate[weekday]"; ?></b></h4>
            <h5><?php echo "$mydate[mday] $mydate[month]  $mydate[year]"; ?></h5>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- <div class="container">
  <div class="row">
    <div class="col s4">
      <div class="box-info-1">
        <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-newspaper-o fa-3x"></i></div>
        <div class="jumlah-text">
          <p>BERITA : <b>17</b></p>
        </div>
      </div>
    </div>
    <div class="col s4">
      <div class="box-info-2">
        <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-play fa-3x"></i></div>
        <div class="jumlah-text">
          <p>VIDEO : <b>17</b></p>
        </div>
      </div>
    </div>
    <div class="col s4">
      <div class="box-info-3">
        <div class="icon-inf col s4" style="padding-top: 25px;"><i class="fa fa-picture-o fa-3x"></i></div>
        <div class="jumlah-text">
          <p>GALERI : <b>17</b></p>
        </div>
      </div>
    </div>
  </div>
  <!-- baris 2 --><!--
  <div class="row">
    <div class="col s4">
      <div class="inf-date">
        <div class="title-date center">DATE</div>
        <?php
        $mydate=getdate(date("U"));
        ?>
        <div class="white-text center" style="padding-top:60px;">
          <h4><b><?php echo "$mydate[weekday]"; ?></b></h4>
          <h5><?php echo "$mydate[mday] $mydate[month]  $mydate[year]"; ?></h5>
        </div>
      </div>
    </div>

</div> -->

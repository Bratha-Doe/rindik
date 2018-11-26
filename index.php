<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RindikBali</title>
    <link rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body>

<!-- ======================================================================= -->

<!-- navbar pertama -->
  <div class="navbar-fixed scrollspy" id="up">
    <nav>
      <div class="nav-wrapper">
        <a href="Index.php" class="brand-logo">Rindik Bali</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars fa-2x"></i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#rindik">Rindik</a></li>
          <li><a href="#post">Post</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#agenda">Agenda</a></li>
          <li><a href="#video">Video</a></li>
        </ul>
      </div>
    </nav>
  </div>

    <ul class="side-nav" id="mobile-demo">
      <li><a href="#rindik">Rindik</a></li>
      <li><a href="#post">Post</a></li>
      <li><a href="#galeri">Galeri</a></li>
      <li><a href="#agenda">Agenda</a></li>
      <li><a href="#video">Video</a></li>
    </ul>

<!-- ======================================================================= -->

<div class="content">
  <?php include("content/content.php"); ?>
</div>

<footer>
  <?php include 'footer.php'; ?>
</footer>

<!-- ======================================================================= -->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="wow/wowslider.js"></script>
    <script type="text/javascript" src="wow/script.js"></script>

    <!-- nav bar -->
    <script type="text/javascript">
    //side bar
    $(".button-collapse").sideNav();
    </script>

    <!-- scroll spy -->
    <script type="text/javascript">
    $(document).ready(function(){
      $('.scrollspy').scrollSpy({
        scrollOffset: 60
      });
    });
    </script>

    <!-- material-box -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.materialboxed').materialbox();
      });
    </script>

    <!-- back to top -->
    <script type="text/javascript">
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 20) {
        document.getElementById("b-backtop").style.display = "block";
      } else {
        document.getElementById("b-backtop").style.display = "none";
      }
    }
    </script>





  </body>
</html>

<style media="screen">

body{
  background-color: #ddd
}
.login-admin{
  width: 400px;
  background-color: white;
  padding: 50px;
  margin-top: 100px;
  margin-left: 300px;
}
.title-login-admin{
  text-align: center;
}
.title-login-admin hr{
  height: 2px;
  background-color: black;
  border: none;
}

</style>

<?php
session_start();
 if(isset($_SESSION['username-rindik']) and isset($_SESSION['password-rindik'])){
  header("location:index.php");
}else{
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../../css/materialize.css">
    <link rel="stylesheet" href="../../css/font-awesome.css" media="screen" title="no title" charset="utf-8">
    <title>Rindik Bali - Administrator</title>
  </head>

  <body>
    <div class="container">
      <div class="login-admin z-depth-4">
        <div class="title-login-admin">
          <h3>Rindik Bali</h3>
          <p>You Must Log-In to Access Admin Page</p>
          <hr>
        </div><!-- end title login admin -->

        <div class="form-login-admin">
          <form class="form-login" action="cek-login.php" method="post" onsubmit="return validasi_login(this)">
            <div class="row">
              <div class="input-field user col s12">
                <input id="username" type="text" class="validate" name="username" required>
                <label for="username">Username</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn waves-effect right blue" type="submit" name="submit">Log In
                <i class="fa fa-sign-in right"></i>
              </button>
            </div>
          </form>
        </div><!-- form login admin -->
      </div><!-- login admin -->

    </div><!-- containern -->


    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
  </body>




<?php
  }
?>

</html>

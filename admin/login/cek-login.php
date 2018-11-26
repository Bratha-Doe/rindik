<?php
require_once '../../db/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'");
$row = mysql_num_rows($query);

if ($row > 0) {
  $result = mysql_fetch_array($query);
  session_start();
  $_SESSION['username-rindik'] = $result['username'];
  $_SESSION['password-rindik'] = $result['password'];
 ?>
 <script type="text/javascript">
 location.href="../index.php";
 </script>

<?php
}else {
?>
<script type="text/javascript">
alert("Password Atau Username Salah")
location.href="login.php";
</script>
<?php } ?>

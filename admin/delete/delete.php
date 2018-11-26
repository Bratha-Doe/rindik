<?php
include "../../db/connection.php";
$id=$_GET['id'];
$query_d_term=mysql_query("DELETE FROM about WHERE id='$id'");
if($query){
?>
<script language="javascript">document.location.href="../index.php?show=home";</script>
<?php
}else{
echo "gagal hapus data";
}
?>

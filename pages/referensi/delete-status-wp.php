<?php

session_start();//session starts here
include '../../bin/dbconn.php';

if(!$_SESSION['NM_LOGIN'])
{
   header("Location: ../../index.php");//redirect to login page to secure the welcome page without login access.
}

$id = $_GET['refid'];
$q = mysqli_query($conn, "DELETE FROM REF_STATUS_WP where KD_STATUS='".$id."'");
if ($q) {
  echo '<script language="javascript">document.location.href="ref-status-wp.php";</script>';
} else {
  echo "Gagal Menghapus Status";
}

?>

<?php 

session_start();
session_destroy();
header("Location:Login.php");
//echo"<script>location.href='Index.php'</script>";

?>
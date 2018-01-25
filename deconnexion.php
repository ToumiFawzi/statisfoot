<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array();
session_destroy();
header("Location:index.php");
exit();
?>

<?php
session_start();
session_destroy();
setcookie("color", "", time()-3600);
header("Location: index.php");
?>
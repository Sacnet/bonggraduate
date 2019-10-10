<?php
session_start();
session_destroy();
header('Location: memlogin.php');
setcookie('username','', time()-1500);
?>
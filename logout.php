<?php
session_start();
session_destroy();
header('Location: login.php');
setcookie('username','', time()-1500);
?>
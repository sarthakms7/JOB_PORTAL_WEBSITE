<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['fname']);
unset($_SESSION['phone']);

header("location:login.php?logout=true");
?>

<?php
session_start();

unset($_SESSION['auth']);
$_SESSION['flash']['success'] = ' you are now disconnected';
header('location:login.php');
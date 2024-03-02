<?php 
session_start();


session_destroy();

session_unset();

$_SESSION['login'] = '';

header("Location: login_new.php?pesan=oke");
<?php 
    session_start();
    setcookie('flag', 'true', time()-10, '/');
    header('location: home.php');
    session_destroy();
?>
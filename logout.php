<?php
    session_start();
    unset($_SESSION['IS_LOGGIN']);
    header('Location:login.php');
    die();
?>
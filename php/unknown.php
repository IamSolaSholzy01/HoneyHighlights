<?php
session_start();
if ($isLoggedIn) {
    $mango = '<script type = text/javascript>sessionStorage.getItem("key");</script>';
    echo $mango;
}
?>
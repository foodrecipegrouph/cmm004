<?php
include 'db_connect.php';
session_start();

if(session_destroy()) {
    header("Location: login.php");
}
?>

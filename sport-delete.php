<?php
include "db.php";
session_start();

$s="delete from sport where GID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('sport.php?msg=deleted','_self')</script>";
?>
<?php
include "db.php";
session_start();

$s="delete from sub where SID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('subjects.php?msg=deleted','_self')</script>";
?>
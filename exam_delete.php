<?php
include "db.php";
session_start();

$s="delete from exam where EID={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('view-exam.php?msg=deleted','_self')</script>";
?>
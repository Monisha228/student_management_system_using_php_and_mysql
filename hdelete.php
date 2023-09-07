<?php
include "db.php";
session_start();
$s="delete from hclass where HID={$_GET['id']}";
$db->query($s);
header("location:hdept.php?mes=data deleted...");
?>
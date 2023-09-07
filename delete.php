<?php
include "db.php";
session_start();

  $s="delete from department where DID={$_GET["id"]}";
  $db->query($s);
  echo "<script>window.open('add_dept.php','_self');</script>";
?>
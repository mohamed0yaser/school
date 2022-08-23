<?php
include "basic.php";
$id=$_GET["id"];
$did = $_GET["did"];
global $conn;
$sql="DELETE FROM teacher WHERE id='$did'";
mysqli_query($conn, $sql);
header("Location:teacher.php?id=$id");
?>
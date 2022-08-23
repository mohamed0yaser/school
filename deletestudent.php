<?php
include "basic.php";
$id=$_GET["id"];
$did = $_GET["did"];
global $conn;
$sql="DELETE FROM student WHERE id='$did'";
mysqli_query($conn, $sql);
header("Location:student.php?id=$id");
?>
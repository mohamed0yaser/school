<?php
include "basic.php";
unset($_SESSION["username"]);
session_destroy();
header("Location:signin.php")
?>
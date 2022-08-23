<?php
$conn=mysqli_connect('localhost','root','','school');
function get_user($uname)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username='$uname'";
    $data = mysqli_query($conn, $sql);
    $rec = mysqli_fetch_assoc($data);
    return $rec;
}
function create_user($fn,$i, $un, $pass)
{
    global $conn;
    $password = password_hash($pass, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (username,image,email,password) VALUES ('$fn','$i','$un','$password')";
    mysqli_query($conn, $sql);
    header('location:signin.php');
}
function teacher_update($tname,$email,$phone,$imagefile, $school_id){
    global $conn;
    global $id;
    if ($imagefile != "") {
        $name = $imagefile["tmp_name"];
        $location = "images/";
        $filename = strtolower($_POST["name"]);
        $filename = str_replace("-", "S", $filename);
        $filename = $filename . "-logo.png";
        move_uploaded_file($name, $location . $filename);
        $sql = " UPDATE teacher SET name='$tname' , phone='$phone' , email='$email' , school_id='$school_id' , image='$filename' WHERE id='$id'";
    } else {
        $sql = " UPDATE teacher SET name='$tname' , phone='$phone' , email='$email' , school_id='$school_id' WHERE id='$id'";
    }
    mysqli_query($conn, $sql);
    
}

/*
session_start();
$si= "\adward\signin.php";
$su= "\adward\signup.php";
if ($_SERVER["REQUEST_URI"]!=$si&&$_SERVER["REQUEST_URI"]!=$su){
 if (!isset($_SESSION["username"])) {
    header("location:signin.php");
    }
}*/
?>
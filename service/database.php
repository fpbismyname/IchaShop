<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db_name = "db_shop";

$regis = false;

$db = mysqli_connect($hostname, $user, $pass, $db_name);

if ($db->connect_error) {
    echo "<script>alert('Gagal Terhubung ke DB')</script>";
    die("disconnected !");
}

// echo "<script>alert('Berhasil Terhubung ke DB')</script>";

function registerUser($username, $password, $email, $db)
{
    $session = new Session();
    $session->init();
    
    $sql = "INSERT INTO user(role, username, password, email) VALUES('user', '$username', '".password_hash($password, PASSWORD_DEFAULT)."', '$email')";
    
    $execute = $db->query($sql);
    
    if ($execute) {
        $_SESSION["regis"] = true;
    }
}

function loginUser($username, $password, $db)
{

    $sql = "SELECT role, password FROM user WHERE username='$username'";
    
    $execute = $db->query($sql);

    $result = $execute->fetch_assoc();

    return $result;
}

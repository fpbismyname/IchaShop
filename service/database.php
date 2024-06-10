<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db_name = "db_shop";

$db = mysqli_connect($hostname, $user, $pass, $db_name);

if ($db->connect_error) {
    echo "<script>alert('Gagal Terhubung ke DB')</script>";
    die("disconnected !");
}

// echo "<script>alert('Berhasil Terhubung ke DB')</script>";

function registerUser($username, $password, $email, $db)
{
    $session = new Session();
    $session->setSession("regis", true);
    
    $sql = "INSERT INTO user(role, username, password, email) VALUES('user', '$username', '".password_hash($password, PASSWORD_DEFAULT)."', '$email')";
    
    $execute = $db->query($sql);
    
    if ($execute) {
        $session->setSession("regis", true);
    }
}

function loginUser($username, $password, $db)
{
    $session = new Session();
    $session->setSession("login", true);

    $sql = "SELECT id, role, password FROM user WHERE username='$username'";
    
    $execute = $db->query($sql);

    $result = $execute->fetch_assoc();

    return $result;
}

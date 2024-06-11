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
    
    $sql = "INSERT INTO user(role, username, password, email) VALUES('user', '$username', '".password_hash($password, PASSWORD_DEFAULT)."', '$email')";
    
    $execute = $db->query($sql);
    
    if ($execute) {
        $session->setSession("regis", true, true);
    }
}

function loginUser($username, $db)
{
    $session = new Session();
    $session->setSession("login", true, false);

    $sql = "SELECT id, role, password FROM user WHERE username='$username'";
    
    $execute = $db->query($sql);

    $result = $execute->fetch_assoc();
    if (!empty($result)){
        return $result;
    } else{
        return null;
    }
}

function getDataProduk($db){
    $sql = "SELECT * FROM product";

    $execute = $db->query($sql);

    return $execute;
}

function insertDataProduk($db, $barang, $kategori, $harga, $image, $detail){
    $sql = "INSERT INTO `product`(`kategori_id`, `nama`, `harga`, `detail`, `image`) VALUES ('$kategori', '$barang', '$harga', '$detail', '$image')";
    $execute = $db->query($sql);

    if ($execute){
        return true;
    } else {
        return false;
    }
}
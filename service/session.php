<?php

class Session
{
    public function init()
    {
        session_start();
    }

    //Menyimpang data sesi
    public function getSession($key, $session)
    {
        if ($session == true) {
            $this->init();
            return $_SESSION[$key];
        } else {
            return $_SESSION[$key];
        }
    }

    public function setSession($key, $value, $session)
    {
        if ($session == true) {
            $this->init();
            $_SESSION[$key] = $value;
        } else {
            $_SESSION[$key] = $value;
        }
    }


    //Login dan Register
    public function register($username, $password, $current_email, $database)
    {

        //Ngambil data Form register
        $user = $username;
        $pass = $password;
        $email = $current_email;

        if (empty($user) || empty($pass) || empty($email)) {
            $this->alert("Data form tidak boleh kosong !");
        } else {
            try {
                registerUser($user, $pass, $email, $database);
                $this->navigate("index.php");
            } catch (Exception $e) {
                echo "<script>alert('Username sudah terdaftar !')</script>";
            }
        }
    }

    public function login($username, $password, $database)
    {

        //mengambil data form login
        $user = $username;
        $pass = $password;

        if (empty($user) || empty($pass)) {
            $this->alert("Data form tidak boleh kosong !");
        } else {
            try {
                $account = loginUser($username, $database);

                if (!empty($account)){
                    if (!password_verify($password, $account["password"])) {
                        $this->alert("Akun tidak ada !");
                    } else {
                        if (($account["role"] == "admin") || password_verify($password, $account["password"])) {
                            $this->setSession('user', $account['id'], false);
                            $this->setSession('role', $account['role'], false);
                            $this->navigate("./page/AdminPage.php");
                        } else
                        if (($account["role"] == "user") && password_verify($password, $account["password"])) {
                            $this->setSession('user', $account['id'], false);
                            $this->setSession('role', $account['role'], false);
                            $this->navigate("./page/MainPage.php");
                        } else {
                            $this->alert("Akun tidak ada !");
                        }
                    }
                } else {
                    $this->alert("Akun tidak ada !");
                }

            } catch (Exception $e) {
                $this->alert("$e");
            }
        }
    }

    //Berpindah halaman
    public function navigate($page)
    {
        header("location: $page");
    }

    //Notifikasi
    public function alert($message)
    {
        echo "<script>alert('$message')</script>";
    }
}

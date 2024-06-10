<?php 

class Session{
    public function init(){
        session_start();
    }
    public function register($username, $password, $current_email, $database){

        //Ngambil data Form register
        $user = $username;
        $pass = $password;
        $email = $current_email;

        if (empty($user) || empty($pass) || empty($email)) {
            $this->alert("Data form tidak boleh kosong !");
        } else {
            try {
                registerUser($user, $pass, $email, $database);
                $this->navigate("login.php");
            } catch (Exception $e) {
                echo "<script>alert('Username sudah terdaftar !')</script>";
            }
        }
    }

    public function login($username, $password, $database){

        //mengambil data form login
        $user = $username;
        $pass = $password;

        if (empty($user) || empty($pass)){
            $this->alert("Data form tidak boleh kosong !");
        } else {
            try{
                $account = loginUser($username, $password, $database);
                if (empty($account) && !password_verify($password, $account["password"])) {
                    $this->alert("Akun tidak ada !");
                } else {
                    if (($account["role"] == "admin") && password_verify($password, $account["password"])){
                        $this->navigate("AdminPage.php");
                    } else
                    if (($account["role"] == "user") && password_verify($password, $account["password"])){
                        $this->navigate("MainPage.php");
                    } 
                }
            } catch (Exception $e) {
                $this->alert("$e");
            }
        }
    }

    public function navigate($page){
        header("location: $page");
    }

    public function alert($message){
        echo "<script>alert('$message')</script>";
    }
}
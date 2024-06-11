<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IchaShop</title>
    <?php
    include "../layout/user/bootstrap.php";
    include "../service/session.php";

    path("../layout/user/style.css");

    $session = new Session();

    //protect privillage
    $role = $session->getSession("role", true);
    if ($role == "admin"){
        $session->navigate("./AdminPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }
    ?>
</head>

<body id="MainPage">
    <div class="d-flex flex-column" >
        <?php include "../layout/navbar.php"?>
        <?php include "../layout/content.php"?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php
    include "../layout/bootstrap.php";
    include "../service/session.php";
    $session = new Session();
    
    path("../layout/style.css");

    //protect privillage
    $role = $session->getSession("role", true);
    if ($role == "user"){
        $session->navigate("./MainPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }
    ?>
</head>

<body id="AdminPage">

</body>

</html>
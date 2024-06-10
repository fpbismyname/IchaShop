<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IchaShop</title>
    <?php
    include "../layout/bootstrap.php";
    include "../service/session.php";

    path("../layout/style.css");

    $session = new Session();
    ?>
</head>

<body id="MainPage">
    <div class="d-flex flex-column" >
        <?php include "../layout/navbar.php"?>
        <?php include "../layout/content.php"?>
    </div>
</body>

</html>
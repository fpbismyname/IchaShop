<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IchaShop</title>
</head>

<body>
    <?php
    include ".. /service/session.php";

    $session = new Session();
    echo $session->getSession("user");
    ?>
</body>

</html>
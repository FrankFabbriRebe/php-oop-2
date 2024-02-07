<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // require
    require_once(__DIR__ . "/db.php");

    echo $scatolette->getTitle();
    ?>
    <img src="<?php echo $scatolette->getImage();
    ?>" alt="">

</body>

</html>
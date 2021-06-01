<html>
<head>
    <?php
        require './globals/global-css.php';
        require './globals/global-js.php';
    ?>
</head>
<body>
    <?php
        session_start();
        require './function/function.php';
        checkConnexion();
        include './parts/carousel.php';
        include './parts/navbar.php';
        include './parts/player.php';
        include './parts/footer.php';
    ?>
</body>
</html>
<html>
<head>
    <?php
        require './globals/global-css.php';
        require './globals/global-js.php';
    ?>
</head>
<body>
    <?php
        //Connection checking
        session_start();
        require './function/function.php';
        checkConnexion();

        //Carousel
        include './parts/carousel.php';

        //Navbar
        include './parts/navbar.php';

        //Display of player's visual
        include './parts/player.php';

        //Footer
        include './parts/footer.php';
    ?>
</body>
</html>
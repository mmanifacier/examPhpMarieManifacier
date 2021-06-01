<html>
<head>
    <?php
        require './globals/global-css.php';
        require './globals/global-js.php';
    ?>
</head>
<body>
    <?php
        //Code operation functions
        require './function/function.php';

        //Carousel
        include './parts/carousel.php';

        //Navbar
        include './parts/navbar.php';

        //Jumbotron
        include './parts/jumbotron.php';

        //Display of player's visual
        include './parts/player.php';

        //Footer
        include './parts/footer.php';
    ?>
</body>
</html>
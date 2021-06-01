<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="./images/logo.png" class="navbar-brand" style="height: 100px;" alt="Fédération Française de Football">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php
                        if (isset($_SESSION['username'])) {
                        ?>
                            <a class="nav-link active" href="./admin.php">Gestion des joueurs</a>
                        <?php
                        } else {
                        ?>
                            <a class="nav-link active" href="./index.php">Home</a>
                        <?php
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                        if (isset($_SESSION['username'])) {
                        ?>
                            <a class="nav-link active" href="./add-player.php">Nouveau joueur</a>
                        <?php
                        }
                    ?>
                </li>
            </ul>
        </div>
        <?php
            if (isset($_SESSION['username'])) {
                ?>
                    <div class="left">
                        <a href="./manager/logout-manager.php" class="btn btn-info">Log Out</a>
                    </div>
                <?php
            } else {
                ?>
                    <div class="left">
                        <a href="./login.php" class="btn btn-info">Log In</a>
                    </div>
                <?php
            }
        ?>
    </div>
</nav>
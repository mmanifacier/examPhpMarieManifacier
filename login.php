<html>
<head>
    <?php
        require './globals/global-css.php';
        require './globals/global-js.php';
        session_start();
    ?>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <!-- LOGIN FORM: Start -->
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="./manager/login-manager.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" class="btn btn-info btn-md" value="Log In">
                                <br><br>
                                <a href="./index.php" class="text-info">Back to site</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN FORM: End -->

    <!-- ERROR GESTION: Start -->
    <?php
        if(isset($_GET['error'])){
    ?>
    <div class="error text-center">
        <?php
            switch ($_GET['error']){
                case 'no-saisie':
                    echo('Tu n\'as rien saisi.');
                    break;
                case 'no-username':
                    echo('Veuillez saisir votre nom d\'utilisateur');
                    break;
                case 'no-password':
                    echo('Veuillez saisir votre mot de passe.');
                    break;
                case 'bad-credentials':
                    echo('Les identifiants sont mauvais.');
                    break;
                default:
                    echo('Erreur inconnue');
                    break;
            }
        ?>
    </div>

    <?php
        }
    ?>
    <!-- ERROR GESTION: End -->
</body>
</html>


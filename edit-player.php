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

        //Navbar
        include './parts/navbar.php';

        //Retrieval of information sent via the method GET
        $player = getPlayer($_GET['id'])
    ?>

    <!-- EDITING PLAYER FORM: Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post" action="./manager/edit-player-manager.php?id=<?php echo($player['id_player']); ?>">
                        <fieldset>
                            <legend class="text-center header">Editer un Joueur</legend>

                            <div class="form-floating col-md-8 mb-3">
                                <input type="text" class="form-control" name="first-name" id="floatingFirstName"
                                    placeholder="First Name" value="<?php echo($player['first_name']) ?>">
                                <label for="floatingFirstName">Prénom</label>
                            </div>

                            <div class="form-floating col-md-8 mb-3">
                                <input type="text" class="form-control" name="last-name" id="floatingLastName"
                                    placeholder="Last Name" value="<?php echo($player['last_name']) ?>">
                                <label for="floatingLastName">Nom</label>
                            </div>

                            <div class="form-floating col-md-8 mb-3">
                                <input type="number" class="form-control" name="age" id="floatingAge"
                                    placeholder="Age" value="<?php echo($player['age']) ?>">
                                <label for="floatingAge">Age</label>
                            </div>

                            <div class="form-floating col-md-8 mb-3">
                                <input type="number" class="form-control" name="number" id="floatingNumber"
                                    placeholder="Number" value="<?php echo($player['jersey_number']) ?>">
                                <label for="floatingNumber">Maillot</label>
                            </div>

                            <div class="form-floating col-md-8 mb-3">
                                <select name="position" id="position">
                                    <?php
                                    $positions = getAllPositions();
                                    foreach ($positions as $position) {
                                        ?>
                                        <option value="<?php echo($position['id_position']) ?>"><?php echo($position['name']) ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- EDITING PLAYER FORM: Start -->

    <!-- ERROR GESTION: Start -->
    <?php
    if(isset($_GET['error'])){
    ?>
    <div class="error text-center">
        <?php
            switch ($_GET['error']){
                case 'no-first-name':
                    echo('Veuillez saisir un First Name.');
                    break;
                case 'no-last-name':
                    echo('Veuillez saisir un Last Name.');
                    break;
                case 'no-age':
                    echo('Veuillez saisir un age.');
                    break;
                case 'too-much-players':
                    echo('Il y a déja 23 joueurs entrés.');
                    break;
                case 'no-number':
                    echo('Veuillez saisir un numéro de maillot.');
                    break;
                default:
                    echo('Erreur inconnue.');
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
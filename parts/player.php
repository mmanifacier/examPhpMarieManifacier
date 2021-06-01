<div class="container">
    <h2 class="display-5 fw-bold">Nos Joueurs</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Position</th>
                    <th scope="col">Maillot</th>
                    <?php
                    if (isset($_SESSION['username'])) {                    
                        ?>
                    <th scope="col">Options</th>
                    <?php
                    }
                ?>
                </tr>
            </thead>
            <tbody>
                <?php
            $players = getAllPlayers();
            
            foreach($players as $player){ 
                ?>
                <tr>
                    <td><?php echo($player['first_name']); ?></td>
                    <td><?php echo($player['last_name']); ?></td>
                    <td><?php echo($player['age']); ?></td>
                    <td><?php $position = getPosition($player['id_position']);
                            echo($position['name']); ?></td>
                    <td><?php echo($player['jersey_number']); ?></td>
                    <?php if (isset($_SESSION["username"])) {
                    ?>
                    <td>
                        <div class="btn-group float-end">
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">Actions</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./edit-player.php?id=<?php echo($player['id_player']); ?>">Editer</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item"
                                        href="./manager/delete-player-manager.php?id=<?php echo($player['id_player']); ?>">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <?php
                    }
                ?>
                </tr>
                <?php
            }
        ?>
            </tbody>
        </table>
</div>
<div class="container">
    <h2 class="display-5 fw-bold">Nos Joueurs</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First-Name</th>
                <th scope="col">Last-Name</th>
                <th scope="col">Age</th>
                <th scope="col">Position</th>
                <th scope="col">Jersey Number</th>
                <?php
                    if (isset($_SESSION['username'])) {                    
                        ?>
                        <th scope="col">Delete</th>
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
                    <th scope="row"><?php echo($player['id_player']); ?></th>
                    <td><?php echo($player['first_name']); ?></td>
                    <td><?php echo($player['last_name']); ?></td>
                    <td><?php echo($player['age']); ?></td>
                    <td><?php $position = getPosition($player['id_position']);
                            echo($position['name']); ?></td>
                    <td><?php echo($player['jersey_number']); ?></td>
                    <?php
                        if (isset($_SESSION['username'])) {                    
                            ?>
                            <td><a href="./manager/delete-player-manager.php?id=<?php echo($player['id_player']); ?>" class="btn btn-info">Delete</a></td>
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
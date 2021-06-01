<?php
    session_start();
    $authorizedFiles = ['image/png', 'image/jpeg', 'image/jpg'];

    if (empty($_POST['first-name'])) {
        header("Location: ../add-player.php?error=no-first-name");
    } elseif (empty($_POST['last-name'])) {
        header("Location: ../add-player.php?error=no-last-name");
    } elseif (empty($_POST['age'])) {
        header("Location: ../add-player.php?error=no-age");
    }

    try {
        require '../parts/bdd-connection.php';
        $req = $pdo->prepare("INSERT INTO player (first_name, last_name, age, id_position, jersey_number) VALUES (:first_name, :last_name, :age, :position, :jersey)");

        $verifNumPlayers = $pdo->prepare("SELECT COUNT(*) FROM player");
        $verifNumPlayers->execute();

        if ($verifNumPlayers >= 23) {
            header("Location: ../add-player.php?error=too-much-players");
        } else {
            $req->execute([
                'first_name'=> $_POST['first-name'],
                'last_name'=> $_POST['last-name'],
                'age'=> $_POST['age'],
                'position'=> $_POST['position'],
                'jersey'=> $_POST['number']
            ]);
            header("Location: ../admin.php");
        }
        
    } catch (\PDOException $e) {
        var_dump($e);
        die();
    }
?>
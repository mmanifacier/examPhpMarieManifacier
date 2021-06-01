<?php
    session_start();
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $position = $_POST['position'];

    if (empty($firstName)) {
        header("Location: ../add-player.php?error=no-first-name");
    } elseif (empty($lastName)) {
        header("Location: ../add-player.php?error=no-last-name");
    } elseif (empty($age)) {
        header("Location: ../add-player.php?error=no-age");
    } elseif (empty($number)) {
        header("Location: ../add-player.php?error=no-number");
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
                'first_name'=> $firstName,
                'last_name'=> $lastName,
                'age'=> $age,
                'position'=> $position,
                'jersey'=> $number
            ]);
            header("Location: ../admin.php");
        }
        
    } catch (\PDOException $e) {
        var_dump($e);
        die();
    }
?>
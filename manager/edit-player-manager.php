<?php
    session_start();
    $id = $_GET['id'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $position = $_POST['position'];

    if (empty($firstName)) {
        header("Location: ../edit-player.php?error=no-first-name");
    } elseif (empty($lastName)) {
        header("Location: ../edit-player.php?error=no-last-name");
    } elseif (empty($age)) {
        header("Location: ../edit-player.php?error=no-age");
    } elseif (empty($number)) {
        header("Location: ../edit-player.php?error=no-number");
    }
    try {
        require '../parts/bdd-connection.php';
        $req = $pdo->prepare("UPDATE player SET first_name = :first_name, last_name = :last_name, age = :age, id_position = :position, jersey_number = :jersey WHERE id_player = :id");

        $req->execute([
            'first_name'=> $firstName,
            'last_name'=> $lastName,
            'age'=> $age,
            'position'=> $position,
            'jersey'=> $number,
            'id'=> $id
        ]);
        header("Location: ../admin.php");
        
    } catch (\PDOException $e) {
        var_dump($e);
        die();
    }
?>
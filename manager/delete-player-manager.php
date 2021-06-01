<?php
    session_start();
    include '../parts/bdd-connection.php';

    $query = $pdo->prepare('DELETE FROM player WHERE id_player = :id');

    $query -> execute([
        'id'=> $_GET['id'],
    ]);

    header('Location: ../admin.php');
?>
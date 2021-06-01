<?php

function checkConnexion(){
    if(empty($_SESSION) || empty($_SESSION['username'])){
        header('Location: index.php');
    }
}

function getAllPlayers(){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM player');
    $query -> execute();
    return $query->fetchAll();
}

function getAllPositions(){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM position');
    $query -> execute();
    return $query->fetchAll();
}

function getPlayer($id){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM player WHERE id_player = :id');
    $query -> execute([
        'id' => $id
    ]);
    return $query->fetch();
}

function getPosition($id){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM position WHERE id_position = :id');
    $query -> execute([
        'id' => $id
    ]);
    return $query->fetch();
}

?>
<?php
//Checking connection function
function checkConnexion(){
    if(empty($_SESSION) || empty($_SESSION['username'])){
        header('Location: index.php');
    }
}

//Function to retrieve players on database
function getAllPlayers(){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM player');
    $query -> execute();
    return $query->fetchAll();
}

//Function to retrieve positions on database
function getAllPositions(){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM position');
    $query -> execute();
    return $query->fetchAll();
}

//Function to retrieve one player on database
function getPlayer($id){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM player WHERE id_player = :id');
    $query -> execute([
        'id' => $id
    ]);
    return $query->fetch();
}

//Function to retrieve one position on database
function getPosition($id){
    require './parts/bdd-connection.php';
    $query = $pdo->prepare('SELECT * FROM position WHERE id_position = :id');
    $query -> execute([
        'id' => $id
    ]);
    return $query->fetch();
}

?>
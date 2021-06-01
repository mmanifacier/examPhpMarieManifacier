<?php
    session_start();

    if(empty($_POST['username']) && empty($_POST['password'])){
        header("Location: ../login.php?error=no-saisie");
    } elseif (empty($_POST['username'])){
        header("Location: ../login.php?error=no-username");
    } elseif (empty($_POST['password'])){
        header("Location: ../login.php?error=no-password");
    } else {
        if ($_POST['username'] == 'ddechamps' && $_POST['password'] == 'ddechamps') {
            $_SESSION['username'] = $_POST['username'];
            header("Location: ../admin.php");
        } else {
            header("Location: ../login.php?error=bad-credentials");
        }
    }
?>
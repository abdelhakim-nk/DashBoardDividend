<?php

// Je démarre la session
session_start();

// Si la session n'éxiste pas je redirige vers la page de connection
if (!isset($_SESSION['user'])) {
    header('Location:Connection.php');
    die();
}

$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/assets/configuration/DataBase.php";
include_once($pathDb);

// Je verifie que les variables existent et ne sont pas vide
if (!empty($_POST['current_pseudo']) && isset($_POST['current_pseudo']) && !empty($_POST['current_password']) && isset($_POST['current_password']) && !empty($_POST['new_password']) && isset($_POST['new_password']) && !empty($_POST['new_password_retype']) && isset($_POST['new_password_retype'])) {

    $current_pseudo = htmlspecialchars($_POST['current_pseudo']);
    $current_password = htmlspecialchars($_POST['current_password']);
    $new_password = htmlspecialchars($_POST['new_password']);
    $new_password_retype = htmlspecialchars($_POST['new_password_retype']);


    // requete preparé afin de verifier si il ya une correspondance dans ma BDD entre le mot de passe entrer et un existant
// Connectionion a ma BDD
    $pdo = ConnexionDb::getConnexionDb();
    $verify_password = $pdo->prepare('SELECT password FROM utilisateurs WHERE pseudo = :pseudo');
    $verify_password->execute((array(
        "pseudo" => $_SESSION['user']
    )));
    $data_password = $verify_password->fetch();
    var_dump($data_password);
    if (hash("sha256", $current_password) == $data_password['password']) {

        if ($new_password == $new_password_retype) {

            $new_password = hash("sha256", $new_password);
            $update = $pdo->prepare('UPDATE utilisateurs SET password = :password WHERE pseudo = :pseudo');
            $update->execute(array(
                "password" => $new_password,
                "pseudo" => $_SESSION['user']
            ));
             header('Location:landing.php?err=success_password');
            die();
        }
    } else {
         header('Location:landing.php?err=current_password');
        die();
    }
}

<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/assets/configuration/DataBase.php";
session_start();
include_once($pathDb);

/*
 * je verifie que mes deux champs input (email et password) existe bien
 */

if (isset($_POST['email']) && isset($_POST['password'])) {
    /* Utilisation de htmlspecialchars pour eviter les failles de sécurité*/
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $pdo = ConnexionDb::getConnexionDb();
    /* Je verifie que le user est bien inscrit dans note BDD*/
    $check = $pdo->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    /*Je stock les données dans data que je vais chercher avec fetch*/
    $data = $check->fetch();
    /* Ensuite grace a rowCount nous verifions que l'email existe ou non si rowCount = 1 alors il existe sinon il nexiste pas*/
    $row = $check->rowCount();

    if ($row == 1) {

        /*Verification de la syntaxe de l'email*/
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            /*Cryptage du password */
            $password = hash("sha256", $password);

            /* On verifie que le password entré est identique a celui enregistrer dans la BDD pour cette email */
            if ($data['password'] === $password) {
                /* Creation d'une session que j'apelle user et je lui attribut le pseudo du user comme valeur*/
                $_SESSION['user'] = $data['pseudo'];
                header('Location: /ProjectFinance/Index.php');
            } else header('Location: Connection.php?login_err=password');

        } else header('Location: Connection.php?login_err=email');

    }    else header('Location: Connection.php?login_err=already');

} else header('Location: Connection.php');
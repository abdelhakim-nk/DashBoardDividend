<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/assets/configuration/DataBase.php";
include_once($pathDb);

if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) {
    // htmlspecialchars pour sécurisé se que le user entre dans la BDD
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $pdo = ConnexionDb::getConnexionDb();
    // Je verifie que le user est inscrit ou non dans notre BDD
    $check = $pdo->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    // Je stock les données dans data que je vais chercher avec fetch
    $data = $check->fetch();
    // Ensuite grace a rowCount nous verifions que l'email existe ou non si rowCount = 1 alors il existe sinon il nexiste pas
    $row = $check->rowCount();

    if ($row == 0) {
        if (strlen($pseudo) <= 100) {
            if (strlen($email) <= 100) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($password == $password_retype) {
                        $password = hash("sha256", $password);
                        // L'adresse IP du client qui demande la page courante.
                        $ip = $_SERVER['REMOTE_ADDR'];

                        $insert = $pdo->prepare('INSERT INTO utilisateurs(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)');
                        $insert->execute(array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password,
                            'ip' => $ip
                        ));
                        header('Location: Registration.php?reg_err=success');
                    } else header('Location: Registration.php?reg_err=password');
                } else header('Location: Registration.php?reg_err=email');
            } else header('Location: Registration.php?reg_err=email_to_big');
        } else header('Location: Registration.php?reg_err=pseudo_to_big');


    } else header('Location:Registration.php?reg_err=already_register');
}
<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/assets/configuration/DataBase.php";
include_once($pathDb);

$email = 'hakim@gmail.com';


$pdo = ConnexionDb::getConnexionDb();
/* Je verifie que le user est bien inscrit dans note BDD*/
$check = $pdo->prepare('SELECT pseudo, email, password, avatar FROM utilisateurs WHERE email = ?');
$check->execute(array($email));
/*Je stock les données dans data que je vais chercher avec fetch*/
$data = $check->fetch();
var_dump($data);
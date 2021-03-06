<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:controller/view/memberArea/Connection.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Home page project finance</title>
</head>
<body>

<h1>Home</h1>

<?php
include_once('controller/view/home/HomeNavMenu.php');
?>

<div id="container">
    <div class="home_img">
        <img src="assets/img/stock exchange.png" alt="stock Exchange">
    </div>
    <div class="home_img">
        <img src="assets/img/dividend board.png" alt="Dividends">
    </div>
    <div class="home_img">
        <img src="assets/img/graphic.png" alt="Grapic">
    </div>
    <div class="home_img">
        <img src="assets/img/news_actu.jpg" alt="Grapic">
    </div>
</div>

<p>Ce tableau de bord servira de support à tous vos investissements en bourse, il vous permettra d'analyser les
    dividendes de centaines d'entreprises sur plusieurs années et ainsi de comparer les différentes évolutions chaque
    année sûre c'est même entreprise.</p>

<p>Vous y trouverez des documents, des tableaux, des graphiques et de nombreuses fonctionnalités qui, je l'espère, vous
    aideront dans vos investissements en bourse.</p>


<!-- ======= IONICONS ======== -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<!-- ======= MAIN JS ======== -->
<script src="controller/view/home/javascript/main.js"></script>
</body>
</html>
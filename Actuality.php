<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:memberArea/Connection.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Home page project finance</title>
</head>
<body>

<h1>Business Actuality</h1>


<?php
include_once('home/HomeNavMenu.php');
include_once('home/HomeActualite.php');
?>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="home/javascript/main.js"></script>
<script src="home/javascript/JqueryActualite.js"></script>
</body>
</html>
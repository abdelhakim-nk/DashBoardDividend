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
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <title>Home page project finance</title>
</head>
<body>

<h1>Graphique</h1>


<?php
include_once('home/HomeNavMenu.php');
?>

<?php
include_once('AllGraph.php');
?>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="../../assets/jquery/dist/jquery.min.js"></script>
<script src="home/javascript/main.js"></script>
<script src="jquery/TableWithPaginationAndDividendJquery.js"></script>
</body>
</html>
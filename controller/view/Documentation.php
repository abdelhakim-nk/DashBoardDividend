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


    <title>Home page project finance</title>
</head>
<body>

<h1>Documentation</h1>


<?php
include_once('home/HomeNavMenu.php');
?>


<p>Le profit d'un investissement en actions pour l'actionnaire peut provenir de deux formes: la plus-value qui
    représente l'augmentation de la valeur de l'entreprise, ou le dividende. </p>

<h3>Quesqu'un dividend ?</h3>
<p>Le dividende représente le revenu versé par la société à ses actionnaires une ou plusieurs fois par an (certaines
    sociétés effectuent un dépôt de dividende). Le montant du versement est proposé par le Conseil d'Administration lors
    de l'Assemblée Générale Ordinaire et voté par les actionnaires. Ce sont donc les actionnaires de l'entreprise qui
    prennent la décision et il est logique qu'ils décident à un moment donné de se rémunérer, en payant une partie des
    bénéfices annuels de l'entreprise.</p>

<h3>Comment les dividendes sont-ils payés aux actionnaires ?</h3>
<p>Afin de pouvoir distribuer des dividendes aux actionnaires, l'assemblée générale de la société doit établir
    l'existence d'un bénéfice annuel distribuable, ou puiser dans ses réserves. Le montant total du dividende payé est
    alors
    tirée de la liquidité de l’entreprise. Même si les actionnaires sont rémunérés sur le dividende, ils peuvent
    également décider de
    payer peu ou pas de dividende. Ils espèrent que cet argent, qui ne sera pas distribué, sera investi dans des
    projets, qui finiront par augmenter la valeur de l'entreprise.</p>

<h3>Le calendrier des dividendes</h3>
<p>Le calendrier de détachement du dividende est fixé par l'assemblée générale. La date du détachement est
    la date à laquelle le dividende d'une action est détaché de l'action. Tous les actionnaires détenant l'action au
    fermer la veille de l'affichage recevra le dividende. La date de paiement intervient 3 jours ouvrables après la date
    de
    détachement. Même si un actionnaire vend sa part entre le jour du détachement et le jour du paiement, il
    reçoit toujours le dividende. Certaines entreprises choisissent de faire un dépôt de dividende. Cette méthode permet
    aux actionnaires de
    distribuer une partie des bénéfices sans avoir à attendre l'approbation des comptes après la fin de
    l'année financière.</p>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="../../assets/jquery/dist/jquery.min.js"></script>
<script src="home/javascript/main.js"></script>
</body>
</html>
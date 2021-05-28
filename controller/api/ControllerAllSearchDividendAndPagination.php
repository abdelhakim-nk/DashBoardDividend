<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
include_once($pathCompany);
include_once($pathToolsTest);
include_once($pathCompanyService);


// Condition pour les recherches de dividend
if (isset($_GET['yield']) and !empty($_GET['yield']) and (int)$_GET['yield']) {
    $yield = htmlspecialchars($_GET['yield']);

} else {
    $yield = 0;
}


// Condition pour la pagination
// je verifie que  $_GET['page'] existe et n'est pas vide je verifie aussi que se qui mes renvoyer est bien un integer si sa n'est pas le cas mon else s'active et renvoie la page 1
if (isset($_GET['page']) and !empty($_GET['page']) and (int)$_GET['page']) {
    $pageCourante = htmlspecialchars((int)$_GET['page']);
} else {
    // si aucun param alors on se retrouvera sur la page 1
    $pageCourante = 1;
}


$nbRowTotal = CompanyService::companyNbRow()[0]['nbRow'];
$articleByPages = 16;
// fonction qui me permet d'arrondir au nombre superieur
$totalPages = ceil($nbRowTotal / $articleByPages);
// contiens l'element de depart pour chaque page
$start = ($pageCourante - 1) * $articleByPages;


$resultAllWithDividendAndPagination = json_encode(CompanyService::companyGetAllWithPossibilitySearchingByDividendAndPagination($yield, $start, $articleByPages));
header('Content-type: application/json');
echo $resultAllWithDividendAndPagination;
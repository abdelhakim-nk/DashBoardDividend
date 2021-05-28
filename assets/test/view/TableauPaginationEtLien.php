<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);

// je verifie que  $_GET['page'] existe et n'est pas vide je verifie aussi que se qui mes renvoyer est bien un integer si sa n'est pas le cas mon else s'active et renvoie la page 1
if (isset($_GET['page']) and !empty($_GET['page']) and (int)$_GET['page']) {
    $pageCourante = htmlspecialchars((int)$_GET['page']);
} else {
    // si aucun param alors on se retrouvera sur la page 1
    $pageCourante = 1;
}

$nbRowTotal = CompanyService::companyNbRow()[0]['nbRow'];
$articleByPages = 20;
// fonction qui me permet d'arrondir au nombre superieur
$totalPages = ceil($nbRowTotal / $articleByPages);
// contiens l'element de depart pour chaque page
$start = ($pageCourante - 1) * $articleByPages;
$arrayOfAll = CompanyService::companyGetPagination($start, $articleByPages);


echo '<h2>Table Pagination</h2>';
echo '<table style="border: 1px solid black">';
echo '<thead>';
echo '<tr>';
echo '<th>Name<th>';
echo '<th>declaration_date<th>';
echo '<th>Ex_Div_Date<th>';
echo '<th>Pay_Date<th>';
echo '<th>Dividend_Yield<th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
for ($i = 0; $i < sizeof($arrayOfAll); $i++) {
    echo '<tr>';
    echo '<td style="border: 1px solid black"><a href="detailCompanyPourTableauLien.php?id=' . $arrayOfAll[$i]['id'] . '">' . $arrayOfAll[$i][Company::NAME] . '</a></td>';
    echo '<td style="border: 1px solid black">' . $arrayOfAll[$i][Company::DECLARATION_DATE] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayOfAll[$i][Company::EX_DIV_DATE] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayOfAll[$i][Company::PAY_DATE] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayOfAll[$i][Company::DIVIDEND_YIELD] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';


if ($pageCourante > 1) {
    echo "<button><a href='TableauPaginationEtLien.php?page=" . ($pageCourante - 1) . "'>Previous</a></button>";
}

echo '<select>';

for ($page = 1; $page <= $totalPages; $page++) {
    echo '<option><a href="TableauPaginationEtLien.php?page=' . $page . '">' . $page . '</option>';
}

echo '</select>';

if ($pageCourante < $totalPages) {
    echo "<button><a href='TableauPaginationEtLien.php?page=" . ($pageCourante + 1) . "'>Next</a></button>";
}


echo "<br>";
echo "<strong> Page " . $pageCourante . " sur " . $totalPages . "</strong>";

?>
<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">';


echo "<h2 style='text-align: center'>Table of all with possibility to searching by dividend with pagination</h2>";


if (isset($_GET['page']) and !empty($_GET['page']) and (int)$_GET['page']) {
    $pageCourante = htmlspecialchars((int)$_GET['page']);
} else {
    $pageCourante = 1;
}

if (isset($_GET['yield']) and !empty($_GET['yield']) and (int)$_GET['yield']) {
    $yield = $_GET['yield'];

} else {
    $yield = 0;
}

$nbRowTotal = CompanyService::companyNbRow()[0]['nbRow'];
$articleByPages = 20;
// fonction qui me permet d'arrondir au nombre superieur
$totalPages = ceil($nbRowTotal / $articleByPages);
// contiens l'element de depart pour chaque page
$start = ($pageCourante - 1) * $articleByPages;


$resultOfAll = CompanyService::companyGetAllWithPossibilitySearchingByDividendAndPagination($yield, $start, $articleByPages);

echo '<form action="TableauAllWithDividendAndPagination.php" method="get" name="Formulaire" id="Formulaire">';
echo '<input type="number" placeholder=" Searching by dividend" name="yield" id="yield" style="margin-left: 1em">';
echo '<button type="submit" value="Search" class="btn btn-primary" style="margin-left: 1em">Search</button>';
echo '<button style="margin-left: 1em" class="btn btn-warning"><a href="TableauAllWithDividendAndPagination.php?page=' . $pageCourante . '"&yield=0">Reset</a></button>';
echo '</form>';
echo '<table class="table table-striped table-dark">';
echo '<thead>';
echo '<tr>';
echo '<th  style="border: 1px solid black">Name</th>';
echo '<th  style="border: 1px solid black">Symbol</th>';
echo '<th  style="border: 1px solid black">declaration_date</th>';
echo '<th  style="border: 1px solid black">Ex_Div_Date</th>';
echo '<th  style="border: 1px solid black">Pay_Date</th>';
echo '<th  style="border: 1px solid black">Dividend_Yield</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
for ($i = 0; $i < sizeof($resultOfAll); $i++) {
    echo '<tr>';
    echo '<td  style="border: 1px solid black">' . $resultOfAll[$i][Company::NAME] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultOfAll[$i][Company::SYMBOL] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultOfAll[$i][Company::DECLARATION_DATE] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultOfAll[$i][Company::EX_DIV_DATE] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultOfAll[$i][Company::PAY_DATE] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultOfAll[$i][Company::DIVIDEND_YIELD] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

if ($pageCourante > 1) {
    echo "<button><a href='TableauAllWithDividendAndPagination.php?page=" . ($pageCourante - 1) . "&yield=" . $yield . "'>Previous</a></button>";
}


if ($pageCourante < $totalPages) {
    echo "<button><a href='TableauAllWithDividendAndPagination.php?page=" . ($pageCourante + 1) . "&yield=" . $yield . "'>Next</a></button>";
}


echo "<br>";
echo "<strong> Page " . $pageCourante . " sur " . $totalPages . "</strong>";

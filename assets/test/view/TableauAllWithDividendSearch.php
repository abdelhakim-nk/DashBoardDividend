<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);

echo "<h2>Table of all with possibility to searching by dividend</h2>";


if (isset($_GET['SearchWithDividend']) and !empty($_GET['SearchWithDividend']) and (int)$_GET['SearchWithDividend']) {
    $yield = $_GET['SearchWithDividend'];
    echo '<p>searches for all companies with a dividend equal to = ' . $_GET['SearchWithDividend'] . '</p>';

} else {
    $yield = Company::DIVIDEND_YIELD;
}

$resultAllWithDividend = CompanyService::companyGetAllWithPossibilitySearchingByDividend($yield);

echo '<form action="TableauAllWithDividendSearch.php" method="get" name="Formulaire" id="Formulaire">';
echo '<input type="number" placeholder="Searching by dividend" name="SearchWithDividend" id="SearchWithDividend">';
echo '<input type="submit" value="Search">';
echo '</form>';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th  style="border: 1px solid black">Name<th>';
echo '<th  style="border: 1px solid black">Symbol<th>';
echo '<th  style="border: 1px solid black">declaration_date<th>';
echo '<th  style="border: 1px solid black">Ex_Div_Date<th>';
echo '<th  style="border: 1px solid black">Pay_Date<th>';
echo '<th  style="border: 1px solid black">Dividend_Yield<th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
for ($i = 0; $i < sizeof($resultAllWithDividend); $i++) {
    echo '<tr>';
    echo '<td  style="border: 1px solid black">' . $resultAllWithDividend[$i][Company::NAME] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultAllWithDividend[$i][Company::SYMBOL] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultAllWithDividend[$i][Company::DECLARATION_DATE] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultAllWithDividend[$i][Company::EX_DIV_DATE] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultAllWithDividend[$i][Company::PAY_DATE] . '</td>';
    echo '<td  style="border: 1px solid black">' . $resultAllWithDividend[$i][Company::DIVIDEND_YIELD] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

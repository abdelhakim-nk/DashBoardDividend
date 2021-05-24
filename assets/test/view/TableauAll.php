<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);

$arrayCompany = CompanyService::companyGetAll();
echo '<h2>Table simple</h2>';
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
for ($i = 0; $i < sizeof($arrayCompany); $i++) {
    echo '<tr>';
    echo '<td style="border: 1px solid black">' . $arrayCompany[$i][Company::NAME] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayCompany[$i][Company::DECLARATION_DATE] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayCompany[$i][Company::EX_DIV_DATE] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayCompany[$i][Company::PAY_DATE] . '</td>';
    echo '<td style="border: 1px solid black">' . $arrayCompany[$i][Company::DIVIDEND_YIELD] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '<button onclick="./indexView.php&page=".$numPage++>Page Suivante</button>';

?>
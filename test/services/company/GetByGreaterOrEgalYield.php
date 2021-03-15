<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$yieldParam = 15;

echo "<h3 style='text-decoration: underline'>(Function companyGreaterOrEgalYield) Yield greater than or equal to a given yield</h3>";

echo('test if array company is not NULL or empty : ');
$arraiReponse = CompanyService::companyGreaterOrEgalYield($yieldParam);
echo(sizeof($arraiReponse) > 0 ? $succes : $echec );

echo "<br>";
echo "<br>";

echo('test if element of array company is great or egal of Yield param: ');

for ($i=0; $i < sizeof($arraiReponse); $i++){
    echo "<br>";
    echo ('check if '.$arraiReponse[$i]['dividend_yield'].' >= '. $yieldParam . " : ");
    echo ($arraiReponse[$i]['dividend_yield'] >= $yieldParam ? $succes : $echec);
}


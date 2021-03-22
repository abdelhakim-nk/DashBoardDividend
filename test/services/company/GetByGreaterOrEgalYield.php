<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$yieldParam = 15;

echo "<h3 style='text-decoration: underline'>(Function companyGreaterOrEgalYield) Yield greater than or equal to a given yield</h3>";

echo('test if array company is not NULL or empty : ');
$arrayReponse = CompanyService::companyGreaterOrEgalYield($yieldParam);
echo(sizeof($arrayReponse) > 0 ? $succes : $echec );

echo "<br>";
echo "<br>";

echo('test if element of array company is great or egal of Yield param: ');

for ($i=0; $i < sizeof($arrayReponse); $i++){
    echo "<br>";
    echo ('check if '.$arrayReponse[$i][company::DIVIDEND_YIELD].' >= '. $yieldParam . " : ");
    echo ($arrayReponse[$i][company::DIVIDEND_YIELD] >= $yieldParam ? $succes : $echec);
}


<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$startDate = '2021-09-11';
$endDate = '2021-11-11';

echo "<h3 style='text-decoration: underline' >(Function companyBetweenDate) Find company with ex dividend date between two date</h3>";
echo('test to verify that we are returning data : ');
$arrayReponse = CompanyService::companyBetweenDate($startDate,$endDate);
echo ( sizeof($arrayReponse) > 0 ? $succes : $echec);

echo "<br>";
echo "<br>";

echo ('test to check if our table returns us dates included in the interval of two defined dates : ');
echo "<br>";
for ($i=0; $i < sizeof($arrayReponse);$i++)
{
    echo ('check if '.$arrayReponse[$i][Company::EX_DIV_DATE].' is in the interval of '.$startDate.' AND '.$endDate.' : ');
    echo ($arrayReponse[$i][Company::EX_DIV_DATE] >= $startDate && $arrayReponse[$i][company::EX_DIV_DATE] <= $endDate ? $succes : $echec );
    echo "<br>";
}
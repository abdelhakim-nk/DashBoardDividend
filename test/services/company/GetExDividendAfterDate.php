<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$afterDate = '2021-11-11';

echo "<h3 style='text-decoration: underline'>(Function companyAfterDate) Find company with ex dividend date after predefined date : </h3>";
echo('test to verify that we are returning data : ');
$arraiReponse = CompanyService::companyAfterDate($afterDate);
echo (sizeof($arraiReponse) > 0 ? $succes : $echec);

echo "<br>";
echo "<br>";


echo('test to check that the function returns all the dates greater than the one chosen : ');
echo "<br>";

for ($i=0;$i < sizeof($arraiReponse);$i++)
{
    echo ('check if ' .$arraiReponse[$i][Company::EX_DIV_DATE].' is > of 2021-11-11 : ');
    echo ($arraiReponse[$i][Company::EX_DIV_DATE] > '2021-11-11' ? $succes : $echec);
    echo "<br>";
}
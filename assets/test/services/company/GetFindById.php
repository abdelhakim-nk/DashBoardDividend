<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h3 style='text-decoration: underline'>(Function companyFindById) Search for the company with the id entered in parameter</h3>";


$id = 1222;
$arrayReponse = CompanyService::companyFindById($id);

echo('view if array is not NULL or empty : ');
echo(sizeof($arrayReponse) > 0 ? $succes : $echec);

echo "<br>";
echo "<br>";

echo('check the company with the id : '.$id);
echo "<br>";
echo(json_encode($arrayReponse));

echo "<br>";
echo "<br>";

echo('Checking if '.$id.' is an integer or not');

if (is_int($id)){
    echo($succes);
} else{
    echo($echec);
}

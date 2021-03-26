<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h3 style='text-decoration: underline'>(Function companyFindByName) search all my companies starting with the letter entered in parameter</h3>";

$name = 'por';
echo('Test to tranform array in json : ');

echo "<br>";
echo "<br>";

echo(json_encode(CompanyService::companyFindByName($name)));
$arrayReponse = CompanyService::companyFindByName($name);

echo "<br>";
echo "<br>";

echo('test if array company is not NULL or empty : ');
echo(sizeof($arrayReponse) > 0 ? $succes : $echec);

echo "<br>";

echo('Test to check if the company returned from the table begins with the letters entered in the parameter : ');

echo "<br>";

for ($i = 0; $i < sizeof($arrayReponse); $i++) {
    echo "<br>";
    echo('Test If ' . $arrayReponse[$i][company::NAME] . ' content param : ' . $name);
    echo(stristr($arrayReponse[$i][company::NAME], $name) !== false ? $succes : $echec);
}
echo('Test to verify if my exception is returned : ');

$name = 'a';
try {
    $arrayReponse = CompanyService::companyFindByName($name);
    echo($echec);

} catch (Error $e) {
    echo($succes);
    echo($e->getMessage() != NULL ? $succes : $echec);
}

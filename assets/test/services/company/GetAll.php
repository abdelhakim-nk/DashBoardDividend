<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h3 style='text-decoration: underline'>(Function companyGetAll) Recover all of my collones in the company table</h3>";
echo('view get all company returning data : ');

echo(sizeof(CompanyService::companyGetAll()) > 0 ? $succes : $echec);
<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h3 style='text-decoration: underline'>(Function companyFindByPaydDate) Return all the Payd date of my table</h3>";
echo('view All company payd date : ');

echo(sizeof(CompanyService::CompanyPaydDate()) > 0 ? $succes : $echec);
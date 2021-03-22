<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonFindByName = json_encode(CompanyService::companyFindByName($_GET['name']));
header('Content-type: application/json');
echo($resultJsonFindByName);



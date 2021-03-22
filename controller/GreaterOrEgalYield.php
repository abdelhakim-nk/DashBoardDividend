<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonGreaterOrEgalYield = json_encode(CompanyService::companyGreaterOrEgalYield($_GET['yield']));
header('Content-type: application/json');
echo ($resultJsonGreaterOrEgalYield);

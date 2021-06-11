<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
include_once($pathCompany);
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonOfAll = json_encode(CompanyService::companyPaydDate());
header('Content-type: application/json');
echo ($resultJsonOfAll);
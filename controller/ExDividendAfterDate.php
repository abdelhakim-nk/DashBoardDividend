<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonExDividendAfterDate = json_encode(CompanyService::companyAfterDate($_GET['afterDate']));
header('Content-type: application/json');
echo($resultJsonExDividendAfterDate);



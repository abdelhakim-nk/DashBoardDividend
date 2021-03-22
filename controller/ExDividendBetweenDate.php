<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonExDividendBetweenDate = json_encode(CompanyService::companyBetweenDate($_GET['startDate'],$_GET['endDate']));
header('Content-type: application/json');
echo ($resultJsonExDividendBetweenDate);
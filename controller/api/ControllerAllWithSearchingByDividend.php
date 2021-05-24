<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
$pathCompany = $pathRoot . "/ProjectFinance/domaine/Company.php";
include_once($pathCompany);
include_once($pathToolsTest);
include_once($pathCompanyService);

$yield = Company::DIVIDEND_YIELD;

$resultAllWithSearchingByDividend = json_encode(CompanyService::companyGetAllWithPossibilitySearchingByDividend($yield));
header('Content-type: application/json');
echo $resultAllWithSearchingByDividend;

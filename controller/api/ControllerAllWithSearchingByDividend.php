<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
include_once($pathCompany);
include_once($pathToolsTest);
include_once($pathCompanyService);


if (isset($_GET['yield']) and !empty($_GET['yield']) and (int)$_GET['yield']) {
    $yield = htmlspecialchars($_GET['yield']);

} else {
    $yield = 0;
}

$resultAllWithSearchingByDividend = json_encode(CompanyService::companyGetAllWithPossibilitySearchingByDividend($yield));
header('Content-type: application/json');
echo $resultAllWithSearchingByDividend;

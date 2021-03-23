<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonExDividendAfterDate = json_encode(CompanyService::companyAfterDate($_GET['afterDate']));
header('Content-type: application/json');

try {
    if (!empty($_GET['afterDate'])) {
        http_response_code(200);
        echo($resultJsonExDividendAfterDate);
    } else {
        http_response_code(400);
        throw new InvalidArgumentException('Please enter a correct date', 400);

    }
} catch (InvalidArgumentException $e) {
    echo json_encode(array("succes" => false, "message" => $e->getMessage(), "code" => $e->getCode()));
}
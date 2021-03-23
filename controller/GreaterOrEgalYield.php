<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonGreaterOrEgalYield = json_encode(CompanyService::companyGreaterOrEgalYield($_GET['yield']));
header('Content-type: application/json');


try {
    if (is_numeric($_GET['yield'])) {
        http_response_code(200);
        echo ($resultJsonGreaterOrEgalYield);
    } else {
        http_response_code(400);
        throw new InvalidArgumentException("Bad Request : Please enter a number",400);
    }
} catch (InvalidArgumentException $e) {
    echo json_encode(array("message" => $e->getMessage(), "code" => $e->getCode()));
}

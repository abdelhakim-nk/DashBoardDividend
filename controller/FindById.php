<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonFindById = json_encode(CompanyService::companyFindById($_GET['id']));
header('Content-type: application/json');


try {
    if (is_numeric($_GET['id'])) {
        http_response_code(200);
        echo($resultJsonFindById);
    } else {
        throw new InvalidArgumentException("Bad Request : Please enter a number", 400);
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo json_encode(array("message" => $e->getMessage(), "code" => $e->getCode()));
}

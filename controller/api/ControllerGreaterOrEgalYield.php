<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);


try {
    if (is_numeric($_GET['yield'])) {
        http_response_code(200);
        header('Content-type: application/json');
        echo(json_encode(CompanyService::companyGreaterOrEgalYield($_GET['yield'])));
    } else {
        throw new InvalidArgumentException("Bad Request : Please enter a number");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    header('Content-type: application/json');
    echo json_encode(array("message" => " Bad Request : " . $e->getMessage(), "code" => 400));
} catch (Exception $e) {
    http_response_code(500);
    header('Content-type: application/json');
    echo json_encode(array("message" => 'Error server', "code" => 500));
}

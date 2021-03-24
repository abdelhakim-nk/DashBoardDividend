<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);


try {
    if (is_numeric($_GET['id'])) {
        http_response_code(200);
        header('Content-type: application/json');
        echo(json_encode(CompanyService::companyFindById($_GET['id'])));
    } else {
        throw new InvalidArgumentException("Please enter a number");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    header('Content-type: application/json');
    echo json_encode(array("message" => "Bad Request : " . $e->getMessage(), "code" => 400));
} catch (Exception $e) {
    http_response_code(500);
    header('Content-type: application/json');
    echo json_encode(array("message" => 'Error server', "code" => 500));
}

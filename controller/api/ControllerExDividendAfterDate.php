<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);


try {
    if (!empty($_GET['afterDate'])) {
        http_response_code(200);
        header('Content-type: application/json');
        echo(json_encode(CompanyService::companyAfterDate($_GET['afterDate'])));
    } else {
        http_response_code(400);
        throw new InvalidArgumentException('Please enter a correct date');

    }
} catch (InvalidArgumentException $e) {
    header('Content-type: application/json');
    echo json_encode(array("message" => "Bad Request : ". $e->getMessage(), "code" => 400));
} catch (Exception $e) {
    http_response_code(500);
    header('Content-type: application/json');
    echo json_encode(array("message" => 'Error server', "code" => 500));
}
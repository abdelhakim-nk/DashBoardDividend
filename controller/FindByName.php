<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);


$resultJsonFindByName = json_encode(CompanyService::companyFindByName($_GET['name']));
header('Content-type: application/json');

try {
    if (strlen($_GET['name']) >= 3) {
        http_response_code(200);
        echo($resultJsonFindByName);
    } else {
        throw new InvalidArgumentException("Bad Request : The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).", 400);
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo json_encode(array("message" => $e->getMessage(), "code" => $e->getCode()));
}

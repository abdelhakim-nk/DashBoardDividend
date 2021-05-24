<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);


try {
    if (strlen($_GET['name']) >= 3) {
        http_response_code(200);
        header('Content-type: application/json');
        echo(json_encode(CompanyService::companyFindByName($_GET['name'])));
    } else {
        throw new InvalidArgumentException("The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).");
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

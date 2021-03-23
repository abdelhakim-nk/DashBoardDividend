<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

$resultJsonExDividendBetweenDate = json_encode(CompanyService::companyBetweenDate($_GET['startDate'],$_GET['endDate']));
header('Content-type: application/json');

try {
    if (!empty($_GET['startDate']) and !empty($_GET['endDate'])){
        http_response_code(200);
        echo ($resultJsonExDividendBetweenDate);
    } else {
        http_response_code(400);
        throw new Error('please enter a start and end date !', 400);

    }
}catch(Error $e){
    echo json_encode(array("message" => $e->getMessage(),"code" => $e->getCode()));
}
<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

header('Content-type: application/json');
echo json_encode(CompanyService::companyBetweenDate($_GET['startDate'], $_GET['endDate']));


try {
    if (!empty($_GET['startDate']) and !empty($_GET['endDate'])){
        http_response_code(200);
        header('Content-type: application/json');
        echo (json_encode(CompanyService::companyBetweenDate($_GET['startDate'],$_GET['endDate'])));
    }else {
        http_response_code(400);
        throw new Error('please enter a start and end date !', 400);
    }
}catch(Error $e){
    header('Content-type: application/json');
    echo json_encode(array("message" => $e->getMessage(),"code" => $e->getCode()));
} catch (Exception $e) {
    http_response_code(500);
    header('Content-type: application/json');
    echo json_encode(array("message" => 'Error server', "code" => 500));
}
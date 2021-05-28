<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

if (isset($_GET['page']) and !empty($_GET['page']) and (int)$_GET['page']){
    $pageCourante = htmlspecialchars((int)$_GET['page']);
} else {
    $pageCourante = 1;
}

$nbRowTotal = CompanyService::companyNbRow()[0]['nbRow'];
$nbArticleByPage = 20;
$nbTotalPage = ceil($nbRowTotal / $nbArticleByPage);
$start = ($pageCourante - 1) * $nbArticleByPage;


$resultJsonPagination = json_encode(CompanyService::companyGetPagination($start, $nbArticleByPage));
header('Content-type: application/json');
echo ($resultJsonPagination);

<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);


$id = $_GET[Company::ID];
$arrayOfTheCompanyWithId = CompanyService::companyFindById($id);

echo "<h2>Déscription de la company</h2>";

echo "La company " . $arrayOfTheCompanyWithId[0]['name']." portant l'abréviation ".$arrayOfTheCompanyWithId[0]['symbol'];
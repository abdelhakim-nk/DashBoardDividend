<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h2 style='text-decoration: underline'>Test to check my fonction Ex Dividend Between Date if my exceptions are correctly raised when the user enters a bad parameter or for another general error</h2>";


echo "<h3 style='text-decoration: underline'>Test if the user enter one date</h3>";

try {
    $startDate = '';
    $endDate = '2021-12-02';
    if (!empty($startDate) and !empty($endDate)) {
        http_response_code(200);
        echo('the date ' . $startDate . " And " . $endDate . ' is entered in the parameter' . $succes);
    } else {
        http_response_code(400);
        throw new InvalidArgumentException('please enter a start and end date ! ');
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . "code error  " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}

echo '<br>';
echo '<br>';

echo "<h3 style='text-decoration: underline'>Test if the user enter two date</h3>";

try {
    $startDate = '2021-11-02';
    $endDate = '2021-12-02';
    if (!empty($startDate) and !empty($endDate)) {
        http_response_code(200);
        echo('the date ' . $startDate . " And " . $endDate . ' is entered in the parameter' . $succes);
    } else {
        http_response_code(400);
        throw new InvalidArgumentException('please enter a start and end date ! ');
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . "code error  " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}
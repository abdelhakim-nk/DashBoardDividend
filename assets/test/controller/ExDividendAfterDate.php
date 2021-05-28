<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);


echo "<h2 style='text-decoration: underline'>Test to check my fonction Ex Dividend After Date if my exceptions are correctly raised when the user enters a bad parameter or for another general error</h2>";


echo "<h3 style='text-decoration: underline'>Test if the user enter a date</h3>";

try {
    $dateParam = '2021-05-03';
    if (!empty($dateParam)) {
        http_response_code(200);
        echo('the date '.$dateParam.' is entered in the parameter'. $succes);
    } else {
        http_response_code(400);
        throw new InvalidArgumentException('Please enter a date');

    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo ("Bad Request : " . $e->getMessage() . "code error  ". 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo ("message Error server code : ". 500);
}

echo "<br>";
echo "<br>";

echo "<h3 style='text-decoration: underline'>Test if the user does not enter a date</h3>";

try {
    $dateParam = '';
    if (!empty($dateParam)) {
        http_response_code(200);
        echo('the date :  is entered in the parameter'. $succes);
    } else {
        http_response_code(400);
        throw new InvalidArgumentException('Please enter a date. ');

    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo ("Bad Request : " . $e->getMessage() . "code error  ". 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo ("message Error server code : ". 500);
}
<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h2 style='text-decoration: underline'>Test to check my fonction Greater Or Egal Yield if my exceptions are correctly raised when the user enters a bad parameter or for another general error</h2>";


echo "<h3 style='text-decoration: underline'>Test if the user enter a string</h3>";
try {
    $string = 'A';
    if (is_numeric($string)) {
        http_response_code(200);
        echo("You have entered this ". $string."is a Good parameter ! " . $succes);
    } else {
        throw new InvalidArgumentException("You have entered this : ".$string." is a wrong parameter please enter a number !. ");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo ("Bad Request : " . $e->getMessage() . "code error  ". 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo ("message Error server code". 500);
}
echo "<br>";
echo "<br>";


echo "<h3 style='text-decoration: underline'>Test if the user enter a special character</h3>";

try {
    $specialChar = '@';
    if (is_numeric($specialChar)) {
        http_response_code(200);
        echo("You have entered this ". $specialChar."is a Good parameter ! " . $succes);
    } else {
        throw new InvalidArgumentException("You have entered this : ".$specialChar." is a wrong parameter please enter a number !. ");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo ("Bad Request : " . $e->getMessage() . "code error  ". 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo ("message Error server code". 500);
}

echo "<br>";
echo "<br>";


echo "<h3 style='text-decoration: underline'>Test if the user enter a string with a number</h3>";

try {
    $stringWithNumber = 'A7';
    if (is_numeric($stringWithNumber)) {
        http_response_code(200);
        echo("You have entered this ". $stringWithNumber."is a Good parameter ! " . $succes);
    } else {
        throw new InvalidArgumentException("You have entered this : ".$stringWithNumber." is a wrong parameter please enter a number !. ");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo ("Bad Request : " . $e->getMessage() . "code error  ". 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo ("message Error server code". 500);
}
echo "<br>";
echo "<br>";


echo "<h3 style='text-decoration: underline'>Test if the user enter a string with a number</h3>";

try {
    $number = '7';
    if (is_numeric($number)) {
        http_response_code(200);
        echo("You have entered this : ". $number." is a Good parameter ! " . $succes);
    } else {
        throw new InvalidArgumentException("You have entered this : ".$number." is a wrong parameter please enter a number !. ");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo ("Bad Request : " . $e->getMessage() . "code error  ". 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo ("message Error server code". 500);
}
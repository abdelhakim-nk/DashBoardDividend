<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h2 style='text-decoration: underline'>Test to check my fonction Ex Dividend Between Date if my exceptions are correctly raised when the user enters a bad parameter or for another general error</h2>";


echo "<h3 style='text-decoration: underline'>Test if the user enter minimum three letters</h3>";

try {
    $name = 'alt';
    if (strlen($name) >= 3) {
        http_response_code(200);
        echo("You enter : " . $name . " its a good parameter" . $succes);
    } else {
        throw new InvalidArgumentException("You enter " . $name . " The number of letter enter is not valid.");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . " code error : " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}

echo '<br>';
echo '<br>';

echo "<h3 style='text-decoration: underline'>Test if the user enter two letters</h3>";

try {
    $name = 'al';
    if (strlen($name) >= 3) {
        http_response_code(200);
        echo("You enter : " . $name . " its a good parameter" . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $name . " The number of letter enter is not valid.");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . " code error : " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}
echo '<br>';
echo '<br>';

echo "<h3 style='text-decoration: underline'>Test if the user does not enter anything</h3>";

try {
    $name = '';
    if (strlen($name) >= 3) {
        http_response_code(200);
        echo("You enter : " . $name . " its a good parameter" . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $name . " The number of letter enter is not valid.");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . " code error : " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}

echo '<br>';
echo '<br>';

echo "<h3 style='text-decoration: underline'>Test if companies starting with numbers are found</h3>";

try {
    $name = 888;
    if (strlen($name) >= 3) {
        http_response_code(200);
        echo("You enter : " . $name . " its a good parameter" . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $name . " The number of letter enter is not valid.");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . " code error : " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}
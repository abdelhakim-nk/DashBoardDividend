<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
$pathToolsTest = $pathRoot . "/ProjectFinance/assets/ToolsAndUtils/ToolsTest.php";
include_once($pathToolsTest);
include_once($pathCompanyService);

echo "<h2 style='text-decoration: underline'>Test to check my fonction Ex Dividend Between Date if my exceptions are correctly raised when the user enters a bad parameter or for another general error</h2>";


echo "<h3 style='text-decoration: underline'>Test if the user enter a integer</h3>";


try {
    $id = 5;
    if (is_numeric($id)) {
        http_response_code(200);
        echo('You enter : ' . $id . ' its a good parameter' . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $id . " Please enter a number");
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


echo "<h3 style='text-decoration: underline'>Test if the user enter a Float</h3>";

try {
    $id = 5.5;
    if (is_numeric($id)) {
        http_response_code(200);
        echo('You enter : ' . $id . ' its a good parameter' . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $id . " Please enter a number");
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


echo "<h3 style='text-decoration: underline'>Test if the user enter a string</h3>";


try {
    $id = 'A';
    if (is_numeric($id)) {
        http_response_code(200);
        echo('You enter : ' . $id . ' its a good parameter' . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $id . " Please enter a number. ");
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


echo "<h3 style='text-decoration: underline'>Test if the user enter a special character </h3>";


try {
    $id = '@';
    if (is_numeric($id)) {
        http_response_code(200);
        echo('You enter : ' . $id . ' its a good parameter' . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $id . " Please enter a number. ");
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


echo "<h3 style='text-decoration: underline'>Test if the user enter a number with a string </h3>";


try {
    $id = 'A7';
    if (is_numeric($id)) {
        http_response_code(200);
        echo('You enter : ' . $id . ' its a good parameter' . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $id . " Please enter a number. ");
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


echo "<h3 style='text-decoration: underline'>Test if the user enter a number with a special character </h3>";


try {
    $id = '@7';
    if (is_numeric($id)) {
        http_response_code(200);
        echo('You enter : ' . $id . ' its a good parameter' . $succes);
    } else {
        throw new InvalidArgumentException("You enter : " . $id . " Please enter a number. ");
    }
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    echo("Bad Request : " . $e->getMessage() . "code error  " . 400 . $echec);
} catch (Exception $e) {
    http_response_code(500);
    echo("message Error server code : " . 500);
}
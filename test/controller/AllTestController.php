<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathTestGetAll = $pathRoot . "/ProjectFinance/test/controller/All.php";
$pathTestGreaterOrEgalYield = $pathRoot . "/ProjectFinance/test/controller/GreaterOrEgalYield.php";
$pathTestExDividendAfterDate = $pathRoot . "/ProjectFinance/test/controller/ExDividendAfterDate.php";
$pathTestExDividendBetweenDate = $pathRoot . "/ProjectFinance/test/controller/ExDividendBetweenDate.php";
$pathTestFindByName = $pathRoot . "/ProjectFinance/test/controller/FindByName.php";
$pathTestFindById = $pathRoot . "/ProjectFinance/test/controller/FindById.php";

echo "<h1 style='text-decoration: underline'>Set of my tests for my controller</h1>";

include_once($pathTestGreaterOrEgalYield);

echo "<br>";
echo "<br>";

include_once($pathTestExDividendAfterDate);

echo "<br>";
echo "<br>";

include_once($pathTestExDividendBetweenDate);

echo "<br>";
echo "<br>";

include_once($pathTestFindById);

echo "<br>";
echo "<br>";

include_once($pathTestFindByName);
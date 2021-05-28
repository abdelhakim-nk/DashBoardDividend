<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathTestGetAll = $pathRoot . "/ProjectFinance/assets/test/controller/ControllerAll.php";
$pathTestGreaterOrEgalYield = $pathRoot . "/ProjectFinance/assets/test/controller/GreaterOrEgalYield.php";
$pathTestExDividendAfterDate = $pathRoot . "/ProjectFinance/assets/test/controller/ExDividendAfterDate.php";
$pathTestExDividendBetweenDate = $pathRoot . "/ProjectFinance/assets/test/controller/ExDividendBetweenDate.php";
$pathTestFindByName = $pathRoot . "/ProjectFinance/assets/test/controller/FindByName.php";
$pathTestFindById = $pathRoot . "/ProjectFinance/assets/test/controller/FindById.php";

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
<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathTestGetAll = $pathRoot . "/ProjectFinance/view/controller/ControllerAll.php";
$pathTestGreaterOrEgalYield = $pathRoot . "/ProjectFinance/view/controller/GreaterOrEgalYield.php";
$pathTestExDividendAfterDate = $pathRoot . "/ProjectFinance/view/controller/ExDividendAfterDate.php";
$pathTestExDividendBetweenDate = $pathRoot . "/ProjectFinance/view/controller/ExDividendBetweenDate.php";
$pathTestFindByName = $pathRoot . "/ProjectFinance/view/controller/FindByName.php";
$pathTestFindById = $pathRoot . "/ProjectFinance/view/controller/FindById.php";

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
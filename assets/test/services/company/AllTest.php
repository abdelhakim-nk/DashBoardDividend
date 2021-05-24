<?php

$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathTestGetAll = $pathRoot . "/ProjectFinance/view/services/company/GetAll.php";
$pathTestGreaterOrEgalYield = $pathRoot . "/ProjectFinance/view/services/company/GetByGreaterOrEgalYield.php";
$pathTestExDividendAfterDate = $pathRoot . "/ProjectFinance/view/services/company/GetExDividendAfterDate.php";
$pathTestExDividendBetweenDate = $pathRoot . "/ProjectFinance/view/services/company/GetExDividendBetweenDate.php";
$pathTestFindByName = $pathRoot . "/ProjectFinance/view/services/company/GetFindByName.php";
$pathTestFindById = $pathRoot . "/ProjectFinance/view/services/company/GetFindById.php";

echo "<h1 style='text-decoration: underline'>Set of my tests </h1>";

include_once($pathTestGetAll);

echo "<br>";
echo "<br>";

include_once($pathTestGreaterOrEgalYield);

echo "<br>";
echo "<br>";

include_once($pathTestExDividendAfterDate);

echo "<br>";
echo "<br>";

include_once($pathTestExDividendBetweenDate);

echo "<br>";
echo "<br>";

include_once($pathTestFindByName);

echo "<br>";
echo "<br>";

include_once($pathTestFindById);
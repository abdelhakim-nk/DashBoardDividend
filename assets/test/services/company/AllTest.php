<?php

$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathTestGetAll = $pathRoot . "/ProjectFinance/assets/test/services/company/GetAll.php";
$pathTestGreaterOrEgalYield = $pathRoot . "/ProjectFinance/assets/test/services/company/GetByGreaterOrEgalYield.php";
$pathTestExDividendAfterDate = $pathRoot . "/ProjectFinance/assets/test/services/company/GetExDividendAfterDate.php";
$pathTestExDividendBetweenDate = $pathRoot . "/ProjectFinance/assets/test/services/company/GetExDividendBetweenDate.php";
$pathTestFindByName = $pathRoot . "/ProjectFinance/assets/test/services/company/GetFindByName.php";
$pathTestFindById = $pathRoot . "/ProjectFinance/assets/test/services/company/GetFindById.php";

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
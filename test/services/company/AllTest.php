<?php

    $pathRoot = $_SERVER['DOCUMENT_ROOT'];
    $pathTestGetAll = $pathRoot . "/ProjectFinance/test/services/company/GetAll.php";
    $pathTestGreaterOrEgalYield = $pathRoot . "/ProjectFinance/test/services/company/GetByGreaterOrEgalYield.php";
    $pathTestExDividendAfterDate = $pathRoot . "/ProjectFinance/test/services/company/GetExDividendAfterDate.php";
    $pathTestExDividendBetweenDate = $pathRoot . "/ProjectFinance/test/services/company/GetExDividendBetweenDate.php";

    echo "<h1 style='text-decoration: underline'>Set of my tests </h1>";

    include_once ($pathTestGetAll);

echo "<br>";
echo "<br>";

    include_once ($pathTestGreaterOrEgalYield);

echo "<br>";
echo "<br>";

    include_once ($pathTestExDividendAfterDate);

echo "<br>";
echo "<br>";

    include_once ($pathTestExDividendBetweenDate);
<?php

$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/configuration/DataBase.php";
$pathCompany = $pathRoot . "/ProjectFinance/domaine/Company.php";
include_once($pathDb);
include_once($pathCompany);

    class CompanyRepository
    {
        /**
         * Retourne l'integralité de la TABLE dividendmax
         * @return array
         */
        public static function GetAll(): array
        {
            $pdo = ConnexionDb::getConnexionDb();
            return $pdo->query("SELECT * FROM company")->fetchAll();
        }
        /**
         * @param $startDate
         * @param $endDate
         * @return array
         */
        public static function betweenDate($startDate, $endDate): array
        {
            $pdo = ConnexionDb::getConnexionDb();
            return $pdo->query("SELECT * FROM company WHERE ".company::EX_DIV_DATE." BETWEEN '$startDate' AND '$endDate'  ORDER BY ".company::EX_DIV_DATE." ASC ")->fetchAll();
        }


        /**
         * @param $afterDate
         * @return array
         */
        public static function AfterDate($afterDate): array
        {
            $pdo = ConnexionDb::getConnexionDb();
            return $pdo->query("SELECT * FROM company WHERE (".Company::EX_DIV_DATE." > '$afterDate') ORDER BY ".Company::EX_DIV_DATE." ASC")->fetchAll();
        }


        /**
         * @param $yield
         * @return array
         */
        public static function greaterOrEgalYield($yield): array
        {
            $pdo = ConnexionDb::getConnexionDb();
            return $pdo->query("SELECT * FROM company WHERE (".company::DIVIDEND_YIELD." >= $yield ) ORDER BY ".company::DIVIDEND_YIELD." ASC")->fetchAll();
        }

    }
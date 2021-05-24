<?php

$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/configuration/DataBase.php";
$pathCompany = $pathRoot . "/ProjectFinance/domaine/Company.php";
include_once($pathDb);
include_once($pathCompany);

class CompanyRepository
{
    /**
     * @param $start
     * @param $articleByPages
     * @return array
     */
    public static function getPagination($start, $articleByPages): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company LIMIT " . $start . "," . $articleByPages)->fetchAll();
    }

    /**
     * * Returns the entire array of table company
     * @return array
     */
    public static function getAll(): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company")->fetchAll();
    }

    /**
     * @param $yield
     * @return array
     */
    public static function getAllWithPossibilitySearchingByDividend($yield): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE " . Company::DIVIDEND_YIELD . " >= " . $yield . " ORDER BY " . Company::NAME . " ASC ")->fetchAll();
    }

    /**
     * @param $yield
     * @param $start
     * @param $articleByPages
     * @return array
     */
    public static function getAllWithPossibilitySearchingByDividendAndPagination($yield, $start, $articleByPages): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE " . Company::DIVIDEND_YIELD . " >= " . $yield . " ORDER BY " . Company::NAME . " ASC LIMIT " . $start . "," . $articleByPages)->fetchAll();
    }

    /**
     * @param $startDate
     * @param $endDate
     * @return array
     */
    public static function betweenDate($startDate, $endDate): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE " . Company::EX_DIV_DATE . " BETWEEN '$startDate' AND '$endDate'  ORDER BY " . company::EX_DIV_DATE . " ASC ")->fetchAll();
    }


    /**
     * @param $afterDate
     * @return array
     */
    public static function afterDate($afterDate): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE (" . Company::EX_DIV_DATE . " > '$afterDate') ORDER BY " . Company::EX_DIV_DATE . " ASC")->fetchAll();
    }


    /**
     * @param $yield
     * @return array
     */
    public static function greaterOrEgalYield($yield): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE (" . Company::DIVIDEND_YIELD . " >= '$yield' ) ORDER BY " . company::DIVIDEND_YIELD . " ASC")->fetchAll();
    }

    /**
     * @param $name
     * @return array
     */
    public static function findByName($name): array
    {
        $pdo = ConnexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE " . Company::NAME . " LIKE '$name%'")->fetchAll();
    }

    /**
     * @param $id
     * @return array
     */
    public static function findById($id): array
    {
        $pdo = connexionDb::getConnexionDb();
        return $pdo->query("SELECT * FROM company WHERE " . Company::ID . "= '$id' ")->fetchAll();
    }

    /**
     * @return array
     */
    public static function nbRow(): array
    {
        $pdo = connexionDb::getConnexionDb();
        return $pdo->query("SELECT COUNT(id) as nbRow FROM company")->fetchAll();
    }

}
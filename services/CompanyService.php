<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ProjectFinance/repository/CompanyRepository.php";
include_once($path);


class CompanyService
{
    /**
     * @param $start
     * @param $articleByPages
     * @return array
     */
    public static function companyGetPagination($start, $articleByPages): array
    {
        return CompanyRepository::getPagination($start, $articleByPages);
    }

    /**
     * @param $yield
     * @return array
     */
    public static function companyGetAllWithPossibilitySearchingByDividend($yield): array
    {
        return CompanyRepository::getAllWithPossibilitySearchingByDividend($yield);
    }

    /**
     * @param $yield
     * @param $start
     * @param $articleByPages
     * @return array
     */
    public static function companyGetAllWithPossibilitySearchingByDividendAndPagination($yield, $start, $articleByPages): array
    {
        return CompanyRepository::getAllWithPossibilitySearchingByDividendAndPagination($yield, $start, $articleByPages);
    }

    /**
     * @return array
     */
    public static function companyGetAll(): array
    {
        return CompanyRepository::getAll();
    }


    /**
     * @param $startDate
     * @param $endDate
     * @return array|false|string
     */
    public static function companyBetweenDate($startDate, $endDate)
    {
        return CompanyRepository::betweenDate($startDate, $endDate);
    }

    /**
     * @param $afterDate
     * @return array
     */
    public static function companyAfterDate($afterDate): array
    {
        return CompanyRepository::afterDate($afterDate);
    }


    /**
     * @param string $yield
     * @return array
     */
    public static function companyGreaterOrEgalYield(string $yield): array
    {
        return CompanyRepository::greaterOrEgalYield($yield);
    }


    /**
     * @param $name
     * @return array
     */
    public static function companyFindByName(string $name): array
    {
        return CompanyRepository::findByName($name);
    }


    /**
     * @param string $id
     * @return array
     */
    public static function companyFindById(string $id): array
    {
        return CompanyRepository::findById($id);
    }


    /**
     * @return array
     */
    public static function companyNbRow(): array
    {
        return CompanyRepository::nbRow();
    }
}
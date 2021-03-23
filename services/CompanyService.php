<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ProjectFinance/repository/CompanyRepository.php";
include_once($path);


class CompanyService
{
    /**
     * @return array
     */
    public static function companyGetAll(): array
    {
        return CompanyRepository::GetAll();
    }


    /**
     * @param $startDate
     * @param $endDate
     * @return array
     */
    public static function companyBetweenDate($startDate, $endDate): array
    {
        return CompanyRepository::betweenDate($startDate, $endDate);
    }


    /**
     * @param $afterDate
     * @return array
     */
    public static function companyAfterDate($afterDate): array
    {
        return CompanyRepository::AfterDate($afterDate);
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
        return companyRepository::findById($id);
    }

}


<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ProjectFinance/repository/CompanyRepository.php";
include_once($path);


    class CompanyService
    {
        public static function companyGetAll(): array
        {
            return CompanyRepository::GetAll();
        }


        public static function companyBetweenDate($startDate, $endDate): array
        {
            return CompanyRepository::betweenDate($startDate, $endDate);
        }


        public static function companyAfterDate($afterDate): array
        {
            return CompanyRepository::AfterDate($afterDate);
        }


        public static function companyGreaterOrEgalYield($yield): array
        {
            return CompanyRepository::greaterOrEgalYield($yield);
        }
    }




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
     * @return array|false|string
     */
    public static function companyBetweenDate($startDate, $endDate)
    {
        try {
            if (!empty($_GET['startDate']) and !empty($_GET['endDate'])){
                http_response_code(200);
                return CompanyRepository::betweenDate($startDate, $endDate);
            } else {
                http_response_code(400);
                    throw new InvalidArgumentException('please enter a start and end date !');
            }
        }catch(InvalidArgumentException $e){
            header('Content-type: application/json');
            return array("message" => $e->getMessage(),"code" => 400);
        } catch (Exception $e) {
            http_response_code(500);
            return array("message" => 'Error server', "code" => 500);
        }
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
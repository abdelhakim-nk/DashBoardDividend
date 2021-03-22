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
    public static function companyBetweenDate($startDate, $endDate)
    {
        try {
            if (empty($_GET['startDate']) and empty($_GET['endDate'])){
                throw new Error('veuillez entrer une date de debut et de fin !', 400);
            } else {
                return CompanyRepository::betweenDate($_GET['startDate'], $_GET['endDate']);
            }
        }catch(Error $e){
            echo json_encode(array("succes" => false,"message" => $e->getMessage(),"code" => $e->getCode()));
        }
    }


    /**
     * @param $afterDate
     * @return array
     */
    public static function companyAfterDate($afterDate)
    {
        try {
            if (empty($_GET['afterDate'])) {
                throw new Error('Aucune Date n\'est retourner en paramètre!', 400);
            } else {
                return CompanyRepository::AfterDate($_GET['afterDate']);
            }
        } catch (Error $e) {
            echo json_encode(array("succes" => false, "message" => $e->getMessage(), "code" => $e->getCode()));
        }
    }


    /**
     * @param string $yield
     * @return array
     */
    public static function companyGreaterOrEgalYield(string $yield)
    {
        $check = is_numeric($_GET['yield']);
        try {
            if (!$check) {
              throw new Error("Please enter a number",400);
            } else {
                return CompanyRepository::greaterOrEgalYield($_GET['yield']);
            }
        } catch (Error $e) {
            echo json_encode(array("succes" => false, "message" => $e->getMessage(), "code" => $e->getCode()));
        }
    }


    /**
     * @param $name
     * @return array
     */
    public static function companyFindByName(string $name)
    {
        try {
            if (strlen($_GET['name']) <= 2) {
                throw new Error("Bad Request :", 400);
            } else {
                return CompanyRepository::findByName($_GET['name']);
            }
        } catch (Error $e) {
            echo json_encode(array("succes" => false, "message" => $e->getMessage(), "code" => $e->getCode()));
        }
    }


    /**
     * @param string $id
     * @return array
     */
    public static function companyFindById(string $id)
    {
        $check = is_numeric($_GET['id']);
        try {
            if (!$check) {
                throw new Error("Please enter a number",400);
            } else {
                return companyRepository::findById($_GET['id']);
            }
        } catch (Error $e) {
            echo json_encode(array("succes" => false, "message" => $e->getMessage(), "code" => $e->getCode()));
        }

    }

}


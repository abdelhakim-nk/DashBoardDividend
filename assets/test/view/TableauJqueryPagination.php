<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">';



echo '<h2 style="text-align: center">Table with Jquery And pagination</h2>';


echo '<table class="table table-striped table-dark">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col" style="border: 1px solid black">Name</th>';
echo '<th scope="col" style="border: 1px solid black">Symbol</th>';
echo '<th scope="col" style="border: 1px solid black">declaration_date</th>';
echo '<th scope="col" style="border: 1px solid black">Ex_Div_Date</th>';
echo '<th scope="col" style="border: 1px solid black">Pay_Date</th>';
echo '<th scope="col" style="border: 1px solid black">Dividend_Yield</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody id="tbodyJquery"></tbody>';
echo '</table>';

echo '<button onclick="previous()" id="buttonPrevious">PREVIOUS</button>';
echo '<button onclick="next()">NEXT</button>';

echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>';
echo '<script src="../../../controller/view/jquery/TablePaginationJquery.js"></script>';
?>
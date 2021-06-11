<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathCompany = $pathRoot . "/ProjectFinance/assets/domaine/Company.php";
$pathCompanyService = $pathRoot . "/ProjectFinance/services/CompanyService.php";
include_once($pathCompany);
include_once($pathCompanyService);
echo '<link rel="stylesheet" href="../../assets/bootstrap-4.6.0-dist/css/bootstrap.min.css">';


echo "<h2 style='text-align: center'>Table Jquery of all  with pagination And possibility to searching by dividend</h2>";


echo '<input type="number" placeholder="Searching by dividend" name="SearchWithDividend" id="SearchWithDividend" style="margin-left: 1em"/>';
echo '<button onclick="search()" value="Search" class="btn btn-primary" style="margin-left: 2em">Search</button>';
echo '<button onclick="reset()" value="Reset" class="btn btn-warning" style="margin-left: 2em">Reset</button>';
echo '<table style="margin-top: 1em" class="table table-striped">';
echo '<thead class="">';
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

echo '<button  onclick="previous()" id="buttonPrevious">PREVIOUS</button>';
echo '<button onclick="next()">NEXT</button>';

echo '<script src="../../assets/jquery/dist/jquery.min.js"></script>';
echo '<script src="jquery/TableWithPaginationAndDividendJquery.js"></script>';
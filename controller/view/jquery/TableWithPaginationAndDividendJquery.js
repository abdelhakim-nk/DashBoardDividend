var pageCourante = 1;

$("#buttonPrevious").prop("disabled", true);

var yieldRecuperer = 0;


$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/../../ProjectFinance/controller/api/ControllerAllSearchDividendAndPagination.php?page=1&yield=" + yieldRecuperer,
        dataType: "json",
        success: function (response) {
            var arrayReponse = response;
            var i;
            var table = "";
            for (var i = 0; i < arrayReponse.length; i++) {
                console.log(response[i]);
                table += '<tr>';
                table += '<td style="border: 1px solid black">' + response[i]['name'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['symbol'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['declaration_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['ex_div_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['pay_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['dividend_yield'] + '</td>';
                table += '</tr>';
            }
            $('#tbodyJquery').append(table);
        }
    });
})

function next() {
    var nextPage = pageCourante + 1;
    $.ajax({
        type: "GET",
        url: "/../../ProjectFinance/controller/api/ControllerAllSearchDividendAndPagination.php?page=" + nextPage + "&yield=" + yieldRecuperer,
        dataType: "json",
        success: function (response) {
            $("#buttonPrevious").prop("disabled", false);
            pageCourante++;
            $('#tbodyJquery').empty();
            var arrayReponse = response;
            var i;
            var table = "";
            for (var i = 0; i < arrayReponse.length; i++) {
                console.log(response[i]);
                table += '<tr>';
                table += '<td style="border: 1px solid black">' + response[i]['name'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['symbol'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['declaration_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['ex_div_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['pay_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['dividend_yield'] + '</td>';
                table += '</tr>';
            }
            $('#tbodyJquery').append(table);
        }
    });
}


function previous() {
    var previousPage = pageCourante - 1;
    $.ajax({
        type: "GET",
        url: "/../../ProjectFinance/controller/api/ControllerAllSearchDividendAndPagination.php?page=" + previousPage + "&yield=" + yieldRecuperer,
        dataType: "json",
        success: function (response) {
            pageCourante--;
            if (pageCourante == 1) {
                $("#buttonPrevious").prop("disabled", true);
            }
            $('#tbodyJquery').empty();
            var arrayReponse = response;
            var i;
            var table = "";
            for (var i = 0; i < arrayReponse.length; i++) {
                console.log(response[i]);
                table += '<tr>';
                table += '<td style="border: 1px solid black">' + response[i]['name'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['symbol'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['declaration_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['ex_div_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['pay_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['dividend_yield'] + '</td>';
                table += '</tr>';
            }
            $('#tbodyJquery').append(table);
        }
    });
}

function search() {
    yieldRecuperer = $('#SearchWithDividend').val();
    $.ajax({
        type: "GET",
        url: "/../../ProjectFinance/controller/api/ControllerAllSearchDividendAndPagination.php?page=1&yield=" + yieldRecuperer,
        dataType: "json",
        success: function (response) {
            pageCourante = 1;
            $("#buttonPrevious").prop("disabled", true);
            $('#tbodyJquery').empty();
            var arrayReponse = response;
            var i;
            var table = "";
            for (var i = 0; i < arrayReponse.length; i++) {
                console.log(response[i]);
                table += '<tr>';
                table += '<td style="border: 1px solid black">' + response[i]['name'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['symbol'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['declaration_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['ex_div_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['pay_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['dividend_yield'] + '</td>';
                table += '</tr>';
            }
            $('#tbodyJquery').append(table);
        }
    });
}

function reset() {
    yieldRecuperer = 0;
    $.ajax({
        type: "GET",
        url: "/../../ProjectFinance/controller/api/ControllerAllSearchDividendAndPagination.php?page=1&yield=" + yieldRecuperer,
        dataType: "json",
        success: function (response) {
            pageCourante = 1;
            $("#buttonPrevious").prop("disabled", true);
            $('#tbodyJquery').empty();
            var arrayReponse = response;
            var i;
            var table = "";
            for (var i = 0; i < arrayReponse.length; i++) {
                console.log(response[i]);
                table += '<tr>';
                table += '<td style="border: 1px solid black">' + response[i]['name'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['symbol'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['declaration_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['ex_div_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['pay_date'] + '</td>';
                table += '<td style="border: 1px solid black">' + response[i]['dividend_yield'] + '</td>';
                table += '</tr>';
            }
            $('#tbodyJquery').append(table);
        }
    });
}
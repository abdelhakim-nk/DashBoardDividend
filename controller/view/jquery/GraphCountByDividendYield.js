$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/ProjectFinance/controller/api/ControllerAll.php",
        dataType: "json",
        success: function (response)  {
            let arrayReponse = response;
            let i;
            let col1 = 0;
            let col2 = 0;
            let col3 = 0;
            let col4 = 0;
            let col5 = 0;
            let col6 = 0;
            for (i = 0; i < arrayReponse.length; i++) {
                if (predicateYieldBetween0and1(arrayReponse[i])) {
                    col1++;
                } else if (predicateYieldBetween1and2(arrayReponse[i])) {
                    col2++;
                } else if (predicateYieldBetween2and3(arrayReponse[i])) {
                    col3++;
                } else if (predicateYieldBetween3and4(arrayReponse[i])) {
                    col4++;
                } else if (predicateYieldBetween4and5(arrayReponse[i])) {
                    col5++;
                } else {
                    col6++;
                }
            }
            let ctx = document.getElementById('graph1').getContext('2d');


            let data = {
                labels: ['0 & 1', '1 & 2', '2 & 3', '3 & 4', '4 & 5', '5 and the rest'],
                datasets: [{
                    label: 'Company',
                    data: [col1, col2, col3, col4, col5, col6],
                    backgroundColor: [
                        'rgba(55, 36, 132, 0.5)',
                        'rgba(132, 36, 79, 0.5)',
                        'rgba(222, 135, 174, 0.5)',
                        'rgba(43, 156, 65, 0.5)',
                        'rgba(178, 21, 21, 0.5)',
                        'rgba(208, 230, 40, 0.5)',
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                    ],
                    borderWidth: 1
                }]
            }

            let options = {
                responsive: true,
                maintainAspectRatio: true,
            };


            let config = {
                type: 'bar',
                data: data,
                options: options
            };


            let graph1 = new Chart(ctx, config);
        }


    });
})


function predicateYieldBetween0and1(element) {
    return element['dividend_yield'] >= 0 && element['dividend_yield'] <= 1;
}


function predicateYieldBetween1and2(element) {
    return element['dividend_yield'] > 1 && element['dividend_yield'] <= 2;
}


function predicateYieldBetween2and3(element) {
    return element['dividend_yield'] > 2 && element['dividend_yield'] <= 3;
}

function predicateYieldBetween3and4(element) {
    return element['dividend_yield'] > 3 && element['dividend_yield'] <= 4;
}

function predicateYieldBetween4and5(element) {
    return element['dividend_yield'] > 4 && element['dividend_yield'] <= 5;
}

function predicateYieldBetween5andTheRest(element) {
    return element['dividend_yield'] > 5;
}

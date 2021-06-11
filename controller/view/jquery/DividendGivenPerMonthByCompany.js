$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/ProjectFinance/controller/api/ControllerByPaydDate.php",
        dataType: "json",
        success: function (response) {
            let arrayReponse = response;
            let i;
            let col1 = 0;
            let col2 = 0;
            let col3 = 0;
            let col4 = 0;
            let col5 = 0;
            let col6 = 0;
            let col7 = 0;
            let col8 = 0;
            let col9 = 0;
            let col10 = 0;
            let col11 = 0;
            let col12 = 0;
            for (i = 0; i < arrayReponse.length; i++) {
               const month = arrayReponse[i].pay_date ? arrayReponse[i].pay_date.substring(5, 7): null;
                if (month === '01') {
                    col1++
                } else if (month === '02') {
                    col2++
                } else if (month === '03') {
                    col3++
                } else if (month === '04') {
                    col4++
                } else if (month === '05') {
                    col5++
                } else if (month === '06') {
                    col6++
                } else if (month === '07') {
                    col7++
                } else if (month === '08') {
                    col8++
                } else if (month === '09') {
                    col9++
                } else if (month === '10') {
                    col10++
                } else if (month === '11') {
                    col11++
                } else if (month === '12') {
                    col12++
                } else {
                    console.log('error date NULL !')
                }


            }


            let ctx = document.getElementById('graph2').getContext('2d');


            const DATA_COUNT = 12;


            const data = {
                labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11,col12],
                        backgroundColor: [
                            'rgba(55, 36, 132, 1)',
                            'rgba(132, 36, 79, 1)',
                            'rgba(222, 135, 174, 1)',
                            'rgba(43, 156, 65, 1)',
                            'rgba(178, 21, 21, 1)',
                            'rgba(208, 230, 40, 1)',
                            'rgba(230, 40, 173, 1)',
                            'rgba(255, 15, 15, 1)',
                            'rgba(255, 111, 15, 1)',
                            'rgba(255, 255, 31, 1)',
                            'rgba(72, 255, 31, 1)',
                            'rgba(31, 195, 255, 1)',
                        ],
                    }
                ]
            };
            const config = {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'ok'
                        }
                    }
                },
            };
            let graph1 = new Chart(ctx, config);
        }


    });
})


jQuery(document).ready(function($) {
Highcharts.chart('diagram', {

    title: {
        text: 'Рейтинг организации'
    },

    subtitle: {
        text: 'Школа 22 (процентные показатели)'
    },

    yAxis: {
        title: {
            text: 'Показатели'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Общий рейтинг',
        data: [15, 10, 65, 20, 45, 30, 39, 43]
    },{
        name: 'Удовлетворенность населения',
        data: [60, 70, 45, 70, 90, 80, 90, 90]
    }, {
        name: 'Мероприятия антикоррупционного характера',
        data: [50, 55, 60, 55, 70, 80, 90, 57]
    }, {
        name: 'Нарушения этических норм',
        data: [20, 30, 20, 40, 20, 10, 5, 10]
    }, {
        name: 'Нарушения Закона о гос. услугах',
        data: [10, 20, 30, 10, 50, 20, 10, 30]
    }
    ],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});

});

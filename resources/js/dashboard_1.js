"use strict";

let from = moment().subtract(10, 'days').format('YYYY-MM-DD');
let to = moment().format('YYYY-MM-DD');

// Init flatpickr --- more info :https://flatpickr.js.org/getting-started/
var initFlatpickr = () => {
    const element = document.querySelector('#kt_ecommerce_sales_flatpickr');
    flatpickr = $(element).flatpickr({
        altInput: true,
        altFormat: "d/m/Y",
        dateFormat: "Y-m-d",
        defaultDate: [from, to],
        locale: {
            rangeSeparator: ' - ',
        },
        mode: "range",
        onChange: function (selectedDates, dateStr, instance) {
            handleFlatpickr(selectedDates, dateStr, instance);
        },
    });
}

let chart = null;

var initChart = function (fromDate, toDate) {
    var element = document.getElementById("kt_charts_widget_dashboard_3");

    if (!element) {
        return;
    }

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
    var borderColor = KTUtil.getCssVariableValue('--bs-border-dashed-color');
    var baseColor = KTUtil.getCssVariableValue('--bs-success');
    var lightColor = KTUtil.getCssVariableValue('--bs-success');

    $.ajax({
        type: 'GET',
        url: `/report/sales?from=${fromDate}&to=${toDate}`,
        success: function (res) {
            var options = {
                series: [{
                    name: 'Doanh thu',
                    data: res.data,
                }],
                chart: {
                    fontFamily: 'inherit',
                    type: 'area',
                    height: height,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.7,
                        stops: [0, 90, 100]
                    }
                },
                stroke: {
                    curve: 'smooth',
                    show: true,
                    width: 3,
                    colors: [baseColor]
                },
                xaxis: {
                    categories: res.dates,
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    tickAmount: 6,
                    labels: {
                        rotate: 0,
                        rotateAlways: true,
                        style: {
                            colors: labelColor,
                            fontSize: '12px'
                        }
                    },
                    crosshairs: {
                        position: 'front',
                        stroke: {
                            color: baseColor,
                            width: 1,
                            dashArray: 3
                        }
                    },
                    tooltip: {
                        enabled: true,
                        formatter: undefined,
                        offsetY: 0,
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                yaxis: {
                    tickAmount: 4,
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '12px'
                        },
                        formatter: function (val) {
                            return Number(val / 1000).toFixed(1) + "K"
                        }
                    }
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: '12px'
                    },
                    y: {
                        formatter: function (val) {
                            return Number(val / 1000).toFixed(1) + "K"
                        }
                    }
                },
                colors: [lightColor],
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    }
                },
                markers: {
                    strokeColor: baseColor,
                    strokeWidth: 3
                }
            };

            chart = new ApexCharts(element, options);

            // Set timeout to properly get the parent elements width
            setTimeout(function () {
                chart.render();
            }, 300);
        },
    });
}

// Handle flatpickr --- more info: https://flatpickr.js.org/events/
var handleFlatpickr = (selectedDates, dateStr, instance) => {
    const dates = dateStr.split(' - ');
    const fromDate = dates[0] ?? null;
    const toDate = dates[1] ?? null;

    if (fromDate && toDate) {
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var baseColor = KTUtil.getCssVariableValue('--bs-success');

        $.ajax({
            type: 'GET',
            url: `/report/sales?from=${fromDate}&to=${toDate}`,
            success: function (res) {
                chart.updateOptions({
                    series: [{
                        data: res.data,
                    }],
                    xaxis: {
                        categories: res.dates,
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        tickAmount: 6,
                        labels: {
                            rotate: 0,
                            rotateAlways: true,
                            style: {
                                colors: labelColor,
                                fontSize: '12px',
                            },
                        },
                        crosshairs: {
                            position: 'front',
                            stroke: {
                                color: baseColor,
                                width: 1,
                                dashArray: 3,
                            },
                        },
                        tooltip: {
                            enabled: true,
                            formatter: undefined,
                            offsetY: 0,
                            style: {
                                fontSize: '12px'
                            },
                        },
                    },
                });
            }
        });
    }
}

// On document ready
KTUtil.onDOMContentLoaded(function () {
    initFlatpickr();
    initChart(from, to);
});

(()=>{"use strict";var t=moment().subtract(10,"days").format("YYYY-MM-DD"),e=moment().format("YYYY-MM-DD"),o=null,a=function(t,e,a){var s,r,i=e.split(" - "),l=null!==(s=i[0])&&void 0!==s?s:null,n=null!==(r=i[1])&&void 0!==r?r:null;if(l&&n){var c=KTUtil.getCssVariableValue("--bs-gray-500"),d=KTUtil.getCssVariableValue("--bs-success");$.ajax({type:"GET",url:"/report/sales?from=".concat(l,"&to=").concat(n),success:function(t){o.updateOptions({series:[{data:t.data}],xaxis:{categories:t.dates,axisBorder:{show:!1},axisTicks:{show:!1},tickAmount:6,labels:{rotate:0,rotateAlways:!0,style:{colors:c,fontSize:"12px"}},crosshairs:{position:"front",stroke:{color:d,width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:"12px"}}}})}})}};KTUtil.onDOMContentLoaded((function(){var s;s=document.querySelector("#kt_ecommerce_sales_flatpickr"),flatpickr=$(s).flatpickr({altInput:!0,altFormat:"d/m/Y",dateFormat:"Y-m-d",defaultDate:[t,e],locale:{rangeSeparator:" - "},mode:"range",onChange:function(t,e,o){a(t,e,o)}}),function(t,e){var a=document.getElementById("kt_charts_widget_dashboard_3");if(a){var s=parseInt(KTUtil.css(a,"height")),r=KTUtil.getCssVariableValue("--bs-gray-500"),i=KTUtil.getCssVariableValue("--bs-border-dashed-color"),l=KTUtil.getCssVariableValue("--bs-success"),n=KTUtil.getCssVariableValue("--bs-success");$.ajax({type:"GET",url:"/report/sales?from=".concat(t,"&to=").concat(e),success:function(t){var e={series:[{name:"Doanh thu",data:t.data}],chart:{fontFamily:"inherit",type:"area",height:s,toolbar:{show:!1}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.3,opacityTo:.7,stops:[0,90,100]}},stroke:{curve:"smooth",show:!0,width:3,colors:[l]},xaxis:{categories:t.dates,axisBorder:{show:!1},axisTicks:{show:!1},tickAmount:6,labels:{rotate:0,rotateAlways:!0,style:{colors:r,fontSize:"12px"}},crosshairs:{position:"front",stroke:{color:l,width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:"12px"}}},yaxis:{tickAmount:4,labels:{style:{colors:r,fontSize:"12px"},formatter:function(t){return Number(t/1e3).toFixed(1)+"K"}}},states:{normal:{filter:{type:"none",value:0}},hover:{filter:{type:"none",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:"none",value:0}}},tooltip:{style:{fontSize:"12px"},y:{formatter:function(t){return Number(t/1e3).toFixed(1)+"K"}}},colors:[n],grid:{borderColor:i,strokeDashArray:4,yaxis:{lines:{show:!0}}},markers:{strokeColor:l,strokeWidth:3}};o=new ApexCharts(a,e),setTimeout((function(){o.render()}),300)}})}}(t,e)}))})();
//# sourceMappingURL=dashboard_1.js.map
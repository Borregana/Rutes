
var appChartsMonth = appChartsMonth || { 'plotChart': {} };

appChartsMonth.init = function(){
    this.plotChart.init();
};

appChartsMonth.plotChart = {
    parent: appChartsMonth,
    init: function(){
        if(this.chartData != undefined){
            this.now = new Date();
            this.begin_x = new Date(this.now.getFullYear()-1, this.now.getMonth()-1, this.now.getDay()).getTime();
            this.end_x = new Date(this.now.getFullYear(), this.now.getMonth()+1, this.now.getDay()).getTime();
            this.drawChart();
        }
        else{
            $('#area-chart').html(this.emptyText);
        }
    },
    chartOptions: {
        yaxis: { min: 0, max: this.maxData},
        xaxis:{
            autoscaleMargin: 0.5,
            max: this.end_x
        },
        colors: ["#F90", "#222", "#666", "#BBB"],
        series: {
            bars: {
                show: true,
                lineWidth: 12,
                fill: true,
                fillColor: { colors: [ { opacity: 0.6 }, { opacity: 0.2 } ] },
                steps: false,
                zero: true
            }
        }
    },
    emptyText: '',
    chartData: [],
    drawChart: function(){
        this.plot = $.plot($("#chart-month"), this.chartData, this.chartOptions);
    }
};

$(document).ready(function(){
    if($('body').find('.chart-holder-month').length != 0){
        appChartsMonth.init();
    }
});

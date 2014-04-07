
var appChartsDay = appChartsDay || { 'plotChart': {} };

appChartsDay.init = function(){
    this.plotChart.init();
};

appChartsDay.plotChart = {
    parent: appChartsDay,
    init: function(){
        if(this.chartData != undefined){
            this.now = new Date();
            this.begin_x = new Date(this.now.getFullYear(), this.now.getMonth() -1, this.now.getDay()-1).getTime();
            this.end_x = new Date(this.now.getFullYear(), this.now.getMonth(), this.now.getDay()+1).getTime();
            this.drawChart();
        }
        else{
            $('#area-chart').html(this.emptyText);
        }
    },
    chartOptions: {
        yaxis: { min: 0, max: this.maxData},
        xaxis:{
            mode:"time",
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
        this.plot = $.plot($("#chart-day"), this.chartData, this.chartOptions);
    }
};

$(document).ready(function(){
    if($('body').find('.chart-holder-day').length != 0){
        appChartsDay.init();
    }
});

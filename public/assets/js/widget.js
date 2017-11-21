(function($) {
    'use strict';

    $(document).ready(function() {

$(".widget-3 .metro").liveTile();
$(".widget-7 .metro").liveTile();
 nv.addGraph(function() {
                var chart = nv.models.lineChart()
                    .x(function(d) {
                        return d[0]
                    })
                    .y(function(d) {
                        return d[1]
                    })
                    .color(['#fff'])
                    .margin({
                        top: 10,
                        right: -10,
                        bottom: 20,
                        left: -10
                    })
                    .showXAxis(false)
                    .showYAxis(false)
                    .showLegend(false)
                    .interactive(false);

                d3.select('.widget-7 svg')
                    .datum(data.premarket)
                    .call(chart);

                nv.utils.windowResize(chart.update);

                return chart;
            }, function() {
                setTimeout(function() {
                    $('.widget-7 .nvd3 circle.nv-point:nth-child(4)').attr("r", "5");
                }, 500);
            });

 

 

 });
})
(window.jQuery);
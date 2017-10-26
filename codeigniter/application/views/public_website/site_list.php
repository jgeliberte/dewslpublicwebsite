<!--
    
     Created by: Kevin Dhale dela Cruz
     
     A viewing table for individual monitoring events
     located at /application/views/public_alert/
     
     Linked at [host]/public_alert/monitoring_events/[release_id]
     
 -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dewslandslide/public_website/public_website_general.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dewslandslide/public_website/site_list_sample.css">

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="/js/dewslandslide/public_website/ph-all.js"></script>
<!-- <script src="https://code.highcharts.com/mapdata/countries/ph/ph-all.js"></script> -->

<div id="page-wrapper">
	<div class="container">
		<div id="map">
        </div>
	</div>
</div>


<script type="text/javascript">

    let data_sites = [
        ['ph-ab', {province: "Abra", sites: 1}],
        ['ph-ap', {province: "Kalinga", sites: 1}],
        ['ph-mt', {province: "Mt. Province", sites: 2}],
        ['ph-if', {province: "ifugao", sites: 1}],
        ['ph-bg', {province: "Benguet", sites: 5}],
        ['ph-lu', {province: "La Union", sites: 1}],
        ['ph-qz', {province: "Quezon", sites: 1}],
        ['ph-cn', {province: "Camarines Norte", sites: 1}],
        ['ph-sr', {province: "Sorsogon", sites: 1}],
        ['ph-sm', {province: "Samar", sites: 8}],
        ['ph-bi', {province: "Biliran", sites: 1}],
        ['ph-cp', {province: "Capiz", sites: 1}],
        ['ph-ii', {province: "Iloilo", sites: 5}],
        ['ph-cb', {province: "Cebu", sites: 2}],
        ['ph-nr', {province: "Negros Oriental", sites: 3}],
        ['ph-sl', {province: "Southern Leyte", sites: 3}],
        ['ph-bo', {province: "Bohol", sites: 1}],
        ['ph-di', {province: "Surigao del Norte", sites: 2}],
        ['ph-ss', {province: "Surigao del Sur", sites: 2}],
        ['ph-mn', {province: "Misamis Oriental", sites: 1}],
        ['ph-as', {province: "Agusan del Sur", sites: 1}],
        ['ph-bk', {province: "Bukidnon", sites: 2}],
        ['ph-dv', {province: "Davao del Norte", sites: 2}],
        ['ph-do', {province: "Davao Oriental", sites: 2}]
    ];

    let chart = null;

    // Create the chart
    Highcharts.mapChart('map', {
        chart: {
            map: 'countries/ph/ph-all'
        },
        title: {
            text: 'DYNASLOPE SITES ACROSS THE PHILIPPINES'
        },
        mapNavigation: {
            enabled: false,
            buttonOptions: {
                verticalAlign: 'right'
            }
        },
        plotOptions: {
            series: {
                point: {
                    events: {
                        select: function () {
                            let text = "", province = this.name;
                            let filter = []; filter[0] = ["province", this.name];
                            chart = this.series.chart;

                            $.getJSON("/../monitoring/getSites", {"filter": filter} )
                            .done( function (data) 
                            {
                                let plural = data.length > 1 ? "s" : "";
                                text = "<div style='font-size:14px;'>";
                                text += '<b>DYNASLOPE Site' + plural + ' in ' + province + "</b>";

                                data.forEach( function( site ) {
                                    let x = site.sitio == null ? "" : site.sitio + ", ";
                                    let address = x + site.barangay + ", " + site.municipality;
                                    let href = "<a href='/../sites/" + site.name + "'>";
                                    text += "<br>- " + href + address + "</a>";
                                });

                                text += "</div>";

                                let yHeight = 320; 
                                if (data.length > 1) yHeight -= data.length * 14;
                                if (!chart.selectedLabel) {
                                    chart.selectedLabel = [
                                        chart.renderer.label(text, 480, yHeight, null, null, null, true).add()
                                    ];
                                } else {
                                    chart.selectedLabel[0].attr({
                                        text: text, 
                                        y: yHeight
                                    });
                                }
                            });
                        },
                        unselect: function () {
                            /*var text = 'Unselected ' + this.name + ' (' + this.value + '/km²)',
                                chart = this.series.chart;
                            if (!chart.unselectedLabel) {
                                chart.unselectedLabel = chart.renderer.label(text, 0, 300)
                                    .add();
                            } else {
                                chart.unselectedLabel.attr({
                                    text: text
                                });
                            }*/

                            let last = chart.getSelectedPoints();
                            if( last[0]['hc-key'] == this['hc-key']) chart.selectedLabel[0].attr({text:""});
                            this.update({color: '#285B30'});
                        }
                    }
                }
            }
        },          
        series: [{
            data: data_sites,
            name: 'Dynaslope Site',
            color: '#285b30',
            allowPointSelect: true,
            cursor: 'pointer',
            states: {
                hover: {
                    color: '#BADA55',
                    borderColor: "black"
                },
                select: {
                    color: '#F8991D'
                }
            },
            dataLabels: {
                enabled: true,
                color: "#991B1E", //"#2d39d5",
                format: '{point.name}'
            }
        }],
        legend: {
            enabled: false
        },
        tooltip: {
            useHTML: true,
            headerFormat: '<b>Number of sites</b><table>',
            pointFormat: '<tr><td>{point.name}: {point.value.sites}</td></tr>',
            footerFormat: '</table>',
        },
        /*colorAxis: {
            min: 0,
            max: 1,
            maxColor: "#285b30"
        },*/

        exporting: {
            sourceHeight: 1000,
            sourceWidth: 800
        }
    });

</script>
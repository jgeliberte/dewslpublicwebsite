<link rel="stylesheet" type="text/css" href="/css/third-party/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="/css/third-party/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="/css/third-party/daterangepicker.css">
<script src="/js/third-party/inferno.js"></script>
<script src="/js/third-party/highstock.js"></script>
<script src="/js/third-party/exporting.js"></script>
<script src="/js/third-party/highcharts-more.js"></script>
<script src="/js/third-party/daterangepicker.js"></script>
<script src="/js/third-party/bootstrap-select.min.js"></script>
<script src="/js/third-party/no-data-to-display.js"></script>
<script src="/js/third-party/daterangepicker.js"></script>
<script src="/js/dewslandslide/public_website/analysis_graph.js"></script>

<style type="text/css">
.rainGraph { margin-top: 10px; }
.highcharts-container { margin: auto; }
</style>

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line tab-head">
            <span class="circle left"></span>
            <div class="container-line-text section-head-text">
                Surficial Graph

            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div>
<div id="with_data"></div>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-warning">
            <strong>NOTE:</strong> Surficial data is the data from the ground marker measurements sent by the LEWC (Landslide Early Warning Committee). The measurements between two markers are plotted on the y-axis with the date/time of the measurement on the x-axis.
        </div>
        <div class="container">
            <div class='col-md-4 pull-right'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7'>
                        <div class="input-group-btn load_surficial" id="div_load_surficial" >
                            <button type="button" class="btn btn-primary" id="load_surficial">Load Graph</button>
                        </div>
                        <input id="reportrangesurficial" type='text' class="form-control pull-right text-center" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" id="surficialGraph" class="surficialClass">
    </div>
</div>

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line section-head">
            <span class="circle left"></span>
            <div class="container-line-text section-head-text">
                Rainfall Graph
            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-warning">
            <strong>NOTE:</strong> Rainfall values are represented as either the 24-hour cumulative value or the 72-hour cumulative value. The date and time is represented on the x-axis while the rainfall values are on the y-axis. Threshold values are indicated as horizontal lines on the graph. The 72-hour cumulative rainfall threshold is based on the 2-year rainfall maximum, while the 24-hour cumulative rainfall threshold is based on half the aforementioned rainfall maximum.
        </div>
        <div class="container">
            <div class='col-md-4 pull-right'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7'>
                        <div class="input-group-btn load_rain"  id="div_load_rain">
                            <button type="button" class="btn btn-primary" id="load_rain">Load Graph</button>
                        </div>
                        <input id="reportrangerain" type='text' class="form-control pull-right text-center" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" id="rainfallGraph" class="rainClass">
    </div>
</div>

<div class="row">
    <div class="col-sm-12 text-center">
        <div class="container-line section-head">
            <span class="circle left"></span>
            <div class="container-line-text section-head-text">
                Subsurface Graph
            </div>
            <span class="circle right"></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-warning">
            <strong>NOTE:</strong> Column position plots are the graphic representation of the column’s position underground. Nodes are labeled from 1 onwards, where node 1 represents the topmost node. The downslope direction is parallel to the dip of the of the landslide mass, while the across-slope direction is perpendicular to the downslope. A positive value for the downslope direction indicates the top of a particular node moving towards the slope (and vice versa); and a positive value for the across-slope direction indicates the top of the node moving to the right (and vice versa).
        </div>
        <div class="container">
            <div class='col-md-4 pull-right'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7'>
                        <div class="input-group-btn load_subsurface" id="div_load_subsurface">
                            <button type="button" class="btn btn-primary load_subsurface" id="load_subsurface">Load Graph</button>
                        </div>
                        <input id="reportrangesubsurface" type='text' class="form-control pull-right text-center" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" id="subsurface" class="subsurfaceClass">
    </div>
</div>

<div class="modal fade js-loading-bar" id="loading" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="progress progress-popup">
                    <div class="progress-bar progress-bar-striped active" style="width: 100%">Loading...</div>
                </div>
            </div>
        </div>
    </div>
</div>

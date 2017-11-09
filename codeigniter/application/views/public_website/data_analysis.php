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
<script src="/js/dewslandslide/public_website/analysis_graph.js"></script>
<script src="/js/third-party/daterangepicker.js"></script>
<style type="text/css">
.rainGraph{
  margin-top: 10px;
}
.highcharts-container {
  margin: auto;
}
</style>
<div id="page-wrapper">
  <div class="container">
    <div class="col-sm-12 col-md-12 graphGenerator" id="graphGenerator" >
      <div class="panel panel-info">
        <div class="panel-heading"><h3><b>Surficial Graph</b></h3></div>
        <div class="panel-body">
          <div id="reportrangesurficial" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 25%">
            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
            <span></span> <b class="caret"></b>
          </div>


          <div id="surficialGraph" class="surficialClass"></div>
          <h4><b> NOTE :</h4>
            <p>Surficial data is the data from the ground marker measurements sent by the LEWC (Landslide Early Warning Committee). 

              The measurements between two markers are plotted on the y-axis with the date/time of the measurement on the x-axis.
            </p>


          </div>
          <br>
          <div class="panel panel-info">
            <div class="panel-heading"><h3><b>Rainfall Graph</b></h3></div>
            <div class="panel-body">
              <div class="row">
                <div id="with_data"></div>
                <div id="reportrangerain" class="pull-right " style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 25%;margin-right: 15px;">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                  <span></span> <b class="caret"></b>
                </div>
              </div>
              <div id="rainfallGraph" class="rainClass"></div>
              <h4><b> NOTE :</h4>
                <p>Rainfall values are represented as either the 24-hour cumulative value or the 72-hour cumulative value. The date and time is represented on the x-axis while the rainfall values are on the y-axis.

                  Threshold values are indicated as horizontal lines on the graph. The 72-hour cumulative rainfall threshold is based on the 2-year rainfall maximum, while the 24-hour cumulative rainfall threshold is based on half the aforementioned rainfall maximum. 
                </p>
              </div>
            </div>
            <br>
            <div class="panel panel-info">
              <div class="panel-heading"><h3><b>Subsurface Graph</b></h3></div>
              <div class="panel-body">


                <div id="reportrangesubsurface" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 25%">


                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                  <span></span> <b class="caret"></b>
                </div>
                <div id="subsurface" class="subsurfaceClass"></div>


                <BR>
                <h4><b> NOTE :</h4>
                  <p>
                    Column position plots are the graphic representation of the column’s position underground. Nodes are labeled from 1 onwards, where node 1 represents the topmost node.

                    The downslope direction is parallel to the dip of the of the landslide mass, while the across-slope direction is perpendicular to the downslope. A positive value for the downslope direction indicates the top of a particular node moving towards the slope (and vice versa); and a positive value for the across-slope direction indicates the top of the node moving to the right (and vice versa).
                  </p>
                </div>

              </div>
            </div>
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
        
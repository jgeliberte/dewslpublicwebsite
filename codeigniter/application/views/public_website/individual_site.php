<!--
    
     Created by: Kevin Dhale dela Cruz
     
     A viewing page for Individual Site Page [public_website/individual_site]
     
     Linked at [host]/sites/[site_code]
     
-->

<script type="text/javascript" src="<?php echo base_url(); ?>js/dewslandslide/public_website/individual_site.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/third-party/ekko-lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/third-party/jquery.zoom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/third-party/wheelzoom.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dewslandslide/public_website/individual_site_view.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/third-party/ekko-lightbox.css">

<div id="page-wrapper">
	<div class="container">
		<!-- Page Heading -->

        <div class="row">
            <div class="col-sm-12 text-center">
                <div id="page-header">
                    <?php echo strtoupper($site->address); ?>
                </div>
            </div>
            <!-- <div class="col-sm-2"></div> -->
        </div>

        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a data-toggle="tab" href="#community-timeline">Timeline of Events</a></li>
            <li><a data-toggle="tab" href="#hazard-information">Hazard Information</a></li>
            <li><a data-toggle="tab" href="#data-analysis">Data Analysis</a></li>
        </ul>

        <div class="tab-content">
            <div id="community-timeline" class="tab-pane fade in active">
                <?php echo $community_timeline; ?>
            </div>
            <div id="hazard-information" class="tab-pane fade">
                <?php echo $hazard_information; ?>
            </div>
            <div id="data-analysis" class="tab-pane fade">
                <?php echo $data_analysis; ?>
            </div>
        </div>

	</div>
</div>
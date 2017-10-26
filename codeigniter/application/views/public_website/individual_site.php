<!--
    
     Created by: Kevin Dhale dela Cruz
     
     A viewing table for individual monitoring events
     located at /application/views/public_alert/
     
     Linked at [host]/public_alert/monitoring_events/[release_id]
     
-->

<script type="text/javascript" src="<?php echo base_url(); ?>js/third-party/ekko-lightbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dewslandslide/public_website/individual_site_view.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/third-party/ekko-lightbox.css">

<div id="page-wrapper">
	<div class="container">
		<!-- Page Heading -->

        <!-- <div class="row">
            <div class="col-sm-12" id="header">
                <h2 class="page-header">
                    DYNASLOPE PROJECT
                </h2>
            </div>
        </div> -->

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
                DATA
            </div>
        </div>

	</div>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        $(".tab-head-text, .section-head-text").each( function (index, elem) {
            let outerWidth = getWidth($(elem));
            let adjustedWidth = (1170/2) - (outerWidth/2);
            $(elem).css("left", adjustedWidth);
        });

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
        
    });

    function getWidth(obj){
        let clone = obj.clone();
        clone.css("visibility","hidden");
        $('body').append(clone);
        let width = clone.outerWidth();
        clone.remove();
        return width;
    }

</script>
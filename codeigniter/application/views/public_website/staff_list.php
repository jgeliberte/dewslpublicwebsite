<!--
    
     Created by: Kevin Dhale dela Cruz
     
     A viewing page for Staff Profile Page [/staff_profile]
     
     Linked at [host]/staff
     
-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dewslandslide/public_website/staff_list.css">

<div id="page-wrapper">
	<div class="container">
		<!-- Page Heading -->

        <div class="row">
            <div class="col-sm-12 text-center">
                <div id="page-header">
                    DYNASLOPE STAFF
                </div>
            </div>
            <!-- <div class="col-sm-2"></div> -->
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="container-line tab-head">
                    <span class="circle left"></span>
                    <div class="container-line-text section-head-text">
                        TEAM ONE
                    </div>
                    <span class="circle right"></span>
                </div>
            </div>
        </div>

        <div class="row staff-row">
            <div class="col-sm-2 col-sm-offset-1 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Apolinario Mabini</div>
                <div class="position">Supervising Science Research Specialist</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Rizal</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Chief Science Research Specialist</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist II</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Senior Science Research Specialist</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="container-line section-head">
                    <span class="circle left"></span>
                    <div class="container-line-text section-head-text">
                        TEAM TWO
                    </div>
                    <span class="circle right"></span>
                </div>
            </div>
        </div>

        <div class="row staff-row">
            <div class="col-sm-2 col-sm-offset-1 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="container-line section-head">
                    <span class="circle left"></span>
                    <div class="container-line-text section-head-text">
                        TEAM THREE
                    </div>
                    <span class="circle right"></span>
                </div>
            </div>
        </div>

        <div class="row staff-row">
            <div class="col-sm-2 col-sm-offset-1 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Rizal</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
        </div>

        <div class="row staff-row">
            <div class="col-sm-2 col-sm-offset-1 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
            </div>
            <div class="col-sm-2 text-center">
                <img class="staff-img" src="http://via.placeholder.com/150x150">
                <div class="name">Jose Apolinario Mabini</div>
                <div class="position">Science Research Specialist I</div>
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
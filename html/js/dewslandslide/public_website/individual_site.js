/****
 *
 *	Created by Kevin Dhale dela Cruz
 *	JS file for Individual Site Page [public_website/individual_site]
 *	[host]/sites/[site_code]
 *	
****/

$(document).ready(function () {

    $('[data-toggle="popover"]').popover(); 

    $(".tab-head-text, .section-head-text").each( function (index, elem) {
        let outerWidth = getWidth($(elem));
        let adjustedWidth = (1170/2) - (outerWidth/2);
        $(elem).css("left", adjustedWidth);
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true,
            showArrows: false,
            onContentLoaded: function() {
                setTimeout( function () { 
                    wheelzoom($('.ekko-lightbox-container img'), {zoom: 0.03, maxZoom: 1});
                    /*$('.ekko-lightbox-container').zoom({
                        on: "click"
                    });*/
                }, 500);
            },
            onNavigate: function() {
                $('.ekko-lightbox-container').trigger("zoom.destroy");
            }
        });
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


/****
 *
 *	Created by Kevin Dhale dela Cruz
 *	JS file for Individual Site Page [public_website/individual_site]
 *	[host]/sites/[site_code]
 *	
****/

$(document).ready(function () 
{
    $('[data-toggle="popover"]').popover({
    	container: '#page-wrapper'
    });

    $('[data-toggle="dropdown"]').dropdown(); 

    $(".tab-head-text, .section-head-text").each( function (index, elem) {
        let outerWidth = getWidth($(elem));
        let adjustedWidth = (1170/2) - (outerWidth/2);
        $(elem).css("left", adjustedWidth);
    });

    let hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        let scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html, body').scrollTop(scrollmem);
    });

    $('#map')
        .wrap('<span style="display:inline-block"></span>')
        .css('display', 'block')
        .parent()
        .zoom();

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true,
            showArrows: true,
            onContentLoaded: function() {
                wheelzoom($('.ekko-lightbox-container img'), {zoom: 0.03, maxZoom: 1});
                $('.ekko-lightbox-item.fade').css({ "z-index": 0 });
                $('.ekko-lightbox-item.fade.in.show').css({ "z-index": 1 });

                let width = $(".ekko-lightbox-container").width();
                let position = $(".ekko-lightbox-nav-overlay").position();
                $(".ekko-lightbox-nav-overlay").css({ width: width + (Math.abs(position.left)*2)  });
            },
            onNavigate: function() {
                // wheelzoom($('.ekko-lightbox-container img'), {zoom: 0.03, maxZoom: 1});
                // $('.ekko-lightbox-item fade').css({ "z-index": 0 });
                // $('.ekko-lightbox-item fade in show').css({ "z-index": 1 });
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


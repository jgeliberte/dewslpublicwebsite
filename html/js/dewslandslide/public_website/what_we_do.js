$( document ).ready(function() {
   	$('#comm-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$(this).css({opacity: 1});
   		$('.comm-preview-panel').css({top: $(this).position().top ,left: $(this).position().left + $(this).width()});
   		$('.comm-preview-panel').toggle();
   	});

   	$('#comm-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.comm-preview-panel').toggle();
   	});

   	$('#admin-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$(this).css({opacity: 1});
   		$('.admin-preview-panel').css({top: $(this).position().top ,left: $(this).position().left + (this).width()});
   		$('.admin-preview-panel').toggle();
   	});

   	$('#admin-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.admin-preview-panel').toggle();
   	});

   	$('#infra-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$(this).css({opacity: 1});
   		$('.infra-preview-panel').toggle();
   	});

   	$('#infra-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.infra-preview-panel').toggle();
   	});

   	$('#data-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$(this).css({opacity: 1});
   		$('.data-preview-panel').toggle();
   	});

   	$('#data-thumbnail').mouseout(function(){
   		revertOpacity();
   		$('.data-preview-panel').toggle();
   	});


});

function unfocusedOpacity() {
	$('.highlight-text').css({opacity: 0.5});
	$('#comm-thumbnail').css({opacity: 0.5});
	$('#admin-thumbnail').css({opacity: 0.5});
	$('#infra-thumbnail').css({opacity: 0.5});
	$('#data-thumbnail').css({opacity: 0.5});
}

function revertOpacity() {
	$('.highlight-text').css({opacity: 1});
	$('#comm-thumbnail').css({opacity: 1});
	$('#admin-thumbnail').css({opacity: 1});
	$('#infra-thumbnail').css({opacity: 1});
	$('#data-thumbnail').css({opacity: 1});
}
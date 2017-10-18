$( document ).ready(function() {
   	$('#comm-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$(this).css({opacity: 1});
   		$('#'+$(this).closest("div").prop("id")+' h4').css({opacity: 0});
   		$('.comm-preview-panel').css({top: $('#'+$(this).closest("div").prop("id")).position().top - 20,left: $('#'+$(this).closest("div").prop("id")).position().left + $('#'+$(this).closest("div").prop("id")).width()});
   		$('.comm-preview-panel').fadeToggle();
   	});

   	$('#comm-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.comm-preview-panel').fadeToggle();
   	});

   	$('#admin-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$('#'+$(this).closest("div").prop("id")+' h4').css({opacity: 0});
   		$(this).css({opacity: 1});
   		$('.admin-preview-panel').css({top: $('#'+$(this).closest("div").prop("id")).position().top - 20,left: $('#'+$(this).closest("div").prop("id")).position().left + $('#'+$(this).closest("div").prop("id")).width()});
   		$('.admin-preview-panel').fadeToggle();
   	});

   	$('#admin-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.admin-preview-panel').fadeToggle();
   	});

   	$('#infra-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$('#'+$(this).closest("div").prop("id")+' h4').css({opacity: 0});
   		$(this).css({opacity: 1});
   		$('.infra-preview-panel').css({top: $('#'+$(this).closest("div").prop("id")).position().top - 20,left: $('#'+$(this).closest("div").prop("id")).position().left - $('#'+$(this).closest("div").prop("id")).width() * 1.05});
   		$('.infra-preview-panel').fadeToggle();
   	});

   	$('#infra-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.infra-preview-panel').fadeToggle();
   	});

   	$('#data-thumbnail').mouseenter(function(){
   		unfocusedOpacity();
   		$('#'+$(this).closest("div").prop("id")+' h4').css({opacity: 0});
   		$(this).css({opacity: 1});
   		$('.data-preview-panel').css({top: $('#'+$(this).closest("div").prop("id")).position().top - 20,left: $('#'+$(this).closest("div").prop("id")).position().left - $('#'+$(this).closest("div").prop("id")).width() * 1.05});
   		$('.data-preview-panel').fadeToggle();
   	});

   	$('#data-thumbnail').mouseleave(function(){
   		revertOpacity();
   		$('.data-preview-panel').fadeToggle();
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
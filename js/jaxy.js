jQuery(document).ready(function ($) {

	
	
	//sets header at correct size to view all header elements
	var height1 = $('#jaxypants-header').height();
	var newheight = height1+15+"px";
	$("#jaxypants-custom-header").css("height", newheight);
	$("#jaxypants-overlay").css("height", newheight);
	var height2 = $('#jaxypants-custom-header').height();


	//adds styling to the menu-all-pages widget
	$('#menu-all-pages li').each(function(i)
	{
	   $(this).attr('style', 'list-style:none; padding:5px;');
	});
	$('#menu-all-pages').attr('style', 'padding-left:0; margin-left:0;');
	

	//changes Bootstrap column class at certain browser sizes for better viewing
	if (($(window).width() > 676) && ($(window).width() < 1414)) {
  		$("#jquery-target").attr('class', 'col-md-12');
	}
	else {
	$("#jquery-target").attr('class', 'col-md-9');
	}

	//hides submenus in nav on mobile view
	$('.sub-menu li').each(function(i)
	{
	   $(this).addClass('erin-hide'); 
	});
	
	

		
	//does stuff on browser resize
	$( window ).resize(function() {
	
		//sets header at correct size to view all header elements	
		var height1 = $('#jaxypants-header').height();
		var newheight = height1+15+"px";
		$("#jaxypants-custom-header").css("height", newheight);
		$("#jaxypants-overlay").css("height", newheight);
		var height2 = $('#jaxypants-custom-header').height(); 
		
		//changes Bootstrap column class at certain browser sizes for better viewing	  
		if (($(window).width() > 676) && ($(window).width() < 1414)) {
			$("#jquery-target").attr('class', 'col-md-12');
		}
		else {
		$("#jquery-target").attr('class', 'col-md-9');
		}
  
	});
	
	

	
});

(function($) {


	$(document).ready(function() {
		$(".case-study-card-image").click(function(){
			$(".nav-dots").css("opacity","0");
			$(".sprinkler-animation").css("opacity","0");
			$(this).parent().children(".modal-bg").addClass("open");
			$(this).parent().children(".case-study-card-expanded").addClass("expanded");
		});
		$(".case-study-card-blurb").click(function(){
			$(".nav-dots").css("opacity","0");
			$(".sprinkler-animation").css("opacity","0");
			$(this).parent().children(".modal-bg").addClass("open");
			$(this).parent().children(".case-study-card-expanded").addClass("expanded");
		});
		$(".close-button").click(function(){
			$(".nav-dots").css("opacity","1");
			$(".sprinkler-animation").css("opacity","1");
			$(".modal-bg").removeClass("open");
			$(".case-study-card-expanded").removeClass("expanded");

			$(".team-member-expanded").removeClass("expanded");
		});
		$(".modal-bg").click(function() {
			$(".nav-dots").css("opacity","1");
			$(".sprinkler-animation").css("opacity","1");
			$(".modal-bg").removeClass("open");
			$(".case-study-card-expanded").removeClass("expanded");

			$(".team-member-expanded").removeClass("expanded");
		});

		$(".team-member-item .image").click(function() {
			$(".modal-bg").addClass("open");
			$(this).parent().find(".team-member-expanded").addClass("expanded");
		});
		$(".team-member-item .text").click(function() {
			$(".modal-bg").addClass("open");
			$(this).parent().find(".team-member-expanded").addClass("expanded");
		});

		// QA item
		$(".question").click(function() {
			$(this).parent().find(".answer").slideToggle(300);
			$(this).parent().toggleClass("active");
		});


		//dropdown

		$('html').click(function() {
		  $('.dropdown ul').slideUp();
		  $('.dropdown').removeClass('active');
		});

		$('.dropdown').click( function(event) {
			if($( window ).width() > 900) {
				$(this).children('ul').slideToggle();	
			}
			
			event.stopPropagation();
		});
		$(".dropdown select option").each( function(i) {
			$(this).parent().parent().find(".dropdown-list").append("<li>"+$(this).text()+"</li>");
		});
		$('.dropdown ul li').click(function() {
			var text = $(this).text();
		    $(this).parent().parent().children().children("h3").html(text);
		    $(this).parent().parent().find(".source").val(text);
		    if($("select.res-time").prop('selectedIndex') > 3) {
		    	console.log("more than 3");
		    }
		});
		

	});




})( jQuery );
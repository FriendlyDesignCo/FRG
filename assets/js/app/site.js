(function($) {


	$(document).ready(function() {

		$("#secondary-nav .reservation-widget a").click(function(e) {
			e.preventDefault();
			$(this).parent().children(".widget-wrap").toggle();
		});

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
		  $('.dropdown ul').hide();
		  $('.dropdown').removeClass('active');
		});

		$('html:not(.touch) .dropdown').click( function(event) {
			if($( window ).width() > 900) {
				$(this).children('ul').toggle();	
			}
			
			event.stopPropagation();
		});
		$(".dropdown select option").each( function(i) {
			$(this).parent().parent().find(".dropdown-list").append("<li>"+$(this).text()+"</li>");
		});
		$('.dropdown ul li').click(function() {
			var text = $(this).text();
			var index = $(this).index();
			console.log(index);
		    $(this).parent().parent().children().children("h3").html(text);
		    switch(text) {
			    case "DC":
			        $(this).parent().parent().children(".source").val(24712);
			        break;
			    case "MOCO":
			        $(this).parent().parent().children(".source").val(70411);
			        break;
			    case "TYSONS":
			        $(this).parent().parent().children(".source").val(150769);
			        break;
			    case "FARMERS FISHERS BAKERS":
			        $(this).parent().parent().children(".source").val(93802);
			        break;
			    default:
			        $(this).parent().parent().children(".source").val(text);
			}
		    
		    //$(this).parent().parent().children(".source :nth-child("+ index+1 +")").prop('selected', true)
		    if($("select.res-time").prop('selectedIndex') > 3) {
		    	console.log("more than 3");
		    }
		});
		

	});




})( jQuery );
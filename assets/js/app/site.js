(function($) {


	$(document).ready(function() {

		/*$("#gform_submit_button_2").click(function() {
			setTimeout(function(){ 
				if($(".footer-right .email-field").hasClass("gfield_error")) {
					$(".footer-right .ginput_container_email input").attr("placeholder", $(".email-field .validation_message").text());
					$(".footer-right .ginput_container_email input").css("background-color","#8B2332");
					console.log("msg: "+$(".email-field .validation_message").text());
				}
			}, 1000);
			
		});*/
		
		$("#secondary-nav .reservation-widget a.reservation").click(function(e) {
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
		



		$( ".form-group select" ).change(function() {
		  var index = $(this).index();

		  if($(this).parent().hasClass("time-list")) {
				console.log("time list");
				if(index > 18) {
					console.log("time after 3pm")
			    	//console.log("time between 11am and 3pm")
			    } else if(index > 8) {
			    	console.log("time between 11am and 3pm")
			    	//console.log("time between 7am and 11am")
			    } else {
			    	console.log("time between 7am and 11am")
			    	//console.log("time after 3pm")
			    }
			}

			if($(this).parent().hasClass("time-list")) {
				console.log("time list");
				if(index > 18) {
					console.log("time after 3pm")
			    	//console.log("time between 11am and 3pm")
			    } else if(index > 8) {
			    	console.log("time between 11am and 3pm")
			    	//console.log("time between 7am and 11am")
			    } else {
			    	console.log("time between 7am and 11am")
			    	//console.log("time after 3pm")
			    }
			}

			
		});

	});


})( jQuery );

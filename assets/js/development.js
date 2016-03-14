(function($) {


	$(document).ready(function() {
		$('.footer-right').on('DOMNodeInserted', function(e) {
		    if ($(e.target).is('.gfield_description.validation_message')) {
		       //DoSomething($(e.target));
		       alert("added");
		    }
		});


		$("#gform_submit_button_2").click(function() {
			setTimeout(function(){ 
				if($(".footer-right .email-field").hasClass("gfield_error")) {
					$(".footer-right .ginput_container_email input").attr("placeholder", $(".email-field .validation_message").text());
					$(".footer-right .ginput_container_email input").css("background-color","#8B2332");
					console.log("msg: "+$(".email-field .validation_message").text());
				}
			}, 300);
			
		});
		
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
		  alert( "Handler for .change() called." );
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





function reservationsAnimation() {
		var $plate = $('#plate img');
		var loc = '';
		
			
		$(document).on('change', '.reservation-page #form_wrap select', function() {
			var $self = $(this),
				field = $self.attr('name'),
				value = $self.attr('value'),
				data = reservation_images,
				img = '';
			
			if(field == 'RestaurantID') {
				
				for(i in data) {
					if(data[i].location == value) {
						img = data[i].image;
						loc = data[i].location;
					} else {
						continue;
					}
				}
				
				//$('.reservation-page input[name="startDate"]').removeClass('hidden');
				
			}
			if(field == 'PartySize') {
				
				for(i in data) {
					if(data[i].location == loc) {
						images = data[i].images;
						if(value < 5) {
							img = images.s1;
						} else {
							img = images.s2;
						}
					} else {
						continue;
					}
				}
				
				//$('.reservation-page .btn-submit').removeClass('hidden');
				
			}
			if(field == 'ResTime') {
				
				time = Date.parse(value).toString('H.mm');
				
				for(i in data) {
					if(data[i].location == loc) {
						images = data[i].images;
						if(time <= 11) {
							img = images.t1;
						} else if(time > 11 && time <= 15) {
							img = images.t2;
						} else {
							img = images.t3;
						}
					} else {
						continue;
					}
				}
				
				//$('.reservation-page select[name="PartySize"]').selectpicker('setStyle', 'hidden', 'remove');
				
			}
			
			//animate out
			setTimeout(function(){
				$plate.removeClass('in').addClass('out');
			},500);
			
			// 1500 millisecond animation
			
			//animate in
			setTimeout(function(){
				$plate.attr('src', img);
				$plate.removeClass('out').addClass('in');
			},1000);
			
		});
		
		$('.reservation-page input[name="startDate"]').on('dp.change', function() {
			var $self = $(this),
				value = $self.val(),
				data = reservation_images,
				weekday = '',
				img = '';
			
			var date = Date.parse(value);
			if(date != null) {
				weekday = date.is().weekday();
				for(i in data) {
					if(data[i].location == loc) {
						images = data[i].images;
						if(weekday == true) {
							img = images.weekday;
						} else {
							img = images.weekend;
						}
					} else {
						continue;
					}
				}
			}
				
			//$('.reservation-page select[name="ResTime"]').selectpicker('setStyle', 'hidden', 'remove');
			
			//animate out
			setTimeout(function(){
				$plate.removeClass('in').addClass('out');
			},500);
			
			// 1500 millisecond animation
			
			//animate in
			setTimeout(function(){
				$plate.attr('src', img);
				$plate.removeClass('out').addClass('in');
			},1000);
			
		});
	}
!function(e){e(document).ready(function(){e("#gform_submit_button_2").click(function(){setTimeout(function(){e(".footer-right .email-field").hasClass("gfield_error")&&(e(".footer-right .ginput_container_email input").attr("placeholder",e(".email-field .validation_message").text()),e(".footer-right .ginput_container_email input").css("background-color","#8B2332"),console.log("msg: "+e(".email-field .validation_message").text()))},1e3)}),e("#secondary-nav .reservation-widget a.reservation").click(function(a){a.preventDefault(),e(this).parent().children(".widget-wrap").toggle()}),e(".case-study-card-image").click(function(){e(".nav-dots").css("opacity","0"),e(".sprinkler-animation").css("opacity","0"),e(this).parent().children(".modal-bg").addClass("open"),e(this).parent().children(".case-study-card-expanded").addClass("expanded")}),e(".case-study-card-blurb").click(function(){e(".nav-dots").css("opacity","0"),e(".sprinkler-animation").css("opacity","0"),e(this).parent().children(".modal-bg").addClass("open"),e(this).parent().children(".case-study-card-expanded").addClass("expanded")}),e(".close-button").click(function(){e(".nav-dots").css("opacity","1"),e(".sprinkler-animation").css("opacity","1"),e(".modal-bg").removeClass("open"),e(".case-study-card-expanded").removeClass("expanded"),e(".team-member-expanded").removeClass("expanded")}),e(".modal-bg").click(function(){e(".nav-dots").css("opacity","1"),e(".sprinkler-animation").css("opacity","1"),e(".modal-bg").removeClass("open"),e(".case-study-card-expanded").removeClass("expanded"),e(".team-member-expanded").removeClass("expanded")}),e(".team-member-item .image").click(function(){e(".modal-bg").addClass("open"),e(this).parent().find(".team-member-expanded").addClass("expanded")}),e(".team-member-item .text").click(function(){e(".modal-bg").addClass("open"),e(this).parent().find(".team-member-expanded").addClass("expanded")}),e(".question").click(function(){e(this).parent().find(".answer").slideToggle(300),e(this).parent().toggleClass("active")}),e("html").click(function(){e(".dropdown ul").hide(),e(".dropdown").removeClass("active")}),e("html:not(.touch) .dropdown").click(function(a){e(window).width()>900&&e(this).children("ul").toggle(),a.stopPropagation()}),e(".dropdown select option").each(function(a){e(this).parent().parent().find(".dropdown-list").append("<li>"+e(this).text()+"</li>")}),e(".form-group select").change(function(){var a=e(this).index();e(this).parent().hasClass("time-list")&&(console.log("time list"),a>18?console.log("time after 3pm"):a>8?console.log("time between 11am and 3pm"):console.log("time between 7am and 11am")),e(this).parent().hasClass("time-list")&&(console.log("time list"),a>18?console.log("time after 3pm"):a>8?console.log("time between 11am and 3pm"):console.log("time between 7am and 11am"))})})}(jQuery);
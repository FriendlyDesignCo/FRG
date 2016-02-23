<?php
/**
 * Template Name: Reservations
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="" class="cookbook-page content-area ">
	
	<div id="content" class="site-content">
		<div class="form_wrap-inner active">

			<h2 class="form-header">Reserve a Table</h2>
				
			<div id="OT_searchWrapperAll">
				<form name="ism" id="ism" class="clearfix" method="post" target="_blank" action="http://www.opentable.com/restaurant-search.aspx">
					<div class="form-group dropdown">
						
			            <div class="drop"  style="">
			            	<h3 class="left">LOCATION</h3>
			            </div>
			            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>
				     
				          
						<select name="RestaurantID" class="source form-control selectpicker" onchange="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value">
							<option selected="selected" value="0" class="hidden">LOCATION</option>
							<option value="24712">DC</option>
							<option value="70411">MOCO</option>
							<option value="150769">TYSONS</option>
							<option value="93802" class="ffb">FARMERS FISHERS BAKERS</option>
						</select>
					</div>
					<div class="form-group">
						<span class="date-input">
							<input type="text" name="startDate" class="form-control datepicker" placeholder="DATE" />
							<span class="btn-caret"><i class="fa fa-angle-down"></i></span>
						</span>
					</div>
					<div class="form-group dropdown">
						<div class="drop"  style="">
			            	<h3 class="left">TIME</h3>
			            </div>
			            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>
				     
						<select name="ResTime" class="source form-control res-time selectpicker">
							<option selected="selected" value="0" class="hidden">TIME</option>
							<option value="7:00 AM">7:00 AM</option>
							<option value="7:30 AM">7:30 AM</option>
							<option value="8:00 AM">8:00 AM</option>
							<option value="8:30 AM">8:30 AM</option>
							<option value="9:00 AM">9:00 AM</option>
							<option value="9:30 AM">9:30 AM</option>
							<option value="10:00 AM">10:00 AM</option>
							<option value="10:30 AM">10:30 AM</option>
							<option value="11:00 AM">11:00 AM</option>
							<option value="11:30 AM">11:30 AM</option>
							<option value="12:00 PM">12:00 PM</option>
							<option value="12:30 PM">12:30 PM</option>
							<option value="1:00 PM">1:00 PM</option>
							<option value="1:30 PM">1:30 PM</option>
							<option value="2:00 PM">2:00 PM</option>
							<option value="2:30 PM">2:30 PM</option>
							<option value="3:00 PM">3:00 PM</option>
							<option value="3:30 PM">3:30 PM</option>
							<option value="4:00 PM">4:00 PM</option>
							<option value="4:30 PM">4:30 PM</option>
							<option value="5:00 PM">5:00 PM</option>
							<option value="5:30 PM">5:30 PM</option>
							<option value="6:00 PM">6:00 PM</option>
							<option value="6:30 PM">6:30 PM</option>
							<option value="7:00 PM">7:00 PM</option>
							<option value="7:30 PM">7:30 PM</option>
							<option value="8:00 PM">8:00 PM</option>
							<option value="8:30 PM">8:30 PM</option>
							<option value="9:00 PM">9:00 PM</option>
							<option value="9:30 PM">9:30 PM</option>
							<option value="10:00 PM">10:00 PM</option>
							<option value="10:30 PM">10:30 PM</option>
							<option value="11:00 PM">11:00 PM</option>
							<option value="11:30 PM">11:30 PM</option>
							<option value="12:00 AM">12:00 AM</option>
						</select>
					</div>
					<div class="form-group dropdown">
						<div class="drop"  style="">
			            	<h3 class="left">SIZE</h3>
			            </div>
			            <ul class="dropdown-list list-unstyled" style="display: none;"></ul>

						<select name="PartySize" class="source form-control party-size selectpicker">
							<option value="0" class="hidden">SIZE</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select>
					</div>
					<div class="form-actions">
						<input type="hidden" id="RestaurantReferralID" name="RestaurantReferralID" value="0">
						<input type="hidden" name="txtDateFormat" value="MM/dd/yyyy">
						<input type="hidden" name="widget" value="reservpage">
						<input type="submit" name="submit" value="SEARCH" class="button btn btn-submit" onmousedown="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value;fbq('track', 'Lead');" />
					</div>
				</form>		
				<h3 class="contact-text">Can’t get the reservation time you’re looking for online? Please call us, we might be able to help. 202-555-5555</h3>
			</div> 
			<script>
				
				(function($) {
				
				   	$('input.datepicker').datetimepicker({
						
						format: 'MM/DD/YYYY',
						useCurrent: false,
						defaultDate: false
					});
					$('span.date-input').click();

					    
				})(jQuery);
			</script>
		</div>
	</div><!-- #content -->
</div>


<?php get_footer(); ?>

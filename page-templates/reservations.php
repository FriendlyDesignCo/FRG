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

<div id="" class="reservation-page content-area ">
	
	<div id="content" class="site-content">
		<div class="form-wrap">
			<div class="form_wrap-inner left">
				<div class="OT_searchWrapperAll">
					<h2 class="form-header">Reserve a Table</h2>
					
				
					<form name="ism" id="ism" class="clearfix" method="post" target="_blank" action="http://www.opentable.com/restaurant-search.aspx">
						<div class="form-group dropdown">
							
				            <div class="drop"  style="">
				            	<h3 class="">LOCATION</h3>
				            </div>
				            <ul class="dropdown-list list-unstyled location-list" style="display: none;"></ul>
					     
					          
							<select name="RestaurantID" class="source form-control selectpicker location-picker" onchange="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value">
								<option value="0" class="hidden">LOCATION</option>
								<option value="24712">DC</option>
								<option value="70411">MOCO</option>
								<option value="150769">TYSONS</option>
								<option value="93802" class="ffb">FARMERS FISHERS BAKERS</option>
							</select>
						</div>
						<div class="form-group date">
							<span class="date-input">
								<input type="text" name="startDate" class="form-control datepicker" placeholder="DATE" autocomplete="off"/>
								<!--<input type="date" name="bday" min="2000-01-02">-->
								<span class="btn-caret"><i class="fa fa-angle-down"></i></span>
							</span>
						</div>
						<div class="form-group dropdown">
							<div class="drop"  style="">
				            	<h3 class="">TIME</h3>
				            </div>
				            <ul class="dropdown-list list-unstyled time-list" style="display: none;"></ul>
					     
							<select name="ResTime" class="source form-control res-time selectpicker">
								<option value="0" class="hidden">TIME</option>
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
				            	<h3 class="">SIZE</h3>
				            </div>
				            <ul class="dropdown-list list-unstyled party-size-list" style="display: none;"></ul>

							<select name="PartySize" class="source form-control party-size selectpicker party-size-list">
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
							<input type="submit" name="submit" value="SEARCH" class="button btn btn-submit" onmousedown="document.ism.RestaurantReferralID.value = document.ism.RestaurantID.value;/*fbq('track', 'Lead');*/" />
						</div>

					</form>		
					<h3 class="contact-text">Can’t get the reservation time you’re looking for online? Please call us, we might be able to help. <span class="phone-number">202-555-5555</span></h3>
				</div>
			</div>
			<div class="form_wrap-inner reservation_image_wrap right">
				<img src="<?php the_field('default_image') ?>">
			</div>
			<script>
					
					(function($) {

						
					   	$('input.datepicker').datetimepicker({
							
							format: 'MM/DD/YYYY',
							useCurrent: false,
							defaultDate: false,
							debug: true
						});
						    
					})(jQuery);
			</script>
			<div class="hide">
				<script type="text/javascript">
					<!--//--><![CDATA[//><!--
						var images = new Array();
						function preload() {
							for (i = 0; i < preload.arguments.length; i++) {
								images[i] = new Image()
								images[i].src = preload.arguments[i]
							}
						}
						preload(
							<?php 
								$pre_images = array();
								if(have_rows('locations')) : while(have_rows('locations')) : the_row();
									$sub_images = get_sub_field('images');
									$pre_images[] = get_sub_field('default_image');
									$pre_images[] = $sub_images[0]['size_1-4'];
									$pre_images[] = $sub_images[0]['size_5'];
									$pre_images[] = $sub_images[0]['weekday'];
									$pre_images[] = $sub_images[0]['weekend'];
									$pre_images[] = $sub_images[0]['time_before_11'];
									$pre_images[] = $sub_images[0]['time_11-3'];
									$pre_images[] = $sub_images[0]['time_after_3'];
								endwhile;
								
								$result = array_unique($pre_images);
								
								endif;
								
								if($result) {
									$i = 0;
									$total = count($result);
									foreach($result as $img) {
										$sep = $i == $total - 1 ? '' : ',';
										echo "\"{$img}\"{$sep}\n\t\t\t\t\t\t";
									$i++; }
								}
							?>
						)
					//--><!]]>
				</script>
				<script type="text/javascript">
				<?php if(have_rows('locations')) : ?>
				<!--//--><![CDATA[//><!--
				var reservation_images =
					<?php
						$json_array = array();
						$location = "";
						while(have_rows('locations')) : the_row();
							$loc = get_sub_field('location');
							switch($loc) {
								case 'dc':
									$location = '24712';
									break;
								case 'moco':
									$location = '70411';
									break;
								case 'tysons':
									$location = '150769';
									break;
								case 'ffb':
									$location = '93802';
									break;
							}
							$images = get_sub_field('images');
							$json_array[] = array(
								'location' => $location,
								'image' => get_sub_field('default_image'),
								'images' => array(
									's1' => $images[0]['size_1-4'],
									's2' => $images[0]['size_5'],
									'weekday' => $images[0]['weekday'],
									'weekend' => $images[0]['weekend'],
									't1' => $images[0]['time_before_11'],
									't2' => $images[0]['time_11-3'],
									't3' => $images[0]['time_after_3']
								)
							);
							
						endwhile;
						
						$json = json_encode($json_array, JSON_UNESCAPED_SLASHES);
						
						echo $json;
					?>
				//--><!]]>
				<?php endif; ?>
				<?php /* ?>
				<!--//--><![CDATA[//><!--
				var reservation_images = [
					{
						"location": "24712", // dc
						"image": "<?php echo get_template_directory_uri(); ?>/assets/img/p_shrimp_bucatini.png",
						"images": [
							{
								"s1": "Porchetta",
								"s2": "<?php echo get_template_directory_uri(); ?>/assets/img/p_ribeye.png",
								"weekday": "Shrimp Salad",
								"weekend": "Choco Cake",
								"t1": "French Toast",
								"t2": "Farmers Salad",
								"t3": "Fried Chicken"
							}
						]
					},
					{
						"location": "70411", // moco
						"image": "Pot Roast",
						"images": [
							{
								"s1": "Porchetta",
								"s2": "Carrott Cake",
								"weekday": "Chk salad",
								"weekend": "Beignets",
								"t1": "Steak & Eggs",
								"t2": "Goat Cheese Burger",
								"t3": "Shrimp Bucatini"
							}
						]
					},
					{
						"location": "150769", // tysons
						"image": "Fried Chicken",
						"images": [
							{
								"s1": "Porchetta",
								"s2": "Beef Tar Tar",
								"weekday": "Farmers Salad",
								"weekend": "Carbonara",
								"t1": "Steak & Eggs",
								"t2": "Shrimp Salad",
								"t3": "Ribeye"
							}
						]
					},
					{
						"location": "93802", // ffb
						"image": "Sushi",
						"images": [
							{
								"s1": "Tacos",
								"s2": "Pizza",
								"weekday": "Ahi Salad",
								"weekend": "Shrimp",
								"t1": "Beignets",
								"t2": "Beignets",
								"t3": "Goat Cheese Burger"
							}
						]
					}
				];
				//--><!]]>
				<?php */ ?>
				</script>
			</div>
		</div>
		
	</div><!-- #content -->
</div>


<?php get_footer(); ?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function beands_menu_display()
{
	
	/*For Monday*/
	$mon_opt = get_option('menu_mon');
	$mon_bk_id = $mon_opt['breakfast'];
	$mon_ln_id = $mon_opt['lunch'];
	$mon_dn_id = $mon_opt['dinner'];
	$mon_sn_id = $mon_opt['snack'];
	$mon_tb_id = get_option('thumb_mon');
	/*retrieve the corresponding posts*/
	$mon_bk = get_post($mon_bk_id);
	$mon_ln = get_post($mon_ln_id);
	$mon_dn = get_post($mon_dn_id);
	$mon_sn = get_post($mon_sn_id);
	
	
	/*For Tuesday*/
	$tue_opt = get_option('menu_tue');
	$tue_bk_id = $tue_opt['breakfast'];
	$tue_ln_id = $tue_opt['lunch'];
	$tue_dn_id = $tue_opt['dinner'];
	$tue_sn_id = $tue_opt['snack'];
	$tue_tb_id = get_option('thumb_tue');
	/*retrieve the corresponding posts*/
	$tue_bk = get_post($tue_bk_id);
	$tue_ln = get_post($tue_ln_id);
	$tue_dn = get_post($tue_dn_id);
	$tue_sn = get_post($tue_sn_id);
	
	/*For Wednesday*/
	$wed_opt = get_option('menu_wed');
	$wed_bk_id = $wed_opt['breakfast'];
	$wed_ln_id = $wed_opt['lunch'];
	$wed_dn_id = $wed_opt['dinner'];
	$wed_sn_id = $wed_opt['snack'];
	$wed_tb_id = get_option('thumb_wed');
	/*retrieve the corresponding posts*/
	$wed_bk = get_post($wed_bk_id);
	$wed_ln = get_post($wed_ln_id);
	$wed_dn = get_post($wed_dn_id);
	$wed_sn = get_post($wed_sn_id);
	
	/*For Thursday*/
	$thu_opt = get_option('menu_thu');
	$thu_bk_id = $thu_opt['breakfast'];
	$thu_ln_id = $thu_opt['lunch'];
	$thu_dn_id = $thu_opt['dinner'];
	$thu_sn_id = $thu_opt['snack'];
	$thu_tb_id = get_option('thumb_thu');
	/*retrieve the corresponding posts*/
	$thu_bk = get_post($thu_bk_id);
	$thu_ln = get_post($thu_ln_id);
	$thu_dn = get_post($thu_dn_id);
	$thu_sn = get_post($thu_sn_id);
	
	/*For Friday*/
	$fri_opt = get_option('menu_fri');
	$fri_bk_id = $fri_opt['breakfast'];
	$fri_ln_id = $fri_opt['lunch'];
	$fri_dn_id = $fri_opt['dinner'];
	$fri_sn_id = $fri_opt['snack'];
	$fri_tb_id = get_option('thumb_fri');
	/*retrieve the corresponding posts*/
	$fri_bk = get_post($fri_bk_id);
	$fri_ln = get_post($fri_ln_id);
	$fri_dn = get_post($fri_dn_id);
	$fri_sn = get_post($fri_sn_id);
	
	/*For Saturday*/
	$sat_opt = get_option('menu_sat');
	$sat_bk_id = $sat_opt['breakfast'];
	$sat_ln_id = $sat_opt['lunch'];
	$sat_dn_id = $sat_opt['dinner'];
	$sat_sn_id = $sat_opt['snack'];
	$sat_tb_id = get_option('thumb_sat');
	/*retrieve the corresponding posts*/
	$sat_bk = get_post($sat_bk_id);
	$sat_ln = get_post($sat_ln_id);
	$sat_dn = get_post($sat_dn_id);
	$sat_sn = get_post($sat_sn_id);
	
	/*For Sunday*/
	$sun_opt = get_option('menu_sun');
	$sun_bk_id = $sun_opt['breakfast'];
	$sun_ln_id = $sun_opt['lunch'];
	$sun_dn_id = $sun_opt['dinner'];
	$sun_sn_id = $sun_opt['snack'];
	$sun_tb_id = get_option('thumb_sun');
	/*retrieve the corresponding posts*/
	$sun_bk = get_post($sun_bk_id);
	$sun_ln = get_post($sun_ln_id);
	$sun_dn = get_post($sun_dn_id);
	$sun_sn = get_post($sun_sn_id);
	
	/*start the html code for menu table*/
	ob_start();
	?>
	
	<section id="beands-menu-container">
		
			<header>
			
				<section id="titles">
					<h1> WEEKLY MEAL PLANNER</h1>
					<h3> 
						<?php
						    $date1 = get_option('start_date');
							$date2 = get_option('end_date');
							echo 'Week of ' . $date1 . ' - ' . $date2; 
						?>
					</h3>
					<!-- <p> Recipes at www.BoiledEggsandSolders.com/weekly-meal-plans/Oct30 </p> -->
				</section>
			
				<section id="logo">
				   <img src="<?php echo IMAGE_DIR.'/logo.jpg'; ?>" alt="boiled eggs">
				</section>
			
				
			</header>
			
			
		
			<table>
				<thead>
					<th id="lable-day"></th>
					<th id="lable-thumbnail"></th>
					<th>Breakfast</th>
					<th>lunch</th>
					<th>Dinner</th>
					<th>Snacks</th>
				</thead>
				
				
				<tbody>
					<tr id="monday-menu">
					
						<td class="day" cell> M<br>O<br>N </td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($mon_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($mon_bk_id); ?>"> <?php echo $mon_bk->post_title; ?></a> </td>
						<td><a href="<?php echo get_permalink($mon_ln_id); ?>"> <?php echo $mon_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($mon_dn_id); ?>"> <?php echo $mon_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($mon_sn_id); ?>"> <?php echo $mon_sn->post_title; ?></a></td>
		
					</tr>
					
					
					<tr id="tuesday-menu">
					
						<td class="day"> T<br>U<br>E</td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($tue_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($tue_bk_id); ?>"> <?php echo $tue_bk->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($tue_ln_id); ?>"> <?php echo $tue_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($tue_dn_id); ?>"> <?php echo $tue_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($tue_sn_id); ?>"> <?php echo $tue_sn->post_title; ?></a></td>
					
					</tr>
					
					
					<tr id="wednesday-menu">
					
						<td class="day"> W<br>E<br>D </td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($wed_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($wed_bk_id); ?>"> <?php echo $wed_bk->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($wed_ln_id); ?>"> <?php echo $wed_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($wed_dn_id); ?>"> <?php echo $wed_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($wed_sn_id); ?>"> <?php echo $wed_sn->post_title; ?></a></td>
						
					</tr>
					
					<tr id="thursday-menu">
						
						<td class="day"> T<br>H<br>U </td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($thu_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($thu_bk_id); ?>"> <?php echo $thu_bk->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($thu_ln_id); ?>"> <?php echo $thu_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($thu_dn_id); ?>"> <?php echo $thu_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($thu_sn_id); ?>"> <?php echo $thu_sn->post_title; ?></a></td>
					
					</tr>
					
					<tr id="friday-menu">
						
						<td class="day"> F<br>R<br>I </td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($fri_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($fri_bk_id); ?>"> <?php echo $fri_bk->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($fri_ln_id); ?>"> <?php echo $fri_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($fri_dn_id); ?>"> <?php echo $fri_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($fri_sn_id); ?>"> <?php echo $fri_sn->post_title; ?></a></td>
					
					</tr>
					
					<tr id="saturday-menu">
						
						<td class="day"> S<br>A<br>T </td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($sat_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($sat_bk_id); ?>"> <?php echo $sat_bk->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($sat_ln_id); ?>"> <?php echo $sat_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($sat_dn_id); ?>"> <?php echo $sat_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($sat_sn_id); ?>"> <?php echo $sat_sn->post_title; ?></a></td>
					
					</tr>
					
					<tr id="sunday-menu">
						
						<td class="day"> S<br>U<br>N </td>
						<td class="thumbnail"><?php echo get_the_post_thumbnail($sun_tb_id,'thumbnail'); ?></td>
						<td><a href="<?php echo get_permalink($sun_bk_id); ?>"> <?php echo $sun_bk->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($sun_ln_id); ?>"> <?php echo $sun_ln->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($sun_dn_id); ?>"> <?php echo $sun_dn->post_title; ?></a></td>
						<td><a href="<?php echo get_permalink($sun_sn_id); ?>"> <?php echo $sun_sn->post_title; ?></a></td>
					
					</tr>
				</tbody>
			</table>
			
		</section><!--container ends here-->
<?php
return ob_get_clean();
}
add_shortcode('BES_menu','beands_menu_display');
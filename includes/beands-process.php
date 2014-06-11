<?php

/* 
 * This file holds the function for displaying the menu form for the admin, collects the input and saves the new input
 */

function beands_menu_form()
{	
	global $post;
	/* $args = array('numberposts' => -1);*/
	$posts_bf = get_posts('category_name=breakfast&numberposts=-1');
	$posts_ln = get_posts('category_name=lunch&numberposts=-1');
	$posts_dn = get_posts('category_name=dinner&numberposts=-1');
	$posts_sn = get_posts('category_name=snacks&numberposts=-1');
	
	?>
	
	<h1 id="beands-heading"> Boiled Eggs and Soldiers - Menu Planner</h1>
	
	<div id="beands-week">
		<form id="beands-week-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="week-start">From:</label>
			<input type="date" name="week-start"></input>&nbsp; &nbsp;
			
			<label for="week-end">To:</label>
			<input type="date" name="week-end"></input>
			
			<input type="submit" name="sub_week_form" value="go"></input>
		</form>	
	</div>
	
	<?php
	if(isset($_POST['sub_week_form']))
	{
		$wk_start = $_POST['week-start'];
		$wk_end = $_POST['week-end'];
		
		update_option('start_date',$wk_start);
		update_option('end_date',$wk_end);
	}
	?>
	
	<div class="beands_wrap">
		<h3>Menu for Monday</h3>
		
		<form id="mon-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="mon-bf">Breakfast :</label><br>
			<select name="mon-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="mon-ln">Lunch :</label><br>
			<select type="select" name="mon-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="mon-dn">Dinner :</label><br>
			<select type="select" name="mon-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="mon-sn">Snack :</label><br>
			<select type="select" name="mon-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_mon_menu" value="save menu"></input>
		</form><!--monday menu form 'mon-form' ends here-->
		
		<?php 
		if(isset($_POST['sub_mon_menu'])) 
		{ 	
			//Update for Menu options
			$mon_bf = $_POST['mon-bf'];
			$mon_lunch = $_POST['mon-ln'];
			$mon_dinner = $_POST['mon-dn'];
			$mon_snack = $_POST['mon-sn'];
			
			$mon_new_menu = array(
				"breakfast" => $mon_bf,
				"lunch" => $mon_lunch,
				"dinner" => $mon_dinner,
				"snack" => $mon_snack
				);
		update_option('menu_mon',$mon_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="mon-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="mon-thumb" value="<?php echo $mon_bf; ?>"><?php echo get_the_post_thumbnail($mon_bf,array(80,80)); ?></input>
			<input type="radio" name="mon-thumb" value="<?php echo $mon_lunch ?>"><?php echo get_the_post_thumbnail($mon_lunch,array(80,80)); ?></input>
			<input type="radio" name="mon-thumb" value="<?php echo $mon_dinner; ?>"><?php echo get_the_post_thumbnail($mon_dinner,array(80,80)); ?></input>
			<input type="radio" name="mon-thumb" value="<?php echo $mon_snack; ?>"><?php echo get_the_post_thumbnail($mon_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_mon_thumbs" value="save image"></input>
		</form>
		
		<?php 
		}
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_mon_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$mon_thumb = $_POST['mon-thumb'];
			update_option('thumb_mon',$mon_thumb);		
		}
		?>
	</div><!--wrapper ends here-->
	
	
	<div class="beands_wrap">
		<h3>Menu for Tuesday</h3>
		
		<form id="tue-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="tue-bf">Breakfast :</label><br>
			<select name="tue-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="tue-ln">Lunch :</label><br>
			<select type="select" name="tue-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="tue-dn">Dinner :</label><br>
			<select type="select" name="tue-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="tue-sn">Snack :</label><br>
			<select type="select" name="tue-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_tue_menu" value="save menu"></input>
		</form>
		
		<?php 
		if(isset($_POST['sub_tue_menu'])) 
		{ 	
			//Update for Menu options
			$tue_bf = $_POST['tue-bf'];
			$tue_lunch = $_POST['tue-ln'];
			$tue_dinner = $_POST['tue-dn'];
			$tue_snack = $_POST['tue-sn'];
			
			$tue_new_menu = array(
				"breakfast" => $tue_bf,
				"lunch" => $tue_lunch,
				"dinner" => $tue_dinner,
				"snack" => $tue_snack
				);
		update_option('menu_tue',$tue_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="mon-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="tue-thumb" value="<?php echo $tue_bf; ?>"><?php echo get_the_post_thumbnail($tue_bf,array(80,80)); ?></input>
			<input type="radio" name="tue-thumb" value="<?php echo $tue_lunch; ?>"><?php echo get_the_post_thumbnail($tue_lunch,array(80,80)); ?></input>
			<input type="radio" name="tue-thumb" value="<?php echo $tue_dinner; ?>"><?php echo get_the_post_thumbnail($tue_dinner,array(80,80)); ?></input>
			<input type="radio" name="tue-thumb" value="<?php echo $tue_snack; ?>"><?php echo get_the_post_thumbnail($tue_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_tue_thumbs" value="save image"></input>
		</form>
		
		<?php 
		} 
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_tue_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$tue_thumb = $_POST['tue-thumb'];
			update_option('thumb_tue',$tue_thumb);
				
		}
		?>
	</div><!--wrapper ends here-->
	
	
	<div class="beands_wrap">
		<h3>Menu for Wednesday</h3>
		
		<form id="wed-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="wed-bf">Breakfast :</label><br>
			<select name="wed-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="wed-ln">Lunch :</label><br>
			<select type="select" name="wed-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="wed-dn">Dinner :</label><br>
			<select type="select" name="wed-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="wed-sn">Snack :</label><br>
			<select type="select" name="wed-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_wed_menu" value="save menu"></input>
		</form><!--monday menu form 'mon-form' ends here-->
		
		<?php 
		if(isset($_POST['sub_wed_menu'])) 
		{ 	
			//Update for Menu options
			$wed_bf = $_POST['wed-bf'];
			$wed_lunch = $_POST['wed-ln'];
			$wed_dinner = $_POST['wed-dn'];
			$wed_snack = $_POST['wed-sn'];
			
			$wed_new_menu = array(
				"breakfast" => $wed_bf,
				"lunch" => $wed_lunch,
				"dinner" => $wed_dinner,
				"snack" => $wed_snack
				);
		update_option('menu_wed',$wed_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="wed-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="wed-thumb" value="<?php echo $wed_bf; ?>"><?php echo get_the_post_thumbnail($wed_bf,array(80,80)); ?></input>
			<input type="radio" name="wed-thumb" value="<?php echo $wed_lunch; ?>"><?php echo get_the_post_thumbnail($wed_lunch,array(80,80)); ?></input>
			<input type="radio" name="wed-thumb" value="<?php echo $wed_dinner; ?>"><?php echo get_the_post_thumbnail($wed_dinner,array(80,80)); ?></input>
			<input type="radio" name="wed-thumb" value="<?php echo $wed_snack; ?>"><?php echo get_the_post_thumbnail($wed_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_wed_thumbs" value="save image"></input>
		</form>
		
		<?php 
		} 
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_wed_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$wed_thumb = $_POST['wed-thumb'];
			update_option('thumb_wed',$wed_thumb);
				
		}
		?>
	</div><!--wrapper for wednesday ends here-->
	
	<div class="beands_wrap">
		<h3>Menu for Thursday</h3>
		
		<form id="thu-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="thu-bf">Breakfast :</label><br>
			<select name="thu-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="thu-ln">Lunch :</label><br>
			<select type="select" name="thu-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="thu-dn">Dinner :</label><br>
			<select type="select" name="thu-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="thu-sn">Snack :</label><br>
			<select type="select" name="thu-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_thu_menu" value="save menu"></input>
		</form>
		
		<?php 
		if(isset($_POST['sub_thu_menu'])) 
		{ 	
			//Update for Menu options
			$thu_bf = $_POST['thu-bf'];
			$thu_lunch = $_POST['thu-ln'];
			$thu_dinner = $_POST['thu-dn'];
			$thu_snack = $_POST['thu-sn'];
			
			$thu_new_menu = array(
				"breakfast" => $thu_bf,
				"lunch" => $thu_lunch,
				"dinner" => $thu_dinner,
				"snack" => $thu_snack
				);
		update_option('menu_thu',$thu_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="thu-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="thu-thumb" value="<?php echo $thu_bf; ?>"><?php echo get_the_post_thumbnail($thu_bf,array(80,80)); ?></input>
			<input type="radio" name="thu-thumb" value="<?php echo $thu_lunch; ?>"><?php echo get_the_post_thumbnail($thu_lunch,array(80,80)); ?></input>
			<input type="radio" name="thu-thumb" value="<?php echo $thu_dinner; ?>"><?php echo get_the_post_thumbnail($thu_dinner,array(80,80)); ?></input>
			<input type="radio" name="thu-thumb" value="<?php echo $thu_snack; ?>"><?php echo get_the_post_thumbnail($thu_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_thu_thumbs" value="save image"></input>
		</form>
		
		<?php 
		} 
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_thu_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$thu_thumb = $_POST['thu-thumb'];
			update_option('thumb_thu',$thu_thumb);
				
		}
		?>
	</div><!--wrapper for thursday ends here-->
	
	<div class="beands_wrap">
		<h3>Menu for Friday</h3>
		
		<form id="fri-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="fri-bf">Breakfast :</label><br>
			<select name="fri-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="fri-ln">Lunch :</label><br>
			<select type="select" name="fri-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="fri-dn">Dinner :</label><br>
			<select type="select" name="fri-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="fri-sn">Snack :</label><br>
			<select type="select" name="fri-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_fri_menu" value="save menu"></input>
		</form>
		
		<?php 
		if(isset($_POST['sub_fri_menu'])) 
		{ 	
			//Update for Menu options
			$fri_bf = $_POST['fri-bf'];
			$fri_lunch = $_POST['fri-ln'];
			$fri_dinner = $_POST['fri-dn'];
			$fri_snack = $_POST['fri-sn'];
			
			$fri_new_menu = array(
				"breakfast" => $fri_bf,
				"lunch" => $fri_lunch,
				"dinner" => $fri_dinner,
				"snack" => $fri_snack
				);
		update_option('menu_fri',$fri_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="fri-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="fri-thumb" value="<?php echo $fri_bf; ?>"><?php echo get_the_post_thumbnail($fri_bf,array(80,80)); ?></input>
			<input type="radio" name="fri-thumb" value="<?php echo $fri_lunch; ?>"><?php echo get_the_post_thumbnail($fri_lunch,array(80,80)); ?></input>
			<input type="radio" name="fri-thumb" value="<?php echo $fri_dinner; ?>"><?php echo get_the_post_thumbnail($fri_dinner,array(80,80)); ?></input>
			<input type="radio" name="fri-thumb" value="<?php echo $fri_snack; ?>"><?php echo get_the_post_thumbnail($fri_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_fri_thumbs" value="save image"></input>
		</form>
		
		<?php 
		} 
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_fri_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$fri_thumb = $_POST['fri-thumb'];
			update_option('thumb_fri',$fri_thumb);
				
		}
		?>
	</div><!--wrapper for friday ends here-->
	
	
	<div class="beands_wrap">
		<h3>Menu for Saturday</h3>
		
		<form id="sat-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="sat-bf">Breakfast :</label><br>
			<select name="sat-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="sat-ln">Lunch :</label><br>
			<select type="select" name="sat-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="sat-dn">Dinner :</label><br>
			<select type="select" name="sat-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="sat-sn">Snack :</label><br>
			<select type="select" name="sat-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_sat_menu" value="save menu"></input>
		</form>
		
		<?php 
		if(isset($_POST['sub_sat_menu'])) 
		{ 	
			//Update for Menu options
			$sat_bf = $_POST['sat-bf'];
			$sat_lunch = $_POST['sat-ln'];
			$sat_dinner = $_POST['sat-dn'];
			$sat_snack = $_POST['sat-sn'];
			
			$sat_new_menu = array(
				"breakfast" => $sat_bf,
				"lunch" => $sat_lunch,
				"dinner" => $sat_dinner,
				"snack" => $sat_snack
				);
		update_option('menu_sat',$sat_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="sat-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="sat-thumb" value="<?php echo $sat_bf; ?>"><?php echo get_the_post_thumbnail($sat_bf,array(80,80)); ?></input>
			<input type="radio" name="sat-thumb" value="<?php echo $sat_lunch; ?>"><?php echo get_the_post_thumbnail($sat_lunch,array(80,80)); ?></input>
			<input type="radio" name="sat-thumb" value="<?php echo $sat_dinner; ?>"><?php echo get_the_post_thumbnail($sat_dinner,array(80,80)); ?></input>
			<input type="radio" name="sat-thumb" value="<?php echo $sat_snack; ?>"><?php echo get_the_post_thumbnail($sat_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_sat_thumbs" value="save image"></input>
		</form>
		
		<?php 
		} 
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_sat_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$sat_thumb = $_POST['sat-thumb'];
			update_option('thumb_sat',$sat_thumb);
				
		}
		?>
	</div><!--wrapper for saturday ends here-->
	
	<div class="beands_wrap">
		<h3>Menu for Sunday</h3>
		
		<form id="sun-form" method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
			
			<label for="sun-bf">Breakfast :</label><br>
			<select name="sun-bf">
				<option value="">Select a breakfast recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_bf as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="sun-ln">Lunch :</label><br>
			<select type="select" name="sun-ln">
				<option value="">Select a lunch recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_ln as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="sun-dn">Dinner :</label><br>
			<select type="select" name="sun-dn">
				<option value="">Select a dinner recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_dn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<label for="sun-sn">Snack :</label><br>
			<select type="select" name="sun-sn">
				<option value="">Select a snack recipe</option>
				<option value="">------------------</option>
				<?php foreach($posts_sn as $post) : setup_postdata($post); ?>
					
				<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
					
				<?php	endforeach; ?>
			</select><br>
				
			<input type="submit" class="menu-sub" name="sub_sun_menu" value="save menu"></input>
		</form>
		
		<?php 
		if(isset($_POST['sub_sun_menu'])) 
		{ 	
			//Update for Menu options
			$sun_bf = $_POST['sun-bf'];
			$sun_lunch = $_POST['sun-ln'];
			$sun_dinner = $_POST['sun-dn'];
			$sun_snack = $_POST['sun-sn'];
			
			$sun_new_menu = array(
				"breakfast" => $sun_bf,
				"lunch" => $sun_lunch,
				"dinner" => $sun_dinner,
				"snack" => $sun_snack
				);
		update_option('menu_sun',$sun_new_menu);
		?>
		<p>Menu successfully saved. Please, choose an image below:</p><br>
		<form id="sun-thumbs-form" class="beands-show-thumbs" method="post" action="<?php $_POST['REQUEST_URI']; ?>">
			<input type="radio" name="sun-thumb" value="<?php echo $sun_bf; ?>"><?php echo get_the_post_thumbnail($sun_bf,array(80,80)); ?></input>
			<input type="radio" name="sun-thumb" value="<?php echo $sun_lunch; ?>"><?php echo get_the_post_thumbnail($sun_lunch,array(80,80)); ?></input>
			<input type="radio" name="sun-thumb" value="<?php echo $sun_dinner; ?>"><?php echo get_the_post_thumbnail($sun_dinner,array(80,80)); ?></input>
			<input type="radio" name="sun-thumb" value="<?php echo $sun_snack; ?>"><?php echo get_the_post_thumbnail($sun_snack,array(80,80)); ?></input>
		
			<input type="submit" class="menu-sub" name="sub_sun_thumbs" value="save image"></input>
		</form>
		
		<?php 
		} 
		/*collect the set value and update the thumbnail */
		if(isset($_POST['sub_sun_thumbs']))	
		{
			echo "<p>Image successfully updated</p>";
			$sun_thumb = $_POST['sun-thumb'];
			update_option('thumb_sun',$_thumb);
				
		}
		?>
	</div><!--wrapper ends here-->

	<?php
	
}
function beands_add_menu_page()
{
	add_options_page('Menu planner', 'BE&S Menu Planner','manage_options','beaands-menu-form','beands_menu_form');
}
add_action('admin_menu','beands_add_menu_page');
<?php
/*
Template Name: speakers
*/
get_header();
?>



<div class="container">
   <div class="text">
      <h2 class="subtitle"><?php the_field('subtitle');?></h2>
      <p class="text_about">
         <?php the_field('text_about');?>
      </p>
   </div>

   

   <div class="speakers_block">
      <?php
      $my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'speakers',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
   ?>
<div class="speaker">
         <div class="speaker_photo"><img src="<?php the_field('photo');?>" alt="speaker"></div>
         <h2 class="speaker_name"><?php the_field('speaker_name');?></h2>
         <p class="speaker_about"><?php the_field('about-speaker');?></p>
         <button><a href="<?php the_field('link_learn_more');?>">Learn more</a></button>
      </div>
   <?php

	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс
      ?>
      
</div>
</div>


<?php
get_footer();
?>
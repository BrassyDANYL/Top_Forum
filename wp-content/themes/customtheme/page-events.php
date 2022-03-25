<?php
/*
Template Name: Events
*/
get_header();
?>

 <div class="container">
      <div class="text">
         <h2 class="subtitle"><?php the_field('subtitle');?></h2>
         <p class="text_about">
<?php the_field('text');?>
         </p>
      </div>

      <div class="events">

      <?php
         $my_posts = get_posts( array(
            'numberposts' => 5,
            'category_name'    => 'article',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
         ) );

         foreach( $my_posts as $post ){
            setup_postdata( $post );
               ?>
         <div class="event">
            <img src="<?php the_field('photo');?>" alt="event">
            <div class="descrition">
               <h2>V<?php the_field('subtitle');?></h2>
               <h2 class="date"><?php the_field('date');?></h2>
               <p class="about"><?php the_field('more_about');?></p>
               <button><a href="<?php the_field('link');?>">Learn more</a></button>
            </div>
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
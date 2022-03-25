<?php
/*
Template Name: Media
*/
?>
<?php
get_header();
?>
<div class="container">
        <div class="text">
            <h2 class="subtitle">ARTICLES FROM SPONSORS</h2>
            <p class="text_about">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>

        <div id="articles__block" class="articles__block">
            <?php
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'article',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                        ?>
                               <div class="article <?php
                               $field = get_field('post_hidden');
                               if($field == Yes){
                                   ?>
                                    hidden
                                   <?php
                               }
                               ?>">
                <img src="<?php the_field('photo');?>" alt="photo">
                <h3 class="subtitle"><a href="#"><?php the_field('subtitle');?></a></h3>
                <p class="about"><?php the_field('about');?>
                </p>
            </div>  
                        <?php
                    // формат вывода the_title() ...
                }

                wp_reset_postdata(); // сброс
            ?>

           

            <button class="show-more" onclick="myFunction6()">More article</button>

           
        </div>

    </div>
<?php
get_footer();
?>
<?php
get_header();
?>

    <!--BANNER-->
    <div class="banner">

        <div class="container">
            <ul class="border">
                <?php

                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'banner',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                <li class="slider-item post">
                    <div class="date">
                        <span class="numbers"><?php the_field('numbers');?></span>
                        <span class="month"><?php the_field('month');?></span>
                        <span class="year"><?php the_field('year');?></span>
                    </div>
                    <div class="textblock">
                        <h2 class="subtitle"><?php the_field('subtitle');?></h2>
                        <div class="text">
                            <?php the_field('text');?>y
                        </div>
                        <h4 class="place"><?php the_field('place');?></h4>
                    </div>
                </li>
                        <?php

                        // формат вывода the_title() ...
                    }

                    wp_reset_postdata();
                ?>  
            </ul>
        </div>
    </div>
    <!--CONTENT-->
    <div class="container">
        <div class="about_text">
            <p>
                <?php the_field('about_text'); ?>
            </p>
        </div>
        <div class="sponsors">
            <div class="sponsors_item">
                <div class="sponsors_item_img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/people.png" alt="people">
                </div>
                <h2 class="sponsors_item_title"><?php the_field('sponsors_item_title');?></h2>
                <p class="sponsors_item_text">
                  <?php the_field('sponsors_item_text');?>
                </p>
                <button class="sponsors_item_button"><a href="#">Learn more</a></button>
                <h6 class="sponsors_item_deskr">Wealth TOP FORUM Israel 2016</h6>
            </div>
            <div class="sponsors_item">
                <div class="sponsors_item_img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/delegate.png" alt="people">
                </div>
                <h2 class="sponsors_item_title"><?php the_field('sponsors_item_title_2');?></h2>
                <p class="sponsors_item_text">
                  <?php the_field('sponsors_item_text_2');?>
                    
                </p>
                <button class="sponsors_item_button"><a href="#">Learn more</a></button>
                <h6 class="sponsors_item_deskr">Wealth TOP FORUM Israel 2016</h6>
            </div>
            <div class="sponsors_item">
                <div class="sponsors_item_img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/people.png" alt="people">
                </div>
                <h2 class="sponsors_item_title"><?php the_field('sponsors_item_title_3');?></h2>
                <p class="sponsors_item_text">
                  <?php the_field('sponsors_item_text_3');?>
                    
                </p>
                <button class="sponsors_item_button"><a href="#">Learn more</a></button>
                <h6 class="sponsors_item_deskr">Wealth TOP FORUM Israel 2016</h6>
            </div>
        </div>
        <div class="sponsors_buttons">
            <button class="sponsors_buttons_register">
            <a href="/registration/">REGISTER NOW</a>
         </button>
            <button onclick="myFunction4()" class="sponsors_buttons_subscribe">
         SUBSCRIBE
         </button>
        </div>
    </div>
    <!--POP-UP-->
    <div id="myPopup" class="pop-up-container">
        <div class="pop-up">
            <button onclick="myFunction5()" class="close"></button>
            <h2 class="title">subscribe</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <?php
            echo do_shortcode('[contact-form-7 id="468" title="pop-ip"]');
            ?>
        </div>
    </div>

    <!--CUSTOMER REVIEWS-->
    <div class="reviews">
        <div class="container">
            <h2 class="reviews_subtitle">CUSTOMER REVIEWS</h2>
            <div class="review_slider">
                <?php
                $my_posts = get_posts( array(
                    'numberposts' => 4,
                    'category_name'    => 'reviews',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                        ?>
                         <div class="review">
                    <div class="photo-wrapper">
                        <div class="photo"><img src="
                        <?php 
                        if(get_field('userphoto'))         {
                          the_field('userphoto');
                        }else{
                            echo get_template_directory_uri() . '/assets/img/icons/no_photo.png';
                        }
                                       
                        ; ?>" alt="photo"></div>
                    </div>
                    <div class="comment">
                        <h2 class="user-name"><?php the_field('nameuser');?></h2>
                        <div class="date"><?php the_field('date');?></div>
                        <p class="text"><?php the_field('comment');?></p>
                    </div>
                </div>
                        <?php
                    // формат вывода the_title() ...
                }

                wp_reset_postdata(); // сброс   
                ?>
                
            </div>

        </div>
    </div>
    <!--PROMO VIDEO-->
    <div class="promo">
        <div class="container">
            <h2 class="subtitle">promo video</h2>
            <video id="my-player" class="video-js" preload="auto" controls data-setup='{}' poster="<?php echo bloginfo('template_url'); ?>/assets/img/poster-video.png">
            <source src="<?php echo bloginfo('template_url'); ?>/assets/video/Пресс-конференция презедента Владимира Зеленского.mp4" type="video/mp4">
         </video>
        </div>
    </div>
    <!--OUR CLIENTS-->
    <div class="clients">
        <h2 class="subtitle">our clients</h2>
        <div class="container clients_slider">
            <?php
                $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'ourclients',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
    ?>
            <a href="#"><img src="<?php the_field('clients_logo');?>" alt="clients logo"></a>
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
<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="container">
        <div class="contacts-block">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.173105982271!2d17.148528515650007!3d48.164744879225516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8ed00f935e21%3A0xcb9c726bd2b3cf6b!2zVHJuYXZza8OhIGNlc3RhIDE3Ny84MiwgODIxIDAyIEJyYXRpc2xhdmEsINCh0LvQvtCy0LDQutC40Y8!5e0!3m2!1sru!2sfr!4v1647341873563!5m2!1sru!2sfr"
                    width="750" height="440" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contacts">
                <div class="contact-item">
                    <h2 class="company-name"><?php the_field('department_1');?></h2>
                    <h3 class="name"><?php the_field('name_1');?></h3>
                    <h3 class="mail">E:
                        <a href="mailto:<?php the_field('mail_1');?>"><?php the_field('mail_1');?></a>
                    </h3>
                    <h3 class="telephone">P:
                        <a href="tel:<?php the_field('telephone_1');?>"><?php the_field('telephone_1');?></a>
                    </h3>

                </div>

                <div class="contact-item">
                    <h2 class="company-name"><?php the_field('department_2');?></h2>
                    <h3 class="name"><?php the_field('name_2');?></h3>
                    <h3 class="mail">E:
                        <a href="mailto:<?php the_field('mail_2');?>"><?php the_field('mail_2');?></a>
                    </h3>
                    <h3 class="telephone">
                        <a href="tel:<?php the_field('telephone_2');?>"><?php the_field('telephone_2');?></a>
                    </h3>

                </div>

                <div class="contact-item">
                    <h2 class="company-name"><?php the_field('department_3');?></h2>
                    <h3 class="name"><?php the_field('name_3');?></h3>
                    <h3 class="mail">E:
                        <a href="mailto:<?php the_field('mail_3');?>"><?php the_field('mail_3');?></a>
                    </h3>
                    <h3 class="telephone">
                        <a href="telto:<?php the_field('telephone_3');?>"><?php the_field('telephone_3');?></a>
                    </h3>

                </div>

                <div class="contact-item">
                    <h2 class="company-name"><?php the_field('department_4');?></h2>
                    <h3 class="name"><?php the_field('name_4');?></h3>
                    <h3 class="mail">E:
                        <a href="mailto:<?php the_field('mail_4');?>"><?php the_field('mail_4');?></a>
                    </h3>
                    <h3 class="telephone">P:
                        <a href="telto:<?php the_field('telephone_4');?>"><?php the_field('telephone_4');?></a>
                    </h3>

                </div>
            </div>
        </div>
    </div>

    <div class="feedback_block">
        <h2>Feedback</h2>

        <div class="container">
            <div class="feedback_form">
                 <?php 
echo do_shortcode('[contact-form-7 id="467" title="Contact form 1"]');
                ?>
            </div>
            <div class="feedback_info">
                <h3>You can also ask questions by phone of a hot line:</h3>
                <h2 class="phone"><a href="tel:<?php the_field('telephone_5');?>"><?php the_field('telephone_5');?></a></h2>
                <p>The answers to many questions already in our <a href="#">FAQ</a>
                   <p>All suggestions and comments are considered mandatory!</p> </p>
            </div>

        </div>
    </div>

<?php
get_footer();
?>
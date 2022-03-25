<!--FOOTER-->
    <footer>
        <div class="container">
            <div class="footer_menu">
                <nav id="menu" class="menu">
                    <ul class="links">
                        <li class="menu-item">
                  <h2 class="subtitle">TOP FORUM</h2>
               </li>
                        <?php
                        wp_nav_menu( [
                        'menu'            => 'main',
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );
                                            ?>
                    </ul>
                </nav>
            </div>
            <div class="footer_contact">
                <h2 class="subtitle">CONCTACT</h2>
                <h3 class="group">Top Forum Group</h3>
                <h3 class="address"><?php the_field(address)?></h3>
                <br>
                <br>
                <a href="tel:<?php the_field(phone)?>" class="phone"><?php the_field(phone)?></a><br>
                <a href="mailto:<?php the_field(mail)?>" class="mail"><?php the_field(mail)?></a>

            </div>
            <button class="follow"><a href="#">FOLLOW US</a></button>
        </div>
        <div class="container">
            <div class="footer_copyright">
                <div class="copyright">
                    <h3>© 2014 Top Forum Group. All rights reserved.</h3>
                </div>

                <div class="development">
                    <h3>
                        Website development:
                    </h3>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/development.png" alt="logo">
                </div>
            </div>
        </div>
         
    </footer>
    <?php
         wp_footer();
         ?>
</body>

</html>
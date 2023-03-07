    </main>
    <footer class="footer">
            <div class="container">
                <div class="footer-main">
                    <div class="footer__col footer__col_1">
                        <a href="#" class="footer__logo">
                        <?php $logo = carbon_get_theme_option('logo')?>
                        <?php echo wp_get_attachment_image($logo, 'full')?>
                        </a>
                        <p class="footer__text">
                            <?php echo carbon_get_theme_option('footer_text')?>
                        </p>
                    </div>
                    <ul class="footer__col footer__col_2">
                        <li>
                            <a href="mailto:<?php echo carbon_get_theme_option('footer_mail')?>">
                                <span>
                                    <img src="<?php echo get_template_directory_uri()?>/img/footer_1.svg" alt="mail icon">
                                </span>
                                <?php echo carbon_get_theme_option('footer_mail')?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?php echo carbon_get_theme_option('footer_tel')?>">
                                <span>
                                    <img src="<?php echo get_template_directory_uri()?>/img/footer_2.svg" alt="tel icon">
                                </span>
                                <?php echo carbon_get_theme_option('footer_tel')?>
                            </a>
                        </li>
                    </ul>
                    <?php $socials = carbon_get_theme_option('footer_socials')?>
                        <?php if(!empty($socials)) : ?>
                            <ul class="footer__socials footer__col_3">
                            <?php foreach($socials as $social) : ?>
                                <li>
                                    <a href="<?php echo $social['footer_socials_link']?>">
                                        <?php echo $social['footer_socials_name']?>
                                    </a>
                                </li>
                            <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                </div>
                <div class="footer-bottom">
                    <p class="footer__copy">
                        ©<?php the_time('Y'); ?> Davina Pins. All Rights Reserved
                    </p>
                    <a href="#">Privacy Policy | Terms оf use</a>
                </div>
            </div>
        </footer>
</div>

    <?php wp_footer() ?>
</body>
</html>
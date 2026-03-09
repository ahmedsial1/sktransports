    <footer>
        <div class="footer-container">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="<?php bloginfo('name'); ?> Logo"></a>
                <p data-i18n="footer_desc"><?php bloginfo('description'); ?></p>
                <div class="social-links" style="margin-top: 30px;">
                    <a href="<?php the_field('facebook_link', 'option'); ?>" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php the_field('instagram_link', 'option'); ?>" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?php the_field('tiktok_link', 'option'); ?>" class="social-icon" target="_blank"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4 data-i18n="footer_links_title">Quick Links</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav_home">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/fleet')); ?>" data-i18n="nav_fleet">Fleet Portfolio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>" data-i18n="nav_services">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>" data-i18n="nav_about">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>" data-i18n="nav_contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4 data-i18n="footer_contact_title">Contact Info</h4>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-text">
                        <p data-i18n="footer_hq">Muscat Headquarters</p>
                        <span data-i18n="footer_addr"><?php the_field('hq_address', 'option'); ?></span>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-text">
                        <p data-i18n="footer_hotline">Direct Hotline</p>
                        <span data-i18n="phone_md"><?php the_field('md_phone_number', 'option'); ?> (MD)</span>
                        <span data-i18n="phone_ops"><?php the_field('ops_phone', 'option'); ?> (Ops)</span>
                        <span data-i18n="phone_landline"><?php the_field('landline', 'option'); ?> (Landline)</span>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-text">
                        <p data-i18n="footer_email">Official Email</p>
                        <span><?php the_field('official_email', 'option'); ?></span>
                    </div>
                </div>
            </div>

            <div class="footer-newsletter">
                <h4 data-i18n="footer_sourcing_title">Direct Sourcing</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim); margin-bottom: 20px;" data-i18n="footer_sourcing_desc">Direct sourcing from China factory outlets for used and new heavy equipment procurement.</p>
                <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn-premium" style="margin-bottom: 15px; display: block; text-align: center;">Get A Quote</a>
                <a href="https://wa.me/821055489938" class="btn-premium" style="background: #25d366; color: #fff; display: block; text-align: center;" data-i18n="footer_wa_inquiry"><i class="fab fa-whatsapp"></i> WhatsApp Inquiry</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p data-i18n="footer_rights">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
            <p data-i18n="footer_designed">Designed by M.Ahmed Sial</p>
        </div>
    </footer>

    <a href="https://wa.me/<?php $wa = get_field('whatsapp_number', 'option'); echo preg_replace('/[^0-9]/', '', $wa); ?>" class="floating-whatsapp" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp <?php bloginfo('name'); ?>">
        <span data-i18n="floating_chat">Chat with us</span>
    </a>

    <?php wp_footer(); ?>
</body>
</html>

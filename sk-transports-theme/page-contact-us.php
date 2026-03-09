<?php
/* Template Name: Contact Us */
get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<header class="hero">
        <div class="hero-content">
            <span class="hero-tagline" data-i18n="contact_tagline"><?php the_field('hero_tagline'); ?></span>
            <h1 class="hero-title" data-i18n="contact_title"><?php the_title(); ?></h1>
            <p style="color: var(--text-dim); max-width: 800px; margin: 20px auto;" data-i18n="contact_desc"><?php the_field('hero_description'); ?></p>
        </div>
    </header>

    <section class="section">
        <div class="container" style="max-width: 1400px; margin: 0 auto;">
            <div class="contact-grid">

                <!-- Contact Form Container -->
                <div class="premium-form-container">
                    <?php 
                        // Assuming you have Contact Form 7 installed.
                        // You can swap the shortcode ID here from the WP Admin Dashboard later.
                        echo do_shortcode('[contact-form-7 id="1234" title="Contact Us Form"]'); 
                    ?>
                </div>

                <!-- Contact Details / Info -->
                <div style="display: flex; flex-direction: column; gap: 30px;">
                    <!-- Oman Card -->
                    <div class="contact-card-v2">
                        <span style="color: var(--primary); font-size: 1.5rem; display: block; margin-bottom: 15px;">📍
                            Muscat HQ</span>
                        <h3 style="margin-bottom: 10px;" data-i18n="oman_hq_title">Muscat Headquarters</h3>
                        <p style="font-size: 0.95rem; color: var(--text-dim); margin-bottom: 20px;"
                            data-i18n="oman_hq_addr">Plot 142, Mabella
                            Industrial Area,
                            Muscat, Sultanate of Oman.</p>

                        <div style="display: flex; flex-direction: column; gap: 15px;">
                            <div class="contact-sub-item">
                                <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; text-transform: uppercase;"
                                    data-i18n="md_label">
                                    Managing Director (Ch Arshad Ali Sial)</p>
                                <p style="font-size: 1.1rem; font-weight: 700;"><a href="tel:<?php $md_phone = get_field('md_phone_number', 'option'); echo preg_replace('/[^0-9\+]/', '', $md_phone); ?>"
                                        style="color: inherit; text-decoration: none;" data-i18n="phone_md"><?php echo esc_html($md_phone); ?></a></p>
                            </div>
                            <div class="contact-sub-item">
                                <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; text-transform: uppercase;"
                                    data-i18n="team_ops_label">
                                    Team & Operations</p>
                                <p style="font-size: 1.1rem; font-weight: 700;"><a href="tel:<?php $ops_phone = get_field('ops_phone', 'option'); echo preg_replace('/[^0-9\+]/', '', $ops_phone); ?>"
                                        style="color: inherit; text-decoration: none;" data-i18n="phone_ops"><?php echo esc_html($ops_phone); ?></a></p>
                                <p style="font-size: 1.1rem; font-weight: 700;"><a href="tel:<?php $ops_phone_2 = get_field('ops_phone_2', 'option'); echo preg_replace('/[^0-9\+]/', '', $ops_phone_2); ?>"
                                        style="color: inherit; text-decoration: none;" data-i18n="phone_ops_2"><?php echo esc_html($ops_phone_2); ?></a></p>
                            </div>
                            <div class="contact-sub-item">
                                <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; text-transform: uppercase;"
                                    data-i18n="landline_label">
                                    Landline Office</p>
                                <p style="font-size: 1.1rem; font-weight: 700;"><a href="tel:<?php $landline = get_field('landline', 'option'); echo preg_replace('/[^0-9\+]/', '', $landline); ?>"
                                        style="color: inherit; text-decoration: none;" data-i18n="phone_landline"><?php echo esc_html($landline); ?></a></p>
                            </div>
                            <div class="contact-sub-item">
                                <p style="font-size: 0.8rem; color: var(--text-dim);"><strong
                                        data-i18n="official_email_label">Official Email:</strong>
                                    <?php the_field('official_email', 'option'); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- China Card -->
                    <div class="contact-card-v2" style="border-color: var(--secondary);">
                        <span style="color: var(--secondary); font-size: 1.5rem; display: block; margin-bottom: 15px;"
                            data-i18n="china_card_title">
                            Yiwu Sial International (China)</span>
                        <h3 style="margin-bottom: 10px;" data-i18n="china_card_company">Yiwu Sial International Trading
                            Company Limited</h3>
                        <p style="font-size: 0.95rem; color: var(--text-dim); margin-bottom: 20px;"
                            data-i18n="china_card_address">International Trade
                            Center Office, Zhejiang, China.</p>

                        <div style="display: flex; flex-direction: column; gap: 15px;">
                            <div class="contact-sub-item">
                                <p style="font-size: 0.8rem; color: var(--secondary); font-weight: 700; text-transform: uppercase;"
                                    data-i18n="china_card_source">
                                    Direct Sourcing (CEO Muhammad Amjad)</p>

                                <div
                                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 20px; margin-top: 15px;">
                                    <!-- WhatsApp Block -->
                                    <div style="text-align: center;">
                                        <div
                                            style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 10px;">
                                            <i class="fab fa-whatsapp" style="color: #25d366; font-size: 1.2rem;"></i>
                                            <a href="https://wa.me/821055489938" target="_blank"
                                                style="color: #fff; text-decoration: none; font-weight: 700; font-size: 0.9rem;">+82
                                                10 5548 9938</a>
                                        </div>
                                        <div class="qr-preview"
                                            style="display: block; opacity: 1; visibility: visible; position: static; transform: none; margin: 0 auto; width: 130px; padding: 10px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/wa-qr.png" alt="WhatsApp QR">
                                            <span
                                                style="font-size: 0.6rem; color: #000; display: block; margin-top: 5px; font-weight: 800;">WHATSAPP
                                                SCAN</span>
                                        </div>
                                    </div>

                                    <!-- WeChat Block -->
                                    <div style="text-align: center;">
                                        <div
                                            style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 10px;">
                                            <i class="fab fa-weixin" style="color: #07c160; font-size: 1.2rem;"></i>
                                            <span
                                                style="color: var(--text-dim); font-size: 0.8rem; font-weight: 700;">ID:
                                                Sialautoparts</span>
                                        </div>
                                        <div class="qr-preview"
                                            style="display: block; opacity: 1; visibility: visible; position: static; transform: none; margin: 0 auto; width: 130px; padding: 10px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/wechat-qr.png" alt="WeChat QR">
                                            <span
                                                style="font-size: 0.6rem; color: #000; display: block; margin-top: 5px; font-weight: 800;">WECHAT
                                                SCAN</span>
                                        </div>
                                    </div>
                                </div>

                                <p style="font-size: 0.8rem; color: var(--text-dim); margin-top: 20px;"
                                    data-i18n="china_card_email">
                                    <strong>Email:</strong> ansarsial@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- South Korea Card -->
                    <div class="contact-card-v2" style="border-color: #3b82f6;">
                        <span style="color: #3b82f6; font-size: 1.5rem; display: block; margin-bottom: 15px;"
                            data-i18n="korea_card_title">
                            Sial Auto Parts (South Korea)</span>
                        <h3 style="margin-bottom: 10px;" data-i18n="korea_card_company">Sial Auto Parts Company Limited
                        </h3>
                        <p style="font-size: 0.95rem; color: var(--text-dim); margin-bottom: 20px;"
                            data-i18n="korea_card_address">Ansan-si, Gyeonggi-do, South Korea.</p>

                        <div style="display: flex; flex-direction: column; gap: 15px;">
                            <div class="contact-sub-item">
                                <p style="font-size: 0.8rem; color: #3b82f6; font-weight: 700; text-transform: uppercase;"
                                    data-i18n="korea_card_source">
                                    Direct Sourcing (CEO Muhammad Amjad)</p>

                                <div
                                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 20px; margin-top: 15px;">
                                    <!-- WhatsApp Block (Korea Card) -->
                                    <div style="text-align: center;">
                                        <div
                                            style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 10px;">
                                            <i class="fab fa-whatsapp" style="color: #25d366; font-size: 1.2rem;"></i>
                                            <a href="https://wa.me/821055489938" target="_blank"
                                                style="color: #fff; text-decoration: none; font-weight: 700; font-size: 0.9rem;" dir="ltr">+82
                                                10 5548 9938</a>
                                        </div>
                                        <div class="qr-preview"
                                            style="display: block; opacity: 1; visibility: visible; position: static; transform: none; margin: 0 auto; width: 130px; padding: 10px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/wa-qr.png" alt="WhatsApp QR">
                                            <span
                                                style="font-size: 0.6rem; color: #000; display: block; margin-top: 5px; font-weight: 800;">WHATSAPP
                                                SCAN</span>
                                        </div>
                                    </div>

                                    <!-- WeChat Block (Korea Card) -->
                                    <div style="text-align: center;">
                                        <div
                                            style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 10px;">
                                            <i class="fab fa-weixin" style="color: #07c160; font-size: 1.2rem;"></i>
                                            <span
                                                style="color: var(--text-dim); font-size: 0.8rem; font-weight: 700;">ID:
                                                Sialautoparts</span>
                                        </div>
                                        <div class="qr-preview"
                                            style="display: block; opacity: 1; visibility: visible; position: static; transform: none; margin: 0 auto; width: 130px; padding: 10px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/wechat-qr.png" alt="WeChat QR">
                                            <span
                                                style="font-size: 0.6rem; color: #000; display: block; margin-top: 5px; font-weight: 800;">WECHAT
                                                SCAN</span>
                                        </div>
                                    </div>
                                </div>

                                <p style="font-size: 0.8rem; color: var(--text-dim); margin-top: 20px;"
                                    data-i18n="china_card_email">
                                    <strong>Email:</strong> ansarsial@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Team WhatsApp -->
                    <a href="https://wa.me/<?php $wa = get_field('whatsapp_number', 'option'); echo preg_replace('/[^0-9]/', '', $wa); ?>" class="glass-card"
                        style="display: flex; align-items: center; gap: 20px; padding: 25px; text-decoration: none; background: rgba(37, 211, 102, 0.05); border-color: #25d366;">
                        <div style="font-size: 2rem;">💬</div>
                        <div>
                            <h3 style="color: #fff;" data-i18n="contact_wa_label">Oman WhatsApp</h3>
                            <p style="font-size: 0.8rem; color: #25d366;">Operations: <?php echo esc_html($wa); ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section" style="padding-top: 0;">
        <div class="container" style="max-width: 1400px; margin: 0 auto;">
            <div class="map-container-v2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.7667419028626!2d58.0981768!3d23.6485232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8de7dd384303e9%3A0x16a9671c8664a097!2sSial%20Kingdom%20Trading%20LLC!5e0!3m2!1sen!2som!4v1772908938408!5m2!1sen!2som"
                    width="100%" height="450" style="border:0; filter: invert(90%) hue-rotate(180deg) brightness(0.8);"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Dynamic Footer -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>

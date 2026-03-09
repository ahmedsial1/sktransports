<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dynamic SEO Meta Tags -->
    <title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); } else { wp_title('|', true, 'right'); bloginfo('name'); } ?></title>
    <meta name="description" content="<?php if (is_single() || is_page()) { echo esc_attr(get_the_excerpt()); } else { bloginfo('description'); } ?>" />
    <!-- END SEO -->
    <!-- CSS and JS are enqueued via functions.php -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="top-ticker">
        <div class="ticker-content">
            <div class="ticker-item" data-i18n="ticker_text">PDO Approved SANY Fleet | 18+ Years of Expertise | Direct Sourcing from China | 24/7 Technical Support in Muscat, Sohar, Duqm & Salalah</div>
            <div class="ticker-item" data-i18n="ticker_text">PDO Approved SANY Fleet | 18+ Years of Expertise | Direct Sourcing from China | 24/7 Technical Support in Muscat, Sohar, Duqm & Salalah</div>
        </div>
    </div>
    <nav id="main-nav">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="<?php bloginfo('name'); ?> Logo">
        </a>
        <div class="mobile-burger" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links">
            <li><a href="<?php echo home_url('/'); ?>" data-i18n="nav_home">Home</a></li>
            <li><a href="<?php echo home_url('/fleet'); ?>" data-i18n="nav_fleet">Fleet</a></li>
            <li><a href="<?php echo home_url('/services'); ?>" data-i18n="nav_services">Services</a></li>
            <li><a href="<?php echo home_url('/about'); ?>" data-i18n="nav_about">About Us</a></li>
            <li><a href="<?php echo home_url('/contact-us'); ?>" data-i18n="nav_contact">Contact Us</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="nav-cta-btn" style="background: var(--primary); color: var(--bg-black) !important; border-radius: 50px; font-weight: 800; padding: 12px 25px;">Get a Quote</a></li>
        </ul>
        <div class="lang-selector-container">
            <button class="lang-selector-btn" onclick="toggleLangMenu()">
                <span id="active-flag">🇬🇧 EN</span>
            </button>
            <div class="lang-dropdown-content">
                <a href="javascript:void(0)" onclick="setLanguage('en')">English (EN)</a>
                <a href="javascript:void(0)" onclick="setLanguage('ar')">Arabic (AR)</a>
                <a href="javascript:void(0)" onclick="setLanguage('zh')">Chinese (ZH)</a>
            </div>
        </div>
    </nav>

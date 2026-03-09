<?php
/* Template Name: About */
get_header(); ?>

<header class="hero">
        <div class="hero-content">
            <span class="hero-tagline" data-i18n="about_legacy_tag">Our Legacy • Our Strength</span>
            <h1 class="hero-title" data-i18n="about_future_title">Elevating <span>Oman's Future.</span></h1>
            <p style="color: var(--text-dim); max-width: 800px; margin: 20px auto;" data-i18n="about_hero_desc">Discover
                the foundation of our engineering excellence and our unmatched commitment to building Oman's industrial
                landscape with precision and safety.</p>
        </div>
    </header>

    <!-- Company Overview -->
    <section class="section">
        <div class="container about-overview-inner">
            <div style="flex: 1; min-width: 350px;">
                <h2 style="font-size: 3rem; font-weight: 900; margin-bottom: 30px;" data-i18n="about_conglom_title">A
                    Conglomerate of <br><span style="color: var(--primary);">Industrial Excellence.</span></h2>
                <p style="color: var(--text-dim); font-size: 1.1rem; line-height: 1.8;" data-i18n="about_conglom_desc">
                    Founded on the principles of reliability and engineering precision, SK Transports has grown from a
                    local rental service into a dominant industrial powerhouse in the Sultanate of Oman.
                    <br><br>
                    With over 18 branches strategically located across the country, we specialize in providing
                    PDO-approved heavy lifting solutions, factory-direct equipment procurement from China, and
                    specialized automotive spare parts.
                </p>
                <div class="mission-vision-grid">
                    <div class="glass-card" style="padding: 20px;">
                        <h4 style="color: var(--primary);" data-i18n="mission_title">Mission</h4>
                        <p style="font-size: 0.8rem; color: var(--text-dim);" data-i18n="mission_desc">To provide the
                            safest, most efficient
                            lifting solutions in Oman.</p>
                    </div>
                    <div class="glass-card" style="padding: 20px;">
                        <h4 style="color: var(--primary);" data-i18n="vision_title">Vision</h4>
                        <p style="font-size: 0.8rem; color: var(--text-dim);" data-i18n="vision_desc">To be the ultimate
                            industrial backbone of
                            the Middle East.</p>
                    </div>
                </div>
            </div>
            <div style="flex: 1; min-width: 350px; position: relative;">
                <div class="glass-card" style="padding: 10px; transform: rotate(3deg);">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/hero.png"
                        style="width: 100%; border-radius: 15px; filter: grayscale(0.5) contrast(1.2);">
                </div>
                <!-- Experience Badge -->
                <div class="experience-badge">
                    <span style="font-size: 2.5rem; font-weight: 900; color: var(--bg-black);"
                        data-i18n="exp_years">15+</span>
                    <span style="font-size: 0.8rem; font-weight: 700; color: var(--bg-black);"
                        data-i18n="exp_label">Years Exp.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership - New Visual Style -->
    <section class="section" style="background: rgba(15, 23, 42, 0.4);">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="leadership_tag">Executive Board</span>
            <h2 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 60px;" data-i18n="leadership_title">Visionary
                <span>Leadership.</span>
            </h2>

            <div class="slider-container">
                <div class="leadership-grid" id="leadership-slider">
                    <!-- CEO Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid var(--primary);">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/ceo.png?v=7" alt="<?php bloginfo('name'); ?> Muhammad Amjad - CEO"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: center 10%;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, var(--bg-black), transparent);">
                            </div>
                        </div>
                        <div style="padding: 40px;">
                            <h3 style="font-size: 1.8rem; margin-bottom: 5px;" data-i18n="ceo_name">Muhammad Amjad</h3>
                            <p style="color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px;"
                                data-i18n="ceo_role">Chief Executive Officer</p>
                            <p style="color: var(--text-dim); font-size: 0.95rem;" data-i18n="ceo_desc">The strategic
                                mastermind behind global sourcing and expansion across 18+ branches in the Sultanate.
                            </p>
                        </div>
                    </div>

                    <!-- Chairman Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid white;">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/chairman.jpg.png?v=7" alt="<?php bloginfo('name'); ?> Ch Munawar hussain Sial - Chairman"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: center 10%;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, var(--bg-black), transparent);">
                            </div>
                        </div>
                        <div style="padding: 40px;">
                            <h3 style="font-size: 1.8rem; margin-bottom: 5px;" data-i18n="chairman_name">Ch Munawar
                                hussain
                                Sial</h3>
                            <p style="color: #fff; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px;"
                                data-i18n="chairman_role">Chairman</p>
                            <p style="color: var(--text-dim); font-size: 0.95rem;" data-i18n="chairman_desc">Providing
                                the
                                foundational vision and governance that drives the high standards of the SK Transports
                                group.</p>
                        </div>
                    </div>

                    <!-- MD Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid var(--secondary);">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/md.jpg?v=7" alt="<?php bloginfo('name'); ?> Ch Arshad Ali Sial - Managing Director"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: center 10%;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, var(--bg-black), transparent);">
                            </div>
                        </div>
                        <div style="padding: 40px;">
                            <h3 style="font-size: 1.8rem; margin-bottom: 5px;" data-i18n="md_name">Ch Arshad Ali Sial
                            </h3>
                            <p style="color: var(--secondary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px;"
                                data-i18n="md_role">Managing Director</p>
                            <p style="color: var(--text-dim); font-size: 0.95rem;" data-i18n="md_desc">A pioneer in the
                                heavy machinery sector, driving the technical growth and operational excellence of the
                                group.</p>
                        </div>
                    </div>

                    <!-- MD 2 Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid var(--primary);">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/md2.jpg.jpeg?v=7" alt="<?php bloginfo('name'); ?> Tasawar Hussain Sial - Managing Director"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: center 10%;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, var(--bg-black), transparent);">
                            </div>
                        </div>
                        <div style="padding: 40px;">
                            <h3 style="font-size: 1.8rem; margin-bottom: 5px;" data-i18n="md2_name">Tasawar Hussain Sial
                            </h3>
                            <p style="color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px;"
                                data-i18n="md2_role">Managing Director</p>
                            <p style="color: var(--text-dim); font-size: 0.95rem;" data-i18n="md2_desc">Spearheading
                                strategic partnerships and industrial innovations across our Oman and China nodes.</p>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation Buttons -->
                <div class="slider-nav">
                    <div class="nav-btn" onclick="slideLeadership('prev')">❮</div>
                    <div class="nav-btn" onclick="slideLeadership('next')">❯</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Group Strength -->
    <section class="section">
        <div class="container" style="max-width: 1400px; margin: 0 auto;">
            <div class="glass-card"
                style="padding: 80px; text-align: center; background: radial-gradient(circle at top right, var(--primary-glow), transparent);">
                <h2 style="font-size: 3rem; margin-bottom: 20px;" data-i18n="about_parent_title">Parent Companies</h2>
                <p style="color: var(--text-dim); max-width: 800px; margin: 0 auto 50px;" data-i18n="about_parent_desc">
                    SK Transports operates as a proud sub-branch and specialized lifting division under the umbrella of
                    our esteemed parent entities.</p>

                <div class="group-companies-grid">
                    <div
                        style="padding: 30px; border-left: 3px solid var(--primary); background: rgba(255,255,255,0.02);">
                        <h3 style="color: #fff; margin-bottom: 10px; font-size: 1.1rem; line-height: 1.4;"
                            data-i18n="comp1_title">Yahya Bin Khalfan Bin Mohammed Al Sayabi Modern Trading LLC</h3>
                        <p style="color: var(--text-dim); font-size: 0.9rem;" data-i18n="comp1_desc">Specializing in
                            Hyundai and Kia spare parts logistics, forming the backbone of heavy trading across Oman's
                            industrial centers.</p>
                    </div>
                    <div
                        style="padding: 30px; border-left: 3px solid var(--secondary); background: rgba(255,255,255,0.02);">
                        <h3 style="color: #fff; margin-bottom: 10px; font-size: 1.1rem; line-height: 1.4;"
                            data-i18n="comp2_title">Sial Kingdom Trading L.L.C</h3>
                        <p style="color: var(--text-dim); font-size: 0.9rem;" data-i18n="comp2_desc">Dealing in Hyundai
                            and Kia spare parts alongside direct sourcing from China factory outlets for heavy equipment
                            procurement.</p>
                    </div>
                    <div style="padding: 30px; border-left: 3px solid #3b82f6; background: rgba(255,255,255,0.02);">
                        <h3 style="color: #fff; margin-bottom: 10px; font-size: 1.1rem; line-height: 1.4;"
                            data-i18n="comp3_title">Sial Auto Parts Company Limited (South Korea)</h3>
                        <p style="color: var(--text-dim); font-size: 0.9rem;" data-i18n="comp3_desc">Our South Korean
                            hub specializing in premium automotive components and direct supply chain management for
                            Hyundai and Kia parts.</p>
                    </div>
                    <div style="padding: 30px; border-left: 3px solid #10b981; background: rgba(255,255,255,0.02);">
                        <h3 style="color: #fff; margin-bottom: 10px; font-size: 1.1rem; line-height: 1.4;"
                            data-i18n="comp4_title">Yiwu Sial International Trading Company Limited (China)</h3>
                        <p style="color: var(--text-dim); font-size: 0.9rem;" data-i18n="comp4_desc">The primary gateway
                            for global industrial equipment sourcing, facilitating direct factory exports and heavy
                            machinery logistics from China.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Footer -->

<?php get_footer(); ?>

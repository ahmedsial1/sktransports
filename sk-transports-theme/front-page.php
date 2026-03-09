<?php get_header(); ?>
    <section class="hero">
        <div class="hero-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/hero.png" alt="<?php bloginfo('name'); ?> - Sany 350T Oman Fleet">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-tagline" data-i18n="hero_tagline">Oman's Ultimate Heavy Lifting Force • PDO Approved • 18+ Years Excellence</span>
            <h1 class="hero-title" id="hero-title" data-i18n="hero_title">
                THE ULTIMATE FORCE IN <span>OMAN'S INFRASTRUCTURE.</span>
            </h1>
            <p style="color: var(--text-dim); max-width: 800px; margin: 20px auto;" data-i18n="hero_desc">
                Driving the Sultanate of Oman progress with high-performance SANY Mobile Truck Cranes. From large-scale industrial lifts to complex urban developments, we provide the power, precision, and reliability your projects demand.
            </p>
            <div class="hero-cta">
                <a href="<?php echo home_url('/fleet'); ?>" class="btn-premium" data-i18n="btn_quote">View SANY Inventory</a>
                <a href="<?php echo home_url('/contact-us'); ?>"
                    style="color: #fff; text-decoration: none; font-weight: 700; border-bottom: 2px solid var(--primary); padding-bottom: 5px;"
                    data-i18n="btn_fleet">Contact Our Experts</a>
            </div>
        </div>
    </section>

    <!-- Floating Stats / Cards that "Wow" -->
    <section class="section">
        <div class="grid-3"
            style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; max-width: 1400px; margin: 0 auto;">
            <div class="glass-card" style="text-align: center;">
                <h3 style="font-size: 4rem; color: var(--primary); line-height: 1;" data-i18n="stat_350_title">350T</h3>
                <p style="text-transform: uppercase; font-weight: 700; letter-spacing: 2px; margin-top: 10px;"
                    data-i18n="stat_350_desc">Lifting Capacity</p>
                <p style="color: var(--text-dim); margin-top: 15px; font-size: 0.9rem;" data-i18n="stat_350_sub">One of the most powerful and versatile crane fleets in the Omani market.</p>
            </div>
            <div class="glass-card" style="text-align: center;">
                <h3 style="font-size: 4rem; color: var(--primary); line-height: 1;" data-i18n="stat_pdo_title">PDO</h3>
                <p style="text-transform: uppercase; font-weight: 700; letter-spacing: 2px; margin-top: 10px;"
                    data-i18n="stat_pdo_desc">Approved Standards</p>
                <p style="color: var(--text-dim); margin-top: 15px; font-size: 0.9rem;" data-i18n="stat_pdo_sub">Machinery and operators fully compliant with Petroleum Development Oman (PDO) safety protocols.</p>
            </div>
            <div class="glass-card" style="text-align: center;">
                <h3 style="font-size: 4rem; color: var(--primary); line-height: 1;" data-i18n="stat_branches_title">18+
                </h3>
                <p style="text-transform: uppercase; font-weight: 700; letter-spacing: 2px; margin-top: 10px;"
                    data-i18n="stat_branches_desc">Years of Expertise</p>
                <p style="color: var(--text-dim); margin-top: 15px; font-size: 0.9rem;" data-i18n="stat_branches_sub">A trusted legacy of supporting Oman’s major infrastructure since our inception.</p>
            </div>
        </div>
    </section>

    <!-- Cinematic Content Section -->
    <section class="section">
        <div class="container logistics-hub-inner">
            <div style="flex: 1;">
                <span style="color: var(--primary); font-weight: 700;" data-i18n="section_logistics_tag">WORLD-CLASS
                    SOLUTIONS</span>
                <h2 style="font-size: 4rem; font-weight: 900; line-height: 1; margin: 20px 0;"
                    data-i18n="section_logistics_title">Beyond Rental,<br><span>Strength Inherited.</span></h2>
                <p style="color: var(--text-dim); margin-top: 30px; line-height: 1.6;" data-i18n="section_logistics_desc">
                    Based in Muscat, Yahya bin Khlfan bin Mohammed Al Sayabi Modern Trading L.L.C. is a premier leader in heavy machinery solutions. We specialize in the sale and rental of SANY Mobile Truck Cranes, ensuring every project from Sohar to Salalah is backed by world-class engineering.
                </p>
                <p style="color: var(--text-dim); margin-top: 15px; line-height: 1.6;" data-i18n="ceo_specialization">
                    <strong style="color: var(--primary);">CEO Specialization:</strong> We offer a unique bridge for direct procurement from China. Our CEO personally facilitates the sourcing and import of new or used SANY machinery, managing all logistics and Omani customs with total transparency.
                </p>
            </div>
            <div style="flex: 1; position: relative;">
                <div class="glass-card" style="padding: 5px; transform: rotate(2deg);">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logistics.jpg.png" alt="<?php bloginfo('name'); ?> Logistics Network" style="width: 100%; border-radius: 20px;">
                </div>
                <div class="glass-card"
                    style="position: absolute; bottom: -40px; left: -40px; padding: 20px; max-width: 250px; transform: rotate(-3deg);">
                    <p style="font-size: 0.8rem; color: var(--primary); font-weight: 900;"
                        data-i18n="direct_source_tag">DIRECT FROM SOURCE</p>
                    <p style="font-size: 0.9rem;" data-i18n="factory_direct_desc">Factory-Direct Heavy Equipment
                        Procurement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PDO Badge -->
    <div class="pdo-badge-new">
        <div class="pdo-badge-inner">
            <span data-i18n="badge_pdo">PDO</span>
            <span style="font-size: 0.5rem; opacity: 0.7;" data-i18n="badge_certified">CERTIFIED</span>
        </div>
    </div>

    <!-- Strategic Advantage Section -->
    <section class="section">
        <div class="container advantage-inner">
            <div style="flex: 1; min-width: 300px;">
                <div class="advantage-box">
                    <span class="hero-tagline" data-i18n="why_tag">The YKS Advantage</span>
                    <h2 style="font-size: 3rem; margin: 20px 0;" data-i18n="why_title">Strategic Lifting Power.</h2>
                    <ul style="list-style: none; color: #fff; font-weight: 700; margin-top: 30px;">
                        <li style="margin-bottom: 25px; display: flex; align-items: start; gap: 10px;">
                            <span style="color: var(--primary); font-size: 1.5rem;">✓</span>
                            <span><strong data-i18n="check_1_head" style="color: var(--primary); font-size: 1.2rem;">Safety First:</strong><br><span data-i18n="check_1" style="color: var(--text-dim); font-weight: 400; font-size: 1rem;">PDO-approved fleet ensuring the highest operational standards in Oman.</span></span>
                        </li>
                        <li style="margin-bottom: 25px; display: flex; align-items: start; gap: 10px;">
                            <span style="color: var(--primary); font-size: 1.5rem;">✓</span>
                            <span><strong data-i18n="check_2_head" style="color: var(--primary); font-size: 1.2rem;">Direct Imports:</strong><br><span data-i18n="check_2" style="color: var(--text-dim); font-weight: 400; font-size: 1rem;">Expert facilitation of direct-from-China SANY machinery sales.</span></span>
                        </li>
                        <li style="margin-bottom: 25px; display: flex; align-items: start; gap: 10px;">
                            <span style="color: var(--primary); font-size: 1.5rem;">✓</span>
                            <span><strong data-i18n="check_3_head" style="color: var(--primary); font-size: 1.2rem;">Technical Support:</strong><br><span data-i18n="check_3" style="color: var(--text-dim); font-weight: 400; font-size: 1rem;">24/7 assistance and maintenance to ensure zero project downtime.</span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="flex: 1; min-width: 300px;" class="advantage-img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/advantage.jpg.jpeg" alt="<?php bloginfo('name'); ?> Strategic Advantage"
                    style="width: 100%; border-radius: 20px; box-shadow: 0 40px 80px rgba(0,0,0,0.5); object-fit: cover; height: 500px;">
            </div>
        </div>
    </section>

    <!-- Fleet Preview Section -->
    <section class="section" style="background: rgba(15, 23, 42, 0.2);">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="fleet_preview_tag">Our Prime Asset</span>
            <h2 style="font-size: 3.5rem; margin-bottom: 50px;" data-i18n="fleet_preview_title">The Elite <span>Heavy
                    Fleet.</span></h2>

            <div class="grid-gallery" style="margin-bottom: 60px;">
                <!-- 350T -->
                <div class="square-card glass-effect">
                    <div class="card-img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fleet-350t.jpg.png" alt="<?php bloginfo('name'); ?> Sany 350T Heavy Fleet">
                    </div>
                    <div class="card-content-box" style="padding: 30px;">
                        <div>
                            <span class="card-tag" data-i18n="card_350_tag">Heavy Lift Specialist</span>
                            <h3 class="card-title" style="font-size: 1.5rem; margin: 10px 0;">SANY SAC 3500</h3>
                        </div>
                        <div class="card-footer">
                            <span class="tonnage-badge" data-i18n="ton_350">350 TON</span>
                            <a href="https://wa.me/96891929375" class="btn-premium btn-card" data-i18n="book_now">Book
                                Now</a>
                        </div>
                    </div>
                </div>

                <!-- 220T -->
                <div class="square-card glass-effect">
                    <div class="card-img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fleet-220t.jpg.jpg" alt="<?php bloginfo('name'); ?> Sany 220T Engineering Master">
                    </div>
                    <div class="card-content-box" style="padding: 30px;">
                        <div>
                            <span class="card-tag" data-i18n="card_220_tag">Engineering Master</span>
                            <h3 class="card-title" style="font-size: 1.5rem; margin: 10px 0;">SANY SAC 2200</h3>
                        </div>
                        <div class="card-footer">
                            <span class="tonnage-badge" data-i18n="ton_220">220 TON</span>
                            <a href="https://wa.me/96891929375" class="btn-premium btn-card" data-i18n="book_now">Book
                                Now</a>
                        </div>
                    </div>
                </div>

                <!-- 160T -->
                <div class="square-card glass-effect">
                    <div class="card-img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/fleet-160t.jpg.png" alt="<?php bloginfo('name'); ?> Sany 160T Workhorse">
                    </div>
                    <div class="card-content-box" style="padding: 30px;">
                        <div>
                            <span class="card-tag" data-i18n="card_160_tag">Industrial Workhorse</span>
                            <h3 class="card-title" style="font-size: 1.5rem; margin: 10px 0;">SANY STC 1600</h3>
                        </div>
                        <div class="card-footer">
                            <span class="tonnage-badge" data-i18n="ton_160">160 TON</span>
                            <a href="https://wa.me/96891929375" class="btn-premium btn-card" data-i18n="book_now">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="<?php echo home_url('/fleet'); ?>" class="btn-premium" style="padding: 15px 40px; font-size: 1rem;"
                data-i18n="btn_view_full_fleet">View Full Fleet Portfolio →</a>
        </div>
    </section>

    <!-- Client Reviews Section -->
    <section class="section" style="background: rgba(15, 23, 42, 0.4);">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="testimonials_tag">Client Reviews</span>
            <h2 style="font-size: 3.5rem; margin-bottom: 50px;" data-i18n="testimonials_title">Trusted by <span>Industry
                    Leaders.</span></h2>

            <div class="reviews-grid">
                <!-- Oman Market Review 1 -->
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p class="review-content" data-i18n="rev1_content">"SK Transports has been instrumental in our
                        **Sohar Port** expansion.
                        Their SANY 350T cranes handled the complex structural lifts with absolute precision. Truly a
                        partner for Oman's Vision 2040."</p>
                    <div class="reviewer">
                        <div class="reviewer-info">
                            <h5 data-i18n="rev1_author">Eng. Salim Al-Harthy</h5>
                            <span data-i18n="rev1_role">Chief Logistics Officer, Port of Sohar</span>
                        </div>
                    </div>
                </div>
                <!-- Oman Market Review 2 -->
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p class="review-content" data-i18n="rev2_content">"Working with a PDO-approved contractor is
                        non-negotiable for us. SK's
                        commitment to safety and their rapid response in the **Duqm Industrial Area** has made them our
                        go-to lifting provider."</p>
                    <div class="reviewer">
                        <div class="reviewer-info">
                            <h5 data-i18n="rev2_author">Faisal Bin Hamad</h5>
                            <span data-i18n="rev2_role">Project Manager, OQ Refineries</span>
                        </div>
                    </div>
                </div>
                <!-- Oman Market Review 3 -->
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p class="review-content" data-i18n="rev3_content">"The reliability of their operators and the scale
                        of their fleet in
                        **Salalah** and **Muscat** have helped us hit our infrastructure deadlines months ahead of
                        schedule. Excellent service."</p>
                    <div class="reviewer">
                        <div class="reviewer-info">
                            <h5 data-i18n="rev3_author">Majid Bin Yousef</h5>
                            <span data-i18n="rev3_role">Director, Muscat Metro Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts Section -->
    <section class="section">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="blog_tag">Industry Insights</span>
            <h2 style="font-size: 3.5rem; margin-bottom: 50px;" data-i18n="blog_title">Latest from <span>Our Blog.</span></h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 40px; text-align: left;">
                <!-- Post 1 -->
                <article style="background: var(--bg-card); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden; transition: transform 0.3s; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.transform='none'; this.style.borderColor='var(--glass-border)'">
                    <div style="background: linear-gradient(135deg, #1e293b, #0f172a); height: 200px; display: flex; align-items: center; justify-content: center; border-bottom: 2px solid var(--primary); font-size: 3rem; color: var(--primary-glow);"><i class="fas fa-truck-pickup"></i></div>
                    <div style="padding: 30px; display: flex; flex-direction: column; flex-grow: 1;">
                        <span style="color: var(--primary); font-weight: 700; font-size: 0.8rem; text-transform: uppercase; margin-bottom: 10px;">Heavy Lifting</span>
                        <a href="<?php echo home_url('/blog/post-1.html'); ?>" style="font-size: 1.3rem; font-weight: 800; color: #fff; text-decoration: none; margin-bottom: 15px; line-height: 1.4; transition: color 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#fff'">Best Crane Rental Muscat Oman 2026: 20-100 Ton Capacity</a>
                        <p style="color: var(--text-dim); font-size: 0.95rem; margin-bottom: 20px; flex-grow: 1;">The definitive guide to eradicating project delays in Muscat with our PDO-approved SANY fleet.</p>
                        <a href="<?php echo home_url('/blog/post-1.html'); ?>" style="color: #fff; text-decoration: none; font-weight: 700; font-size: 0.9rem; transition: color 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#fff'">Read Full Article <i class="fas fa-arrow-right" style="color: var(--primary); margin-left: 5px;"></i></a>
                    </div>
                </article>
                <!-- Post 2 -->
                <article style="background: var(--bg-card); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden; transition: transform 0.3s; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.transform='none'; this.style.borderColor='var(--glass-border)'">
                    <div style="background: linear-gradient(135deg, #1e293b, #0f172a); height: 200px; display: flex; align-items: center; justify-content: center; border-bottom: 2px solid var(--primary); font-size: 3rem; color: var(--primary-glow);"><i class="fas fa-hard-hat"></i></div>
                    <div style="padding: 30px; display: flex; flex-direction: column; flex-grow: 1;">
                        <span style="color: var(--primary); font-weight: 700; font-size: 0.8rem; text-transform: uppercase; margin-bottom: 10px;">Equipment Focus</span>
                        <a href="<?php echo home_url('/blog/post-2.html'); ?>" style="font-size: 1.3rem; font-weight: 800; color: #fff; text-decoration: none; margin-bottom: 15px; line-height: 1.4; transition: color 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#fff'">50 Ton Sany Crane for Rent in Muscat: PDO Approved</a>
                        <p style="color: var(--text-dim); font-size: 0.95rem; margin-bottom: 20px; flex-grow: 1;">Learn how our highly reliable 50-ton SANY cranes eliminate downtime in medium-duty lifting.</p>
                        <a href="<?php echo home_url('/blog/post-2.html'); ?>" style="color: #fff; text-decoration: none; font-weight: 700; font-size: 0.9rem; transition: color 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#fff'">Read Full Article <i class="fas fa-arrow-right" style="color: var(--primary); margin-left: 5px;"></i></a>
                    </div>
                </article>
                <!-- Post 3 -->
                <article style="background: var(--bg-card); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden; transition: transform 0.3s; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.transform='none'; this.style.borderColor='var(--glass-border)'">
                    <div style="background: linear-gradient(135deg, #1e293b, #0f172a); height: 200px; display: flex; align-items: center; justify-content: center; border-bottom: 2px solid var(--primary); font-size: 3rem; color: var(--primary-glow);"><i class="fas fa-road"></i></div>
                    <div style="padding: 30px; display: flex; flex-direction: column; flex-grow: 1;">
                        <span style="color: var(--primary); font-weight: 700; font-size: 0.8rem; text-transform: uppercase; margin-bottom: 10px;">Logistics Strategy</span>
                        <a href="<?php echo home_url('/blog/post-3.html'); ?>" style="font-size: 1.3rem; font-weight: 800; color: #fff; text-decoration: none; margin-bottom: 15px; line-height: 1.4; transition: color 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#fff'">Mobile Crane Rental Muscat: Rough Terrain & Truck</a>
                        <p style="color: var(--text-dim); font-size: 0.95rem; margin-bottom: 20px; flex-grow: 1;">Breaking down the critical differences between Truck-Mounted vs. Rough Terrain crane hiring.</p>
                        <a href="<?php echo home_url('/blog/post-3.html'); ?>" style="color: #fff; text-decoration: none; font-weight: 700; font-size: 0.9rem; transition: color 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#fff'">Read Full Article <i class="fas fa-arrow-right" style="color: var(--primary); margin-left: 5px;"></i></a>
                    </div>
                </article>
            </div>
            
            <a href="<?php echo home_url('/blog/index.html'); ?>" class="btn-premium" style="padding: 15px 40px; font-size: 1rem; margin-top: 50px; display: inline-block;">View All Blog Posts →</a>
        </div>
    </section>

    <!-- Leadership Section on Home Page -->
    <section class="section">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="leadership_tag">Visionary Leadership</span>
            <h2 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 60px;" data-i18n="leadership_title">Strategic
                <span>Excellence.</span>
            </h2>

            <div class="slider-container">
                <div class="leadership-grid" id="leadership-slider">
                    <!-- CEO Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid var(--primary);">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/ceo.png?v=7" alt="<?php bloginfo('name'); ?> - Muhammad Amjad CEO"
                                style="width: 100%; height: 100%; object-fit: cover; object-position: center 10%;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, var(--bg-black), transparent);">
                            </div>
                        </div>
                        <div style="padding: 40px;">
                            <h3 style="font-size: 1.8rem; margin-bottom: 5px;" data-i18n="ceo_name">Muhammad Amjad</h3>
                            <p style="color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; margin-bottom: 20px;"
                                data-i18n="ceo_role">Chief Executive Officer</p>
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;" data-i18n="ceo_desc">Architect of the strategic vision driving our growth in the Omani heavy machinery sector.</p>
                        </div>
                    </div>

                    <!-- Chairman Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid white;">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/chairman.jpg.png?v=7" alt="<?php bloginfo('name'); ?> - Ch Munawar Sial Chairman"
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
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;" data-i18n="chairman_desc">Guardian of our ethical standards and legacy of trust across the Sultanate.</p>
                        </div>
                    </div>

                    <!-- MD Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid var(--secondary);">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/md.jpg?v=7" alt="<?php bloginfo('name'); ?> - Ch Arshad Ali Sial Managing Director"
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
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;" data-i18n="md_desc">Specialist in global procurement, connecting China’s manufacturing power with Oman's infrastructure needs.</p>
                        </div>
                    </div>

                    <!-- MD 2 Card -->
                    <div class="glass-card"
                        style="flex: 1; min-width: 300px; max-width: 450px; padding: 0; overflow: hidden; border-bottom: 5px solid var(--primary);">
                        <div style="height: 400px; background: #1e293b; overflow: hidden; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/md2.jpg.jpeg?v=7" alt="<?php bloginfo('name'); ?> - Tasawar Hussain Sial Managing Director"
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
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;" data-i18n="md2_desc">Leading operational excellence and fleet reliability for every client project.</p>
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

    <!-- Partner Marquee Section -->
    <div class="partner-marquee">
        <div class="marquee-content">
            <span class="supplier-label">HEAVY EQUIPMENT SUPPLIER</span>
            <span class="partner-name">SANY</span>
            <span class="partner-name">ZOOMLION</span>
            <span class="partner-name">XCMG</span>
            <span class="partner-name">DOOSAN</span>

            <span class="supplier-label">HEAVY EQUIPMENT SUPPLIER</span>
            <span class="partner-name">SANY</span>
            <span class="partner-name">ZOOMLION</span>
            <span class="partner-name">XCMG</span>
            <span class="partner-name">DOOSAN</span>

            <span class="supplier-label">HEAVY EQUIPMENT SUPPLIER</span>
            <span class="partner-name">SANY</span>
            <span class="partner-name">ZOOMLION</span>
            <span class="partner-name">XCMG</span>
            <span class="partner-name">DOOSAN</span>
        </div>
    </div>

    <!-- Dynamic Footer -->
<?php get_footer(); ?>

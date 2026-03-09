<?php
/* Template Name: Services */
get_header(); ?>

<!-- Redesigned Hero -->
    <header class="hero">
        <div class="hero-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/warehouse.png" alt="<?php bloginfo('name'); ?> SK Transports Services">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-tagline" data-i18n="serv_hero_tagline">Technical Lifting Excellence</span>
            <h1 class="hero-title" data-i18n="serv_hero_title">Powering Oman's <span>Heavy Industries.</span></h1>
            <p style="color: var(--text-dim); max-width: 800px; margin: 20px auto;" data-i18n="serv_hero_desc">From
                complex Oil & Gas operations to direct global equipment sourcing, SK
                Transports provides the technical backbone for the Sultanate's most ambitious projects.</p>
            <div class="hero-cta" style="margin-top: 40px;">
                <a href="<?php echo home_url('/contact-us'); ?>" class="btn-premium" data-i18n="btn_quote">Consult
                    an Engineer</a>
            </div>
        </div>
    </header>

    <!-- Core Services Grid -->
    <section class="section">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="serv_core_tag">OUR EXPERTISE</span>
            <h2 style="font-size: 3.5rem; margin-bottom: 60px;" data-i18n="serv_core_title">Core <span>Service
                    Sectors.</span></h2>

            <div class="grid-3"
                style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 40px;">
                <!-- Solution 1 -->
                <div class="glass-card">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 25px;"><i
                            class="fa-solid fa-truck-moving"></i></div>
                    <h3 data-i18n="serv_lifting_title" style="font-size: 1.5rem; margin-bottom: 20px;">Heavy Lifting
                        Solutions</h3>
                    <p data-i18n="serv_lifting_desc" style="font-size: 0.95rem; color: var(--text-dim);">Commanding the
                        Sultanate's most advanced SANY fleet for precision lifts up to 350 tons. Fully PDO-certified
                        operators and equipment for high-risk environments.</p>
                </div>
                <!-- Solution 2 -->
                <div class="glass-card">
                    <div style="font-size: 3rem; color: var(--secondary); margin-bottom: 25px;"><i
                            class="fa-solid fa-warehouse"></i></div>
                    <h3 data-i18n="serv_procurement_title" style="font-size: 1.5rem; margin-bottom: 20px;">Industrial
                        Procurement</h3>
                    <p data-i18n="serv_procurement_desc" style="font-size: 0.95rem; color: var(--text-dim);">
                        Direct-from-factory sourcing for all used and new machines from China. We bridge the gap between
                        global manufacturing and Omani infrastructure needs.</p>
                </div>
                <!-- Solution 3 -->
                <div class="glass-card">
                    <div style="font-size: 3rem; color: var(--accent); margin-bottom: 25px;"><i
                            class="fa-solid fa-screwdriver-wrench"></i></div>
                    <h3 data-i18n="serv_support_title" style="font-size: 1.5rem; margin-bottom: 20px;">Technical Support
                    </h3>
                    <p data-i18n="serv_support_desc" style="font-size: 0.95rem; color: var(--text-dim);">24/7 rapid
                        deployment via our 18+ branches. Our taskforce ensures minimal downtime and maximum operational
                        efficiency on-site.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Workflow -->
    <section class="section" style="background: rgba(15, 23, 42, 0.4);">
        <div class="container" style="max-width: 1400px; margin: 0 auto; text-align: center;">
            <span class="hero-tagline" data-i18n="process_tag">OUR WORKFLOW</span>
            <h2 style="font-size: 3.5rem; margin-bottom: 60px;" data-i18n="process_title">Engineered for
                <span>Efficiency.</span>
            </h2>

            <div class="process-steps">
                <div class="step-item">
                    <div class="step-number">01</div>
                    <h4 data-i18n="step1_title">Consultation</h4>
                    <p data-i18n="step1_desc">Deep analysis of site requirements and load charts.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">02</div>
                    <h4 data-i18n="step2_title">Site Survey</h4>
                    <p data-i18n="step2_desc">On-site risk assessment by our safety supervisors.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">03</div>
                    <h4 data-i18n="step3_title">Lift Planning</h4>
                    <p data-i18n="step3_desc">Rigorous engineering calculations and equipment selection.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">04</div>
                    <h4 data-i18n="step4_title">Execution</h4>
                    <p data-i18n="step4_desc">Precision operation under global safety protocols.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Feature Card (China Bridge) -->
    <section class="section">
        <div class="container" style="max-width: 1400px; margin: 0 auto;">
            <div class="featured-service-card">
                <div class="featured-content">
                    <h2 data-i18n="china_special_title">The <span>China-Oman</span> Bridge</h2>
                    <p data-i18n="china_special_desc" style="font-size: 1.1rem; color: var(--text-dim);">Our unique
                        advantage lies in our direct factory-to-site sourcing from China. We don't just rent
                        machines; we facilitate the entire lifecycle of industrial equipment procurement, including new
                        and used machinery.</p>
                    <a href="<?php echo home_url('/contact-us'); ?>" class="btn-premium" style="margin-top: 30px;"
                        data-i18n="btn_quote">Inquire for Procurement</a>
                </div>
                <div class="featured-visual">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/china.png" alt="<?php bloginfo('name'); ?> China Sourcing Nodes">
                </div>
            </div>
        </div>
    </section>

    <!-- Safety Section -->
    <section class="section">
        <div class="container" style="max-width: 1100px; margin: 0 auto; text-align: center;">
            <div class="glass-card safety-card" style="border-top: 5px solid var(--primary);">
                <div style="font-size: 4rem; color: var(--primary); margin-bottom: 30px;"><i
                        class="fas fa-shield-alt"></i></div>
                <h2 data-i18n="safety_title" style="font-size: 3rem; margin-bottom: 30px;">Uncompromising <span>Safety
                        Standards.</span></h2>
                <p data-i18n="safety_desc"
                    style="font-size: 1.2rem; color: var(--text-dim); max-width: 800px; margin: 0 auto;">
                    Safety is our core foundation. Every machine in our fleet undergoes rigorous PDO inspections and
                    international O&G certification audits.
                </p>
            </div>
        </div>
    </section>

    <!-- Simple FAQ / Technical Specs list for SEO -->
    <section class="section" style="padding-top: 0;">
        <div class="container tech-specs-grid"
            style="max-width: 1400px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; border-top: 1px solid var(--glass-border); padding-top: 60px;">
            <div>
                <h4 style="color: var(--primary); margin-bottom: 20px;" data-i18n="serv_pdo_compliance_title">PDO
                    COMPLIANCE</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);" data-i18n="serv_pdo_compliance_desc">Full
                    registration with Petroleum Development Oman
                    (PDO) for all rental cranes, ensuring access to high-security energy zones.</p>
            </div>
            <div>
                <h4 style="color: var(--primary); margin-bottom: 20px;" data-i18n="serv_certified_riggers_title">
                    CERTIFIED RIGGERS</h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);" data-i18n="serv_certified_riggers_desc">Our
                    operators and riggers hold international
                    certification for technical lifting and heavy load management.</p>
            </div>
            <div>
                <h4 style="color: var(--primary); margin-bottom: 20px;" data-i18n="serv_parts_hub_title">SPARE PARTS HUB
                </h4>
                <p style="font-size: 0.9rem; color: var(--text-dim);" data-i18n="serv_parts_hub_desc">Dedicated
                    warehouse support for SANY, Hyundai, and
                    Kia equipment to minimize maintenance delays.</p>
            </div>
        </div>
    </section>

    <!-- Dynamic Footer -->

<?php get_footer(); ?>

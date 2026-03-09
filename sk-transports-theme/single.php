<?php get_header(); ?>

<main class="section" style="padding-top: 150px;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <!-- Post Header -->
            <div style="text-align: center; margin-bottom: 50px;">
                <span class="hero-tagline" style="display: inline-block;"><?php the_category(', '); ?></span>
                <h1 class="hero-title" style="font-size: 3.5rem; margin-top: 20px;"><?php the_title(); ?></h1>
                <p style="color: var(--primary); font-weight: 700; margin-top: 10px;">
                    Published on: <?php echo get_the_date(); ?> | By <?php the_author(); ?>
                </p>
            </div>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="glass-card" style="padding: 10px; margin-bottom: 50px;">
                    <?php the_post_thumbnail('large', ['style' => 'width:100%; border-radius:15px;']); ?>
                </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="glass-card" style="line-height: 2; font-size: 1.1rem; color: var(--text-main);">
                <?php the_content(); ?>
            </div>

            <!-- SEO Tags / Tags Section -->
            <div style="margin-top: 40px; padding: 20px; border-top: 1px solid var(--glass-border);">
                <p style="color: var(--text-dim);">Tags: <?php the_tags('', ', ', ''); ?></p>
            </div>

        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>


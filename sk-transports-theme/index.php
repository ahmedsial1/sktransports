<?php get_header(); ?>
<main class="section" style="padding-top: 150px;">
    <div class="container" style="max-width: 900px; margin: 0 auto; min-height: 50vh;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="glass-card" style="margin-bottom: 30px;">
                <h2 style="color: var(--primary); margin-bottom: 20px;"><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h2>
                <div style="color: var(--text-dim); line-height: 1.8;">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile; else: ?>
            <h2 style="color: var(--text-dim);">No content found.</h2>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>

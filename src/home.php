<?php get_header(); ?>

<main id="main-content" class="site-content">
  <section class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="page-subtitle">Incoherent thoughts, loosely related to jellied fish, published without editorial oversight.</p>

    <?php if (have_posts()) : ?>
      <div class="posts-container">
        <?php while (have_posts()) : the_post(); ?>
          <article class="post-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="post-title">
              <a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a>
            </h2>

            <?php if (has_post_thumbnail()) : ?>
              <div class="post-thumb">
                <?php the_post_thumbnail('medium'); ?>
              </div>
            <?php endif; ?>

            <div class="post-excerpt">
              <?php the_excerpt(); ?>
            </div>

            <div class="post-meta">
              <span>Published on <?php the_time(get_option('date_format')); ?> by <?php the_author(); ?></span>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php the_posts_navigation(); ?>
      </div>
    <?php else : ?>
      <p><?php esc_html_e('Nothing here. Possibly due to a clerical error or cosmic event.'); ?></p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>

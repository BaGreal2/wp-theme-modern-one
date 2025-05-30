<?php get_header(); ?>

<main id="main-content" class="site-content">
  <section class="container single-post">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if (has_post_thumbnail()) : ?>
          <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <h1 class="post-title"><?php the_title(); ?></h1>

        <div class="post-meta">
          <p>Written by <?php the_author(); ?> · Published on <?php the_time(get_option('date_format')); ?> · Unverified source</p>
        </div>

        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <div class="post-footer-note">
          <p><em>If you believed any of this, that’s on you.</em></p>
        </div>

      </article>

    <?php endwhile; else : ?>

      <p>This content has vanished mysteriously, like the fish once used to write it.</p>

    <?php endif; ?>
    
  </section>
</main>

<?php get_footer(); ?>

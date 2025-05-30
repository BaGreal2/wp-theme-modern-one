<?php get_header(); ?>

<main id="main-content" class="site-content">
  <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
      <?php the_post_thumbnail('large'); ?>
    </div>
  <?php endif; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

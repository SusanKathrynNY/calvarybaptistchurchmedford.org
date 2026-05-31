<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="ph">
  <div class="phg"></div>
  <div class="ey"><?php echo esc_html( get_post_meta( get_the_ID(), '_calvary_eyebrow', true ) ); ?></div>
  <h1><?php the_title(); ?></h1>
  <?php if ( has_excerpt() ) : ?>
    <p><?php the_excerpt(); ?></p>
  <?php endif; ?>
</div>

<div class="sec">
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>

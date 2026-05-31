<?php get_header(); ?>

<div class="ph">
  <div class="phg"></div>
  <div class="ey">From the Pulpit</div>
  <h1>Blog &amp; Updates</h1>
</div>

<div class="sec">
  <div class="evl">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="evc" style="flex-direction:column;align-items:flex-start;gap:8px;">
      <div class="evt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      <div class="evmt"><?php echo get_the_date(); ?> · <?php the_author(); ?></div>
      <div style="font-size:14px;color:var(--gry);line-height:1.7;"><?php the_excerpt(); ?></div>
    </div>
    <?php endwhile; else : ?>
    <p style="color:var(--gry);">No posts found.</p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container">
  
  <header class="mb-5">
    <h1>Pages Archive With: "<?php single_cat_title(); ?>"</h1>
  </header>

  <div class="row">
    <div class="col">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <hr>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
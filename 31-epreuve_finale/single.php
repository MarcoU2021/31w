<?php get_header(); ?> 
<section class="site__main">
<h1>Atelier CMS</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
  <?php
    $resume = get_field("description");
    echo "<p>la description: " . $resume . "</p>";
    $image = get_field('image');
      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>


    <?php endwhile; ?>
<?php endif; ?>    
</section>
<?php get_footer(); ?>
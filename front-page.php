<?php

// <div class="container mx-auto py-8 px-4">

get_header();

if (have_posts()) :
  
  while (have_posts()) : the_post(); ?>
      
    <?php the_content(); ?>

  <?php endwhile;

else :

  echo '<p>No content found</p>';

endif;

get_footer();
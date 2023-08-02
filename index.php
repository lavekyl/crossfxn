<?php

get_header(); ?>

<div class="container mx-auto py-8 px-4">
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <article class="post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
    </article>

  <?php endwhile;

else :
  echo '<p>No content found</p>';

endif; ?>
</div>
<?php 

get_footer();
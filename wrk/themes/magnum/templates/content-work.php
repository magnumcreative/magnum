<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>Industy: <?php the_terms( $post->ID, 'industry' ,  ' ' );?></p>
    <p>Service: <?php the_terms( $post->ID, 'service' ,  ' ' );?></p>
    <p>Tech: <?php the_terms( $post->ID, 'tech' ,  ' ' );?></p>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <hr />
</article>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-info'); ?>>

  <div class="card-body text-white">
    <p class="card-text"><?php the_content(); ?></p>
    <small>written @ <?php the_date('Y-m-d'); ?>, <?php the_time(); ?></small>
  </div> <!-- card-body -->

</article>
<article id="post-<?php the_ID(); ?>" <?php post_class('bg-primary'); ?>>

  <div class="card-body text-white">
    <a class="text-white" target="_blank" href="<?php echo get_the_content(); ?>">
      <p><?php the_title(); ?></p>
    </a>
  </div> <!-- card-body -->

</article>
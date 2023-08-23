<?php
get_header();
// Page banner
get_template_part('template-parts/acf', 'pageBanner');
?>


<!-- BLOG ========================================= -->
<section class="blogpage">
  <div class="section-content">
    <div class="container">
      <div class="row">

        <div class="card-columns">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink() ?>" class="post-link">
                <div class="card">
                  <?php get_template_part('template-parts/content', get_post_format()); ?>
                </div> <!-- card -->
              </a>
          <?php endwhile;
          else : _e('Sorry, no post found', 'wp_custom');

          endif; ?>

        </div> <!-- card-columns -->

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- Section Content -->
</section>

<!-- BLOG ========================================= -->

<?php
// Map Section
get_template_part('template-parts/acf', 'map');
// Footer
get_footer();
?>
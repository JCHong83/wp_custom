<?php
/* Template Name: 404 Page */
get_header();
?>

<!-- 404 PAGE ========================================= -->

<section class="404-page">
  <div class="section-content">
    <div class="container">
      <div class="row justify-content-center">

        <!-- MAIN =========================================== -->

        <main class="col-11">

          <div class="text-center">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/error.jpg" alt="" class="img-fluid" width="500px" height="500px">
          </div>

          <h1 class="display-4 my-4 text-center"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'jc-custom'); ?></h1>

          <div class="row justify-content-center mb-4">
            <p class="lead mb-5">
              <?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'jc-custom'); ?>
            </p>

            <div class="col-md-9">
              <?php get_search_form(); ?>
            </div>
          </div> <!-- row -->

          <br><br>

          <div class="my-4 text-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-muted"><?php echo get_the_title(65); ?></a> | <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-muted"><?php echo get_the_title(27); ?></a> | <a href="<?php echo esc_url(home_url('/company/profile-page')); ?>" class="text-muted"><?php echo get_the_title(2); ?></a>
          </div>

        </main>

        <!-- MAIN =========================================== -->

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- section-content -->
</section>

<!-- 404 PAGE ========================================= -->

<?php

get_footer();
?>
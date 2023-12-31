<?php
/* Template Name: FullWidth Page */
get_header();
get_template_part('template-parts/acf', 'pageBanner');
?>

<!-- FULLWIDTH PAGE ========================================= -->

<section class="fullwidth-page">
  <div class="section-content">
    <div class="container">
      <div class="row justify-content-center">

        <!-- MAIN =========================================== -->

        <main class="col-xl-9">
          <?php while (have_posts()) : the_post();
            the_content();
          endwhile; ?>
        </main>

        <!-- MAIN =========================================== -->

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- section-content -->
</section>

<!-- FULLWIDTH PAGE ========================================= -->

<?php
get_template_part('template-parts/acf', 'howtoContact');
get_footer();
?>
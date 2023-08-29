<?php
get_header();
get_template_part('template-parts/acf', 'pageBanner');
?>

<!-- Post ========================================= -->

<section class="post">
  <div class="section-content">
    <div class="container">

      <?php get_template_part('template-parts/content', 'pageHeader'); ?>

      <div class="row">

        <?php
        get_template_part('template-parts/content', 'single');
        get_template_part('template-parts/content', 'sidebar');
        ?>

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- section-content -->
</section>


<!-- Post ========================================= -->

<?php
get_template_part('template-parts/acf', 'howtoContact');
get_footer();
?>
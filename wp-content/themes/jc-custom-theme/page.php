<?php
get_header();
get_template_part('template-parts/acf', 'pageBanner');
?>

<!-- Page ========================================= -->

<section class="page">
  <div class="section-content">
    <div class="container">
      <div class="row">

        <?php
        get_template_part('template-parts/content', 'page');
        get_template_part('template-parts/content', 'sidebar');
        ?>

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- section-content -->
</section>


<!-- Page ========================================= -->

<?php
get_template_part('template-parts/acf', 'howtoContact');
get_footer();
?>
<?php
/* Template Name: Intro Page */
get_header();
get_template_part('template-parts/acf', 'pageBanner');
?>

<!-- Page ========================================= -->

<section class="page">
  <div class="section-content">
    <div class="container">
      <div class="row">

        <!-- MAIN ========================================= -->

        <article class="col-xl-8 col-md-12">
          <!-- Profile ====================================== -->
          <div class="profile">
            <h5 class="text-muted mb-3">Glad to meet you</h5>
            <h2 class="mb-4">I'm JC Hong, CEO</h2>
            <div class="profile-img">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pexels-pixabay-220453.jpg" alt="" class="img-fluid rounded-circle d-block mx-auto float-md-left mr-md-5" width="250px">
            </div> <!-- Profile Img -->
            <br class="d-block d-md-none">
            <div class="profile-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam qui, voluptas, debitis doloribus tempora ipsum quae, dignissimos dolor sequi inventore vitae aliquid sunt ipsa aut laudantium nesciunt dolores tempore. Commodi cupiditate sequi error voluptate. Excepturi consectetur, labore odit, enim omnis quae quisquam, officiis aliquid in rem voluptas consequuntur deleniti repudiandae odio quos! Est aut atque quaerat praesentium animi placeat? Consectetur ducimus odit animi. Praesentium, id? Consequuntur a ipsa ratione quibusdam minus natus doloremque accusamus eius molestias nam, inventore accusantium laudantium. Dolores, alias perferendis voluptatem error sed ipsum fuga ex libero non quasi praesentium laudantium laboriosam nam sunt. Rem, cum.</div>
          </div> <!-- Profile -->
          <!-- Profile ====================================== -->
        </article>

        <!-- MAIN ========================================= -->

        <!-- SIDE ========================================= -->

        <?php get_template_part('template-parts/content', 'sidebar'); ?>

        <!-- SIDE ========================================= -->

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- section-content -->
</section>


<!-- Page ========================================= -->

<?php
get_template_part('template-parts/acf', 'howtoContact');
get_footer();
?>
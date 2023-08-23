<?php get_header();
get_template_part('template-parts/acf', 'pageBanner');
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<!-- Post ========================================= -->

<section class="post">
  <div class="section-content">
    <div class="container">
      <!-- Page-Header ========================================= -->

      <div class="row page-header mb-4 pb-2">

        <div class="col-md-6 col-sm-8 col-xl-8 my-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
              <li class="breadcrumb-item"><a href="<?php echo site_url('/home'); ?>"><?php echo get_the_title(65); ?></a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('/blog'); ?>"><?php echo get_the_title(27); ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
          </nav>
        </div> <!-- Breadcrumb -->

        <div class="col-md-6 col-sm-4 col-xl-4 my-auto">
          <div class="pull-right">
            <?php next_post_link('%link', '<i class="fa fa-arrow-left"></i>'); ?>
            <?php previous_post_link('%link', '<i class="fa fa-arrow-right"></i>'); ?>
          </div>
        </div> <!-- Post-Link -->

      </div>

      <!-- Page-Header ========================================= -->

      <div class="row">

        <?php while (have_posts()) : the_post(); ?>

          <!-- MAIN ====================================== -->
          <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-8 col-md-12'); ?>>
            <div class="featured-image">
              <?php if ($thumbnail_url) { // Featured Image 
              ?>
                <img src="<?php echo $thumbnail_url; ?>" alt="" class="img-fluid img-raised">
              <?php } else { // Fallback Image 
              ?>
                <img src="http://via.placeholder.com/900x600" alt="" class="img-fluid img-raised">
              <?php } ?>
            </div> <!-- Featured Image -->

            <div class="post-meta mt-5">
              <small class="text-muted mb-5">
                <i class="fa fa-user"></i><strong> <?php the_author(); ?> </strong> | <i class="far fa-clock"></i> <?php the_date('Y-m-d'); ?> | <i class="fa fa-folder-open"></i> <strong> category: <?php the_category(', '); ?></strong> | <i class="fa fa-tags"></i> <strong> <?php the_tags(); ?></strong>
              </small>
            </div>

            <?php the_content(); ?>

            <br>
            <hr style="display: block;"><br>
            <!-- Social Icon ====================================== -->
            <div class="text-center">
              <h3 class="mb-4">Share with my social network</h3>
              <a target="_blank" href="https://www.facebook.com/your_id" class="social badge facebook mx-2"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="https://plus.google.com/your_id" class="social badge gplus mx-2"><i class="fab fa-google-plus-g"></i></a>
              <a target="_blank" href="https://www.twitter.com/your_id" class="social badge twitter mx-2"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="https://www.pinterest.com/your_id" class="social badge pinterest mx-2"><i class="fab fa-pinterest"></i></a>
              <a target="_blank" href="https://www.instagram.com/your_id" class="social badge instagram mx-2"><i class="fab fa-instagram"></i></a>
            </div>

            <!-- Social Icon ====================================== -->

            <!-- About the Author ====================================== -->
            <div class="author-box p-4 my-4">
              <h3 class="text-center">About the author</h3>
              <br>
              <div class="row">
                <div class="col-12 col-sm-2 text-center">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pexels-pixabay-220453.jpg" alt="author" class="img-fluid rounded-circle mb-4">
                </div>

                <div class="col-12 col-sm-10">
                  <div>
                    <p>
                      <strong><?php echo get_the_author_meta('nickname'); ?></strong>
                      <span class="float-right">
                        <a class="mr-2" href=" http://naver.com"><i class="fas fa-newspaper"></i></a>
                        <a href="mailto:your_email@gmail.com"><i class="fas fa-envelope"></i></a>
                      </span>
                    </p>
                  </div>
                  <p><?php echo get_the_author_meta('description'); ?></p>
                </div>
              </div>
            </div>

            <!-- About the Author ====================================== -->

            <br><br>

            <!-- Related Posts ====================================== -->

            <div class="related-posts">
              <h3 class="text-center mb-5">Related posts</h3>
              <div class="row">

                <?php
                $relatedPost = new WP_Query(array(
                  'author' => get_the_author_meta('ID'),
                  'category__in' => wp_get_post_categories($post->ID),
                  'posts_per_page' => 3,
                  'post__not_in' => array(get_the_ID())
                ));

                if ($relatedPost->have_posts()) : while ($relatedPost->have_posts()) :
                    $relatedPost->the_post();

                ?>

                    <div class="col-md-4">
                      <div class="card">

                        <?php if (has_post_thumbnail()) { ?>
                          <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('Large', ['class' => 'img-fluid']);
                        } else {; ?>
                          </a>
                          <a href="<?php the_permalink(); ?>">
                            <img src="http://via.placeholder.com/300x200" alt="placeholder" class="img-fluid">
                          </a>
                        <?php }; ?>

                        <p class="text-center p-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                    </div> <!-- col-md-4 -->

                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>

              </div>
            </div>

            <!-- Related Posts ====================================== -->

            <br><br>
            <!-- Comments ====================================== -->

            <div id="disqus_thread"></div>
            <script>
              /**
               *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
               *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
              (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                  s = d.createElement('script');
                s.src = 'https://wp-custom-theme.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
              })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            <!-- Comments ====================================== -->

          </article>

        <?php endwhile ?>

        <!-- MAIN ====================================== -->

        <!-- Sidebar ====================================== -->

        <aside class=" col-xl-4 col-md-12 widget-column">

          <?php get_sidebar(); ?>

          <br>

          <div class="text-box bg-info my-4">
            <p class="lead tex-white text-center py-2">Featured Posts</p>
          </div> <!-- text box -->

          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category__not_in' => 1,
            'orderby' => 'DESC'
          );

          $featuredPost = new WP_Query($args);

          if ($featuredPost->have_posts()) :
            while ($featuredPost->have_posts()) :
              $featuredPost->the_post();
          ?>

              <div class="news">
                <?php if (has_post_thumbnail()) { ?>
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('Large', ['class' => 'img-fluid img-raised']); ?></a>
                <?php } else { ?>
                  <a href="<?php the_permalink() ?>"><img src="http://via.placeholder.com/600x400" alt="" class="img-fluid img-raised"></a>
                <?php } ?>

                <div class="news-data mt-4">
                  <h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <small class="float-right">
                      <span class="badge badge-warning">cat 1</span>
                    </small>
                  </h6>
                </div>
              </div>
              <br>

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>

        </aside>


        <!-- Sidebar ====================================== -->

      </div>

    </div>
  </div>
</section>


<!-- Post ========================================= -->

<?php get_footer(); ?>
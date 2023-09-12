<!-- PAGE BANNER ========================================= -->

<?php if (is_home() && !is_front_page()) : ?>

  <section id="jumbotron" style="background: url(<?php echo get_field('banner_img', 27)['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center center">

  <?php elseif (is_archive()) : ?>
    <section id="jumbotron" style="background: url(<?php echo bloginfo('stylesheet_directory'); ?>/img/archive.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <?php elseif (is_search()) : ?>
      <section id="jumbotron" style="background: url(<?php echo bloginfo('stylesheet_directory'); ?>/img/search.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">

      <?php else : ?>

        <section id="jumbotron" style="background: url(<?php echo get_field('banner_img')['url']; ?>); background-repeat: no-repeat; background-size: cover; background-position: center center">

        <?php endif; ?>

        <div class="container">
          <div class="row">
            <div class="col-10 offset-1 justify-content-center text-white text-center">
              <h1 class="display-4">
                <?php
                if (is_home() && !is_front_page()) : echo get_the_title(27);
                elseif (is_archive()) : echo the_archive_title();
                elseif (is_search()) : printf(esc_html__('Search Results for: %s', 'wp-custom'), '<span>' . get_search_query() . '</span>');
                else : echo get_the_title();
                endif ?>
              </h1>

              <?php if (!is_Search()) { ?>
                <hr style="display: block; border-top: 1px solid #fff;">
              <?php }; ?>

              <p class="lead">
                <?php
                if (is_home() && !is_front_page()) : echo get_field('banner_desc', 27);
                elseif (is_archive()) : echo the_archive_description();
                elseif (is_search()) : echo '';
                else : echo get_field('banner_desc');
                endif ?>
              </p>
            </div>
          </div>
        </div>
        </section>

        <!-- PAGE BANNER ========================================= -->
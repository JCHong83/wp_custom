  <?php
  // Advanced Custom Field - Front Page Slide
  $slide_img_1 = get_field('slide_img_1');
  $slide_img_2 = get_field('slide_img_2');
  $slide_img_3 = get_field('slide_img_3');
  $slide_cap_title_1 = get_field('slide_cap_title_1');
  $slide_cap_title_2 = get_field('slide_cap_title_2');
  $slide_cap_title_3 = get_field('slide_cap_title_3');
  $slide_cap_desc_1 = get_field('slide_cap_desc_1');
  $slide_cap_desc_2 = get_field('slide_cap_desc_2');
  $slide_cap_desc_3 = get_field('slide_cap_desc_3');
  ?>


  <!-- Slide ======================================================= -->

  <div id="carousel-front" class="carousel slide" data-ride="carousel">

    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-front" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-front" data-slide-to="1"></li>
      <li data-target="#carousel-front" data-slide-to="2"></li>
    </ol>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo $slide_img_1['url']; ?>" class="d-block w-100" alt="<?php echo $slide_img_1['alt']; ?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $slide_cap_title_1; ?></h5>
          <p><?php echo $slide_cap_desc_1; ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $slide_img_2['url']; ?>" class="d-block w-100" alt="<?php echo $slide_img_2['alt']; ?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $slide_cap_title_2; ?></h5>
          <p><?php echo $slide_cap_desc_2; ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $slide_img_3['url']; ?>" class="d-block w-100" alt="<?php echo $slide_img_3['alt']; ?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $slide_cap_title_3; ?></h5>
          <p><?php echo $slide_cap_desc_3; ?></p>
        </div>
      </div>
    </div>

    <!-- Carousel Controls -->
    <a class="carousel-control-prev" type="button" data-target="#carousel-front" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" type="button" data-target="#carousel-front" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Slide ======================================================= -->

  <br><br>
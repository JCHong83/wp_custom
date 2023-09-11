<?php
$more_title = get_field('more_title');
$title_1 = get_field('title_1');
$small_title_1 = get_field('small_title_1');
$body_1 = get_field('body_1');
$title_2 = get_field('title_2');
$small_title_2 = get_field('small_title_2');
$thumb_1 = get_field('thumb_1');
$image_1 = get_field('image_1');
$thumb_2 = get_field('thumb_2');
$image_2 = get_field('image_2');
$thumb_3 = get_field('thumb_3');
$image_3 = get_field('image_3');
$thumb_4 = get_field('thumb_4');
$image_4 = get_field('image_4');
$title_3 = get_field('title_3');
$small_title_3 = get_field('small_title_3');
$body_3 = get_field('body_3');
?>
<!-- More Info ==================================== -->

<div id="moreInfo">
  <div class="section-content">
    <div class="container">
      <div class="row">
        <div class="col">

          <h4 class="b-4"><?php echo $more_title; ?></h4>

          <!-- Nav Tabs -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Map</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pictures</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Video</button>
            </li>
          </ul>
          <!-- Nav Contents -->
          <div class="tab-content" id="myTabContent">
            <!-- Tab Content 1 -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h5 class="my-4"><i class="fa fa-location-arrow"></i> <?php echo $title_1; ?> <small class="text-primary"><?php echo $small_title_1; ?></small></h5>
              <?php echo $body_1; ?>
            </div>
            <!-- Tab Content 2 -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h5 class="my-4"><i class="fas fa-image"></i> <?php echo $title_2; ?> <small class="text-primary"><?php echo $small_title_2; ?></small></h5>
              <div class="row">
                <div class="col p-0">
                  <a href="<?php echo $image_1['url']; ?>" class="thumbnail" data-lightbox="gallery" data-title="<?php echo $image_1['alt']; ?>"><img src="<?php echo $thumb_1['url']; ?>" alt="" class="img-thumbnail"></a>
                </div>
                <div class="col p-0">
                  <a href="<?php echo $image_2['url']; ?>" class="thumbnail" data-lightbox="gallery" data-title="<?php echo $image_2['alt']; ?>"><img src="<?php echo $thumb_2['url']; ?>" alt="" class="img-thumbnail"></a>
                </div>
                <div class="w-100"></div>
                <div class="col p-0">
                  <a href="<?php echo $image_3['url']; ?>" class="thumbnail" data-lightbox="gallery" data-title="<?php echo $image_3['alt']; ?>"><img src="<?php echo $thumb_3['url']; ?>" alt="" class="img-thumbnail"></a>
                </div>
                <div class="col p-0">
                  <a href="<?php echo $image_4['url']; ?>" class="thumbnail" data-lightbox="gallery" data-title="<?php echo $image_4['alt']; ?>"><img src="<?php echo $thumb_4['url']; ?>" alt="" class="img-thumbnail"></a>
                </div>
              </div>
            </div>
            <!-- Tab Content 3 -->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <h5 class="my-4"><i class="fas fa-tv"></i> <?php echo $title_3; ?> <small class="text-primary"><?php echo $small_title_3; ?></small></h5>
              <?php echo $body_3; ?>
            </div>
          </div>

        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- section-content -->
</div> <!-- moreInfo -->

<!-- More Info ==================================== -->
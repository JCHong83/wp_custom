<?php
// Advanced Custom Filed - Item Boxes
$radio = get_field('radio');
$item_img_1 = get_field('item_img_1');
$mo_img_1 = get_field('mo_img_1');
$item_title_1 = get_field('item_title_1');
$item_desc_1 = get_field('item_desc_1');
$item_link_1 = get_field('item_link_1');
$item_img_2 = get_field('item_img_2');
$mo_img_2 = get_field('mo_img_2');
$item_title_2 = get_field('item_title_2');
$item_desc_2 = get_field('item_desc_2');
$item_link_2 = get_field('item_link_2');
$item_img_3 = get_field('item_img_3');
$mo_img_3 = get_field('mo_img_3');
$item_title_3 = get_field('item_title_3');
$item_desc_3 = get_field('item_desc_3');
$item_link_3 = get_field('item_link_3');
$item_img_4 = get_field('item_img_4');
$mo_img_4 = get_field('mo_img_4');
$item_title_4 = get_field('item_title_4');
$item_desc_4 = get_field('item_desc_4');
$item_link_4 = get_field('item_link_4');
$item_img_5 = get_field('item_img_5');
$mo_img_5 = get_field('mo_img_5');
$item_title_5 = get_field('item_title_5');
$item_desc_5 = get_field('item_desc_5');
$item_link_5 = get_field('item_link_5');
$item_img_6 = get_field('item_img_6');
$mo_img_6 = get_field('mo_img_6');
$item_title_6 = get_field('item_title_6');
$item_desc_6 = get_field('item_desc_6');
$item_link_6 = get_field('item_link_6');
$item_img_7 = get_field('item_img_7');
$mo_img_7 = get_field('mo_img_7');
$item_title_7 = get_field('item_title_7');
$item_desc_7 = get_field('item_desc_7');
$item_link_7 = get_field('item_link_7');
$item_img_8 = get_field('item_img_8');
$mo_img_8 = get_field('mo_img_8');
$item_title_8 = get_field('item_title_8');
$item_desc_8 = get_field('item_desc_8');
$item_link_8 = get_field('item_link_8');
?>


<!-- Page Item Box -->

<div id="pageItemBox">

  <!-- 1st row -->
  <div class="row">

    <div class="col-lg-3 col-6 mb-4 page-box">
      <a href="<?php echo $item_link_1; ?>" class="text-muted">

        <!-- for devices over small size -->
        <div class="box-bg p-3 d-none d-sm-block">
          <img src="<?php echo $item_img_1['url']; ?>" alt="<?php echo $item_img_1['alt']; ?>" class="box-icon">
          <h5 class="mt-3"><?php echo $item_title_1; ?></h5>
          <p class="mb-3"><small><?php echo $item_desc_1; ?></small></p>
        </div>
        <!-- for devices over small size -->

        <!-- for devices extra small size -->
        <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
          <img src="<?php echo $mo_img_1['url']; ?>" alt="<?php echo $mo_img_1['alt']; ?>" class="img-fluid" width="80px">
          <h6 class="mt-3"><strong><?php echo $item_title_1; ?></strong></h6>
        </div>
        <!-- for devices extra small size -->

      </a>
    </div> <!-- Page Box -->

    <div class="col-lg-3 col-6 mb-4 page-box">
      <a href="<?php echo $item_link_2; ?>" class="text-muted">

        <!-- for devices over small size -->
        <div class="box-bg p-3 d-none d-sm-block">
          <img src="<?php echo $item_img_2['url']; ?>" alt="<?php echo $item_img_2['alt']; ?>" class="box-icon">
          <h5 class="mt-3"><?php echo $item_title_2; ?></h5>
          <p class="mb-3"><small><?php echo $item_desc_2; ?></small></p>
        </div>
        <!-- for devices over small size -->

        <!-- for devices extra small size -->
        <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
          <img src="<?php echo $mo_img_2['url']; ?>" alt="<?php echo $mo_img_2['alt']; ?>" class="img-fluid" width="80px">
          <h6 class="mt-3"><strong><?php echo $item_title_2; ?></strong></h6>
        </div>
        <!-- for devices extra small size -->

      </a>
    </div> <!-- Page Box -->

    <div class="col-lg-3 col-6 mb-4 page-box">
      <a href="<?php echo $item_link_3; ?>" class="text-muted">

        <!-- for devices over small size -->
        <div class="box-bg p-3 d-none d-sm-block">
          <img src="<?php echo $item_img_3['url']; ?>" alt="<?php echo $item_img_3['alt']; ?>" class="box-icon">
          <h5 class="mt-3"><?php echo $item_title_3; ?></h5>
          <p class="mb-3"><small><?php echo $item_desc_3; ?></small></p>
        </div>
        <!-- for devices over small size -->

        <!-- for devices extra small size -->
        <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
          <img src="<?php echo $mo_img_3['url']; ?>" alt="<?php echo $mo_img_3['alt']; ?>" class="img-fluid" width="80px">
          <h6 class="mt-3"><strong><?php echo $item_title_3; ?></strong></h6>
        </div>
        <!-- for devices extra small size -->

      </a>
    </div> <!-- Page Box -->

    <div class="col-lg-3 col-6 mb-4 page-box">
      <a href="<?php echo $item_link_4; ?>" class="text-muted">

        <!-- for devices over small size -->
        <div class="box-bg p-3 d-none d-sm-block">
          <img src="<?php echo $item_img_4['url']; ?>" alt="<?php echo $item_img_4['alt']; ?>" class="box-icon">
          <h5 class="mt-3"><?php echo $item_title_4; ?></h5>
          <p class="mb-3"><small><?php echo $item_desc_4; ?></small></p>
        </div>
        <!-- for devices over small size -->

        <!-- for devices extra small size -->
        <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
          <img src="<?php echo $mo_img_4['url']; ?>" alt="<?php echo $mo_img_4['alt']; ?>" class="img-fluid" width="80px">
          <h6 class="mt-3"><strong><?php echo $item_title_4; ?></strong></h6>
        </div>
        <!-- for devices extra small size -->

      </a>
    </div> <!-- Page Box -->

  </div> <!-- row -->
  <!-- 1st row -->

  <?php if ($radio) {; ?>

    <!-- 2nd row -->
    <div class="row">

      <div class="col-lg-3 col-6 mb-4 page-box">
        <a href="<?php echo $item_link_5; ?>" class="text-muted">

          <!-- for devices over small size -->
          <div class="box-bg p-3 d-none d-sm-block">
            <img src="<?php echo $item_img_5['url']; ?>" alt="<?php echo $item_img_5['alt']; ?>" class="box-icon">
            <h5 class="mt-3"><?php echo $item_title_5; ?></h5>
            <p class="mb-3"><small><?php echo $item_desc_5; ?></small></p>
          </div>
          <!-- for devices over small size -->

          <!-- for devices extra small size -->
          <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
            <img src="<?php echo $mo_img_5['url']; ?>" alt="<?php echo $mo_img_5['alt']; ?>" class="img-fluid" width="80px">
            <h6 class="mt-3"><strong><?php echo $item_title_5; ?></strong></h6>
          </div>
          <!-- for devices extra small size -->

        </a>
      </div> <!-- Page Box -->

      <div class="col-lg-3 col-6 mb-4 page-box">
        <a href="<?php echo $item_link_6; ?>" class="text-muted">

          <!-- for devices over small size -->
          <div class="box-bg p-3 d-none d-sm-block">
            <img src="<?php echo $item_img_6['url']; ?>" alt="<?php echo $item_img_6['alt']; ?>" class="box-icon">
            <h5 class="mt-3"><?php echo $item_title_6; ?></h5>
            <p class="mb-3"><small><?php echo $item_desc_6; ?></small></p>
          </div>
          <!-- for devices over small size -->

          <!-- for devices extra small size -->
          <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
            <img src="<?php echo $mo_img_6['url']; ?>" alt="<?php echo $mo_img_6['alt']; ?>" class="img-fluid" width="80px">
            <h6 class="mt-3"><strong><?php echo $item_title_6; ?></strong></h6>
          </div>
          <!-- for devices extra small size -->

        </a>
      </div> <!-- Page Box -->

      <div class="col-lg-3 col-6 mb-4 page-box">
        <a href="<?php echo $item_link_7; ?>" class="text-muted">

          <!-- for devices over small size -->
          <div class="box-bg p-3 d-none d-sm-block">
            <img src="<?php echo $item_img_7['url']; ?>" alt="<?php echo $item_img_7['alt']; ?>" class="box-icon">
            <h5 class="mt-3"><?php echo $item_title_7; ?></h5>
            <p class="mb-3"><small><?php echo $item_desc_7; ?></small></p>
          </div>
          <!-- for devices over small size -->

          <!-- for devices extra small size -->
          <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
            <img src="<?php echo $mo_img_7['url']; ?>" alt="<?php echo $mo_img_7['alt']; ?>" class="img-fluid" width="80px">
            <h6 class="mt-3"><strong><?php echo $item_title_7; ?></strong></h6>
          </div>
          <!-- for devices extra small size -->

        </a>
      </div> <!-- Page Box -->

      <div class="col-lg-3 col-6 mb-4 page-box">
        <a href="<?php echo $item_link_8; ?>" class="text-muted">

          <!-- for devices over small size -->
          <div class="box-bg p-3 d-none d-sm-block">
            <img src="<?php echo $item_img_8['url']; ?>" alt="<?php echo $item_img_8['alt']; ?>" class="box-icon">
            <h5 class="mt-3"><?php echo $item_title_8; ?></h5>
            <p class="mb-3"><small><?php echo $item_desc_8; ?></small></p>
          </div>
          <!-- for devices over small size -->

          <!-- for devices extra small size -->
          <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
            <img src="<?php echo $mo_img_8['url']; ?>" alt="<?php echo $mo_img_8['alt']; ?>" class="img-fluid" width="80px">
            <h6 class="mt-3"><strong><?php echo $item_title_8; ?></strong></h6>
          </div>
          <!-- for devices extra small size -->

        </a>
      </div> <!-- Page Box -->

    </div> <!-- row -->
    <!-- 2nd row -->
  <?php }; ?>

</div> <!-- pageItemBox -->

<!-- Page Item Box -->
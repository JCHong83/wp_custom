<?php
$profile_subheading = get_field('profile_subheading');
$profile_heading = get_field('profile_heading');
$profile_img = get_field('profile_img');
$profile_body = get_field('profile_body');
?>

<!-- Profile ====================================== -->

<div class="profile">
  <h5 class="text-muted mb-3"><?php echo $profile_subheading; ?></h5>
  <h2 class="mb-4"><?php echo $profile_heading; ?></h2>
  <div class="profile-img">
    <img src="<?php echo $profile_img['url']; ?>" alt="<?php echo $profile_img['alt']; ?>" class="img-fluid rounded-circle d-block mx-auto float-md-left mr-md-5" width="250px">
  </div> <!-- Profile Img -->
  <br class="d-block d-md-none">
  <div class="profile-body"><?php echo $profile_body; ?></div>
</div> <!-- Profile -->

<!-- Profile ====================================== -->

<br><br>
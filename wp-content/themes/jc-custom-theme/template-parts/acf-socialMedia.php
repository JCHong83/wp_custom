<?php
$facebook = get_field('facebook');
$twitter = get_field('twitter');
$google_plus = get_field('google_plus');
$instagram = get_field('instagram');
?>



<ul class="list-group d-none d-md-block">
  <li class="list-group-item list-group-item-success"><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-square"></i> Facebook</a></li>
  <li class="list-group-item list-group-item-info"><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter-square"></i> Twitter</a></li>
  <li class="list-group-item list-group-item-warning"><a href="<?php echo $google_plus; ?>"><i class="fab fa-google-plus-square"></i> Google+</a></li>
  <li class="list-group-item list-group-item-danger"><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i> Instagram</a></li>
</ul> <!-- Visible on devices over medium size -->

<div class="d-flex flex-nowrap d-block d-sm-none no-gutters">
  <div class="d-inline bg-success py-2 px-3"><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook text-white"></i> <small class="text-white"> Facebook</small></a></div>
  <div class="d-inline bg-info py-2 px-3"><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter text-white"></i> <small class="text-white"> Twitter</small></a></div>
  <div class="d-inline bg-warning py-2 px-3"><a href="<?php echo $google_plus; ?>"><i class="fab fa-google-plus text-white"></i> <small class="text-white"> Google+</small></a></div>
  <div class="d-inline bg-danger py-2 px-3"><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram text-white"></i> <small class="text-white"> Instagram</small></a></div>
</div> <!-- Visible on small devices -->
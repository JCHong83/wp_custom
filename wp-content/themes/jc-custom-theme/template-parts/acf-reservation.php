<?php
$reserve_link = get_field('reserve_link');
$reserve_title = get_field('reserve_title');
$reserve_desc = get_field('reserve_desc');
$reserve_btn = get_field('reserve_btn');
?>


<div class="box-item bg-primary mb-4">
  <a href="<?php echo $reserve_link ?>">
    <div class="p-3">
      <h6 class="text-warning"><?php echo $reserve_title; ?></h6>
      <div class="text-white">
        <p><?php echo $reserve_desc; ?></p>
        <p class="lead text-danger"><?php echo $reserve_btn; ?></p>
      </div>
    </div>
  </a>
</div> <!-- Reservation Box Item -->
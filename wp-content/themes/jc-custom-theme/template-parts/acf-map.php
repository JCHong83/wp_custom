<?php
// Advanced Custom Field
$address_title = get_field('address_title', 27);
$address_body = get_field('address_body', 27);
$parking_title = get_field('parking_title', 27);
$parking_body = get_field('parking_body', 27);
$phone_title = get_field('phone_title', 27);
$phone_body = get_field('phone_body', 27);
?>

<!-- MAP SECTION ========================================= -->

<section class="contactMap">
  <div class="container">
    <div class="row">
      <div class="address-info col-3 offset-7 my-5 p-4 d-none d-md-block">
        <h4><?php echo $address_title; ?></h4>
        <p class="text-muted"><?php echo $address_body; ?></p>

        <h4><?php echo $parking_title; ?></h4>
        <p class="text-muted"><?php echo $parking_body; ?></p>

        <h4><?php echo $phone_title; ?>f</h4>
        <p class="text-muted"><?php echo $phone_body; ?></p>
      </div> <!-- address-info -->
    </div> <!-- row -->
  </div> <!-- container -->

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.28325934495!2d9.189351576844498!3d45.46409757107395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6aec34636a1%3A0xab7f4e27101a2e13!2z67CA652864W4IOuMgOyEseuLuQ!5e0!3m2!1sko!2sit!4v1691508056553!5m2!1sko!2sit" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> <!-- maps -->
</section>

<!-- MAP SECTION ========================================= -->
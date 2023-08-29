<!-- 아래 숫자는 포스트 아이디로, 하나의 포스트에 컨택 정보를 입력 하고 다른 포스트에서도 돌려 쓰겟금
꼼수를 사용하는 방법임. 제대로 하려면, 커스텀 필드를 만들어서 푸터에 포함이 되거나
별도의 템플릿 파트를 만들어서 별도로 입력을 하겠금 하는 방법이 깔끔하다고 생각함.  -->

<?php
$how_to_title = get_field('how_to_title', 24);
$how_to_desc = get_field('how_to_desc', 24);
$title_1 =  get_field('title_1', 24);
$content_1 =  get_field('content_1', 24);
$desc_1 =  get_field('desc_1', 24);
$title_2 =  get_field('title_2', 24);
$content_2 =  get_field('content_2', 24);
$desc_2 =  get_field('desc_2', 24);
$title_3 =  get_field('title_3', 24);
$content_3 =  get_field('content_3', 24);
$desc_3 =  get_field('desc_3', 24);
?>


<!-- How To Contact ========================================= -->

<section id="howtoContact" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/pexels-chepté-cormani-1416530.jpg) no-repeat; background-size: cover; background-attachment: fixed;">
  <div class="section-content">
    <div class="container text-white text-center">
      <h2 class="mb-4"><?php echo $how_to_title; ?></h2>
      <p class="lead mb-4"><?php echo $how_to_desc; ?></p>
      <br>

      <!-- Visible only on small devices -->
      <a class="btn btn-danger btn-lg btn-block mb-3 d-md-none" href="tel:<?php echo $content_1; ?>" role="button"><i class="fa fa-mobile"></i> <?php echo $title_1; ?></a>
      <a class="btn btn-danger btn-lg btn-block mb-3 d-md-none" href="<?php echo $content_2; ?>" role="button"><i class="fas fa-comments"></i> <?php echo $title_2; ?></a>
      <a class="btn btn-danger btn-lg btn-block mb-3 d-md-none" href="mailto:<?php echo $content_3; ?>" role="button"><i class="fas fa-envelope"></i> <?php echo $title_3; ?></a>



      <!-- Visible over medium devices -->

      <div class="row contactContent d-none d-md-flex">
        <div class="col">
          <h4 class="pt-5"><i class="fa fa-mobile"></i> <?php echo $title_1; ?></h4>
          <p class="lead"><?php echo $content_1; ?></p>
          <p class="mb-5"><?php echo $desc_1; ?></p>
        </div>
        <div class="col">
          <h4 class="pt-5"><i class="fas fa-comments"></i> <?php echo $title_2; ?></h4>
          <p class="lead"><?php echo $content_2; ?></p>
          <p class="mb-5"><?php echo $desc_2; ?></p>
        </div>
        <div class="col">
          <h4 class="pt-5"><i class="fas fa-envelope"></i> <?php echo $title_3; ?></h4>
          <p class="lead"><?php echo $content_3; ?></p>
          <p class="mb-5"><?php echo $desc_3; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- How To Contact ========================================= -->
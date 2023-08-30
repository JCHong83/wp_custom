<?php get_header(); ?>

<!-- TOGGLE COLLAPSE ======================================================= -->

<div class="collapse-idea">
  <div class="container">
    <div class="collapse" id="collapseIdea">
      <div class="card card-body bg-info text-white">
        <h3>The Idea of Our Company</h3>
        <div class="row m-2">
          <div class="col-sm-2 mb-2 float-left">
            <img src="http://via.placeholder.com/300x300" alt="" class="img-fluid">
          </div>
          <div class="col-sm-10 mb-2">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum nemo itaque maiores id facilis incidunt ipsum necessitatibus, deleniti laborum corporis cum sit reiciendis nihil libero illo esse ipsam quia error!</p>
          </div>
        </div>
      </div> <!-- card -->
    </div> <!-- collapse -->
  </div> <!-- container -->
</div>

<!-- TOGGLE COLLAPSE ======================================================= -->

<!-- FRONT SECTION ======================================================= -->

<section id="front-section">
  <div class="section-content">
    <div class="container">
      <div class="row">

        <!-- FRONT MAIN ======================================================= -->

        <div class="col-md-9 order-md-12">

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
                <img src="http://via.placeholder.com/1600x1100?text=First+Slide" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="http://via.placeholder.com/1600x1100?text=Second+Slide" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="http://via.placeholder.com/1600x1100?text=Third+Slide" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the Third slide.</p>
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

          <!-- Page Item Box -->

          <div id="pageItemBox">

            <!-- 1st row -->
            <div class="row">

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 1</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-primary text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 1</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 2</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-info text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 2</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 3</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-warning text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 3</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 4</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-danger text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 4</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

            </div> <!-- row -->
            <!-- 1st row -->

            <!-- 2nd row -->
            <div class="row">

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 5</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-success text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 5</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 6</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-secondary text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 6</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 7</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 text-white bg-dark text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nature-logo.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 7</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

              <div class="col-lg-3 col-6 mb-4 page-box">
                <a href="#" class="text-muted">

                  <!-- for devices over small size -->
                  <div class="box-bg p-3 d-none d-sm-block">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="box-icon">
                    <h5 class="mt-3">Page Item 8</h5>
                    <p class="mb-3"><small>Lorem ipsum, dolor sit amet consectetur adipisicing.</small></p>
                  </div>
                  <!-- for devices over small size -->

                  <!-- for devices extra small size -->
                  <div class="box-bg p-4 bg-light text-center d-block d-sm-none">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-social.png" alt="" class="img-fluid" width="80px">
                    <h6 class="mt-3"><strong>Page Item 8</strong></h6>
                  </div>
                  <!-- for devices extra small size -->

                </a>
              </div> <!-- Page Box -->

            </div> <!-- row -->
            <!-- 2nd row -->


          </div> <!-- pageItemBox -->

          <!-- Page Item Box -->

        </div>

        <!-- FRONT MAIN ======================================================= -->

        <!-- FRONT SIDE ======================================================= -->

        <div class="col-md-3 order-md-1">

          <div class="box-item mb-4 d-none d-md-block">
            <img src="http://via.placeholder.com/400x100?text=Logo" alt="" class="img-fluid">
          </div> <!-- Logo image box -->

          <div class="box-item mb-4">
            <div class="p-3">
              <h5 class="text-warning">Lorem ipsum.</h5>
              <div class="text-muted">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum rerum ullam modi voluptatum non qui unde alias consequatur nemo sit?</p>
                <a href="#collapseIdea" class="btn btn-info" data-toggle="collapse" aria-expanded="false" aria-controls="collapseIdea">Click Here</a>
              </div>
            </div>
          </div> <!-- Collapse Box -->

          <div class="box-item mb-4">
            <div class="p-3">
              <h3 class="text-warning">Informations</h3>

              <div class="text-muted">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod quis asperiores corrupti laboriosam dolor saepe velit odio iste a nostrum.</p>

                <!-- Button set for over medium devices -->
                <div class="row d-none d-md-block">

                  <div class="col-12 d-flex flex-row mb-1">
                    <span>Intro</span>
                    <a href="#" class="btn btn-primary btn-sm ml-auto">Click</a>
                  </div>

                  <div class="col-12 d-flex flex-row mb-1">
                    <span>Online</span>
                    <a href="#" class="btn btn-info btn-sm ml-auto">Click</a>
                  </div>

                  <div class="col-12 d-flex flex-row mb-1">
                    <span>Notice</span>
                    <a href="#" class="btn btn-warning btn-sm ml-auto">Click</a>
                  </div>

                </div> <!-- Over medium Devices -->

                <ul class="list-group d-block d-sm-none">
                  <a href="#">
                    <li class="list-group-item list-group-item-primary">Intro <span class="float-right">&raquo;</span></li>
                  </a>
                  <a href="#">
                    <li class="list-group-item list-group-item-info">Online <span class="float-right">&raquo;</span></li>
                  </a>
                  <a href="#">
                    <li class="list-group-item list-group-item-warning">Notice <span class="float-right">&raquo;</span></li>
                  </a>
                </ul>

                <!-- For small Devices -->

              </div>

            </div>
          </div> <!-- Information Box item -->

          <div class="box-item bg-primary mb-4">
            <a href="#">
              <div class="p-3">
                <h6 class="text-warning">Reservation</h6>
                <div class="text-white">
                  <p>Lorem ipsum dolor sit amet.</p>
                  <p class="lead text-danger">Click Here!</p>
                </div>
              </div>
            </a>
          </div> <!-- Reservation Box Item -->

          <ul class="list-group d-none d-md-block">
            <li class="list-group-item list-group-item-success"><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a></li>
            <li class="list-group-item list-group-item-info"><a href="#"><i class="fab fa-twitter-square"></i> Twitter</a></li>
            <li class="list-group-item list-group-item-warning"><a href="#"><i class="fab fa-google-plus-square"></i> Google+</a></li>
            <li class="list-group-item list-group-item-danger"><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
          </ul> <!-- Visible on devices over medium size -->

          <div class="d-flex flex-nowrap d-block d-sm-none no-gutters">
            <div class="d-inline bg-success py-2 px-3"><a href="#"><i class="fab fa-facebook text-white"></i> <small class="text-white"> Facebook</small></a></div>
            <div class="d-inline bg-info py-2 px-3"><a href="#"><i class="fab fa-twitter text-white"></i> <small class="text-white"> Twitter</small></a></div>
            <div class="d-inline bg-warning py-2 px-3"><a href="#"><i class="fab fa-google-plus text-white"></i> <small class="text-white"> Google+</small></a></div>
            <div class="d-inline bg-danger py-2 px-3"><a href="#"><i class="fab fa-instagram text-white"></i> <small class="text-white"> Instagram</small></a></div>
          </div> <!-- Visible on small devices -->

        </div>

        <!-- FRONT SIDE ======================================================= -->

      </div>
    </div>
  </div>
</section>

<!-- FRONT SECTION ======================================================= -->


<?php
get_template_part('template-parts/acf', 'map');
get_footer();
?>
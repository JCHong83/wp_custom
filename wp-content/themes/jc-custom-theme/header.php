<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="http://via.placeholder.com/40x40?text=Logo" alt="Logo" class="rounded-circle img-fluid img-raised" width="40px" height="40px">
        <span class="ml-2">Our Company</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Intro</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Page
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Page Item 1</a>
              <a class="dropdown-item" href="#">Page Item 2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Page Item 3</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-contact">Contact</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
      </div>
    </div> <!-- container -->
  </nav>

  <!-- MODAL CONTACT ================================== -->

  <div class="modal fade" id="modal-contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Contact Us!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="lead text-center">We'd like to receive your mail</p>
          <br>
          <form>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="formInput1" placeholder="Your Name" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="email" class="form-control" id="formInput2" placeholder="Your Email" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="formInput3" placeholder="Subject" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="" id="formInput4" rows="8" class="form-control" placeholder="Write here your message"></textarea>
                </div>
              </div>
              <div class="col-md-2">
                <button class="btn btn-danger btn-lg btn-fill">Submit</button>
              </div>
            </div> <!-- row -->

            <div class="text-center my-3">
              <p class="lead">OR</p>
              <p>Would you prefer to call? <br> <i class="fa fa-phone-square"> 02-1111-1111</i></p>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- MODAL CONTACT ================================== -->
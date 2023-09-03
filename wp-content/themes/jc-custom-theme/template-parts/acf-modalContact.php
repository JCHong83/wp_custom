<?php
$modal_contact_title = get_field('modal_contact_title', 65);
$modal_contact_body_desc = get_field('modal_contact_body_desc', 65);
$modal_contact_body = get_field('modal_contact_body', 65);
$modal_contact_close_btn = get_field('modal_contact_close_btn', 65);
?>



<!-- MODAL CONTACT ================================== -->

<div class="modal fade" id="modal-contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> <?php echo $modal_contact_title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead text-center"><?php echo $modal_contact_body_desc; ?></p>
        <br>
        <?php echo $modal_contact_body; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><?php echo $modal_contact_close_btn; ?></button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL CONTACT ================================== -->
<?php
$reservationArguments = array(
  'post_type' => 'teble_reservation',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC'
);
$reservationQuery = new WP_Query($reservationArguments);
?>
<section class="reservation-section">
  <div class='background background-style' style="background: url('<?php the_field('about_section_background_image'); ?>')">
    <div class="container">
      <div class="line">
        <div class="col-2-row">
          <div class="reservation-pictures zoom">
            <img  class='img-fit' src = "<?php the_field('reservation_photo') ?>" alt ="reservation-image">
          </div>
        </div>
        <div class="col-2-row reservation-form">
          <h6><?php the_field('reservation_heading') ?></h6>
          <p><?php the_field('reservation_text') ?></p>
          <hr>
          <div class="display-flex input-container-wrapper"style="padding: 9%;">
            <?php echo do_shortcode('[contact-form-7 id="114" title="Reservation form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

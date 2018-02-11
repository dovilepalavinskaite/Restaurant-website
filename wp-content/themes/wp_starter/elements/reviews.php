<?php
$sliderArguments = array(
  'post_type' => 'slider',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC'
);
$sliderQuery = new WP_Query($sliderArguments);
?>

<?php if($sliderQuery->have_posts()): ?>
  <section class="reviews">
    <div class='background background-style' style="background-image: url('<?php the_field('slider_image'); ?>')">
      <div class="container">
        <div class="review-heading">
          <h6><?php the_field('review_heading') ?></h6>
        </div>
        <div class="line">
          <div class="wrap">
            <div class="arrow-left arrow"></div>
            <div class="slider">
            <div class="arrow-right arrow"></div>
	<?php while ($sliderQuery->have_posts()) : $sliderQuery->the_post(); ?>
    <div class="slide">
      <div class="slide-content">
        <h6><?php the_field('review_text', get_the_ID()) ?></h5>
        <img src = "<?php the_field('review_author_photo', get_the_ID()) ?>" alt ="review-image">
        <p><?php the_field('review_author_name', get_the_ID()) ?></p>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>

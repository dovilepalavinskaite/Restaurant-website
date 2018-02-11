<?php
$menuArguments = array(
  'post_type' => 'restaurant_menu',
  'posts_per_page' => -1,
);

$categoryArguments = array (
  'type'=> 'restaurant_menu',
  'hide_empty' => false
);

$menuQuery = new WP_Query ($menuArguments);
$categories = get_categories($categoryArguments);
?>

<section class="menu">
  <div class='background' style="background-image: url('<?php the_field('menu_background'); ?>')">
    <div class="container">
      <div class="line">
        <?php foreach($categories as $category) :
            if($category->name != 'Uncategorized') :?>
          <div class="col-2-row" style="padding:0px 60px;">
            <div class="line">
              <div class="meal-category">
                <h5><?php echo $category->name; ?></h5>
                  <div class="menu-ornament">
                    <img src="<?php the_field('yellow_ornament') ?>" alt="Yellow ornament">
                  </div>
                  <?php while($menuQuery->have_posts()) : $menuQuery->the_post();
                  $currentcategory = get_the_category( get_the_ID() )[0];
                  if($currentcategory->slug == $category->slug) :?>
                  <div class="meal-name">
                    <h6><?php the_field('menu_heading', get_the_ID()) ?></h6>
                    <p><?php the_field('menu_price', get_the_ID()) ?></p>
                  </div>
                  <div class="description" align="left">
                    <p><?php the_field('menu_description', get_the_ID()) ?></p>
                  </div>
                  <?php endif;endwhile;?>
                  <?php wp_reset_postdata(); ?>
                </div>
              </div>
            </div>
            <?php endif; endforeach; ?>
          </div>
        </div>
      </div>
    </section>

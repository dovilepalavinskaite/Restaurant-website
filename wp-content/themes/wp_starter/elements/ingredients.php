  <section class="ingredients">
    <div class='background background-style' style="background-image: url('<?php the_field('ingredients_background'); ?>')">
      <div class="container">
        <div class="line">
          <div class="col-2-row float-right">
            <div style="padding:30px;">
              <div class="ingredients-text-block">
                <h6><?php the_field('ingredients_heading') ?></h6>
                <p><?php the_field('ingredients_text') ?>.</p>
                <ul class="ingredients-icon">
                  <li class="zoom">
                    <img src = "<?php the_field('first_ingredients_image') ?>" alt ="First ingredients image">
                  </li>
                  <li class="zoom">
                    <img src = "<?php the_field('second_ingredients_image') ?>" alt ="Second ingredients image">
                  </li>
                  <li class="zoom">
                    <img src = "<?php the_field('third_ingredients_image') ?>" alt ="Third ingredients image">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

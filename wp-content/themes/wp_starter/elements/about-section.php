  <section class="about-section">
    <div class='background background-style' style="background: url('<?php the_field('about_section_background_image'); ?>')">
      <div class="container">
        <div class="line">
          <div class="col-2-row">
            <div class="chef">
              <h6><?php the_field('about_section_heading') ?></h6>
              <div class="about-ornament">
              <img src = "<?php the_field('yellow_ornament') ?>" alt="Yellow ornament">
              </div>
              <p><?php the_field('about_section_text', get_the_ID()) ?></p>
              <div class="chef-image">
                <img class="img-fit" src = "<?php the_field('chef_photo') ?>" alt ="Chef signature">
              </div>
            </div>
          </div>
          <div class="col-2-row">
            <div class="steak-plate zoom">
              <img class="img-fit" src = "<?php the_field('about_right_photo') ?>" alt ="Steak plate">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

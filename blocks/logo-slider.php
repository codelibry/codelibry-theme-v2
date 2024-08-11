<?php
/*
 * Block: Logo Slider
 */

$logos = get_sub_field('logo-slider');

if(!$logos || empty($logos)) {

  get_template_part('template-parts/error/invalid-block', '', [
    'title' => 'Logo Slider is empty'
  ]);

  return;
}

?>

<section class="section">
  <div class="container">
    <div class="logo-slider | js-logo-slider">
      <div class="swiper-wrapper">

        <?php foreach ($logos as $logo): ?>
          <div class="swiper-slide">
            <img <?php acf_image_attrs($logo) ?> />
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>

<?php
/*
 * Block: Hero-3
 */

$title = get_array_value($args, 'title', get_sub_field('hero__title'));
$image = get_array_value($args, 'image', get_sub_field('hero__image'));
$button_1 = get_array_value($args, 'button_1', get_sub_field('hero__button-1'));
$button_2 = get_array_value($args, 'button_2', get_sub_field('hero__button-2'));
$description = get_array_value($args, 'description', get_sub_field('hero__description'));

if(!$title) {
  return;
}

?>

<section class="hero-3 | section">
  <div class="container">
    <div class="hero-3__text">
      <?php if($title): ?>
        <div class="hero-3__title">
          <?php echo $title ?>
        </div>
      <?php endif; ?>
      
      <div class="hero-3__cta">
        <?php if($description): ?>
          <div class="hero-3__description">
            <?php echo $description ?>
          </div>
        <?php endif; ?>

        <div class="hero-3__buttons">
          <?php if($button_1): ?>
            <a class="button button--primary" <?php acf_link_attrs($button_1) ?>>
              <?php echo $button_1['title'] ?>
            </a>
          <?php endif; ?>

          <?php if($button_2): ?>
            <a class="button" <?php acf_link_attrs($button_2) ?>>
              <?php echo $button_2['title'] ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php if($image): ?>
    <div class="container container--wide">
      <div class="hero-3__banner">
        <img <?php acf_image_attrs($image) ?> />
      </div>
    </div>
  <?php endif; ?>
</section>

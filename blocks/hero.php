<?php
/*
 * Block: Hero
 */

$title = def_prop($args, 'title', get_sub_field('hero__title'));
$image = def_prop($args, 'image', get_sub_field('hero__image'));
$button_1 = def_prop($args, 'button_1', get_sub_field('hero__button-1'));
$button_2 = def_prop($args, 'button_2', get_sub_field('hero__button-2'));
$description = def_prop($args, 'description', get_sub_field('hero__description'));

if(!$title) {
  return get_template_part('template-parts/error/invalid-block', '', [
    'title' => 'Title is required'
  ]);
}

?>

<section class="hero | section">
  <div class="container container--wide">
    <div class="row align-items-center justify-content-between">
      <div class="col-7 col-md-12">
        <div class="flow">

          <?php if($title): ?>
            <div class="hero__title">
              <?php echo $title ?>
            </div>
          <?php endif; ?>
          
          <div class="hero__description">
            <?php echo $description ?>
          </div>

          <div class="hero__buttons | flex-group">
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

      <div class="col-5 col-md-12 mt-md-800">
        <?php if($image): ?>
          <img class="hero__image | border-radius-2 mx-auto" <?php acf_image_attrs($image) ?>>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

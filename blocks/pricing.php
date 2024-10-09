<?php
/*
 * Block: Pricing
 */

$title = def_prop($args, 'title', get_sub_field('pricing__title'));

$pricings = def_prop($args, 'pricings', get_sub_field('pricing__list'));

if(!$pricings) {
  return get_template_part('template-parts/error/invalid-block', '', [
    'title' => 'Pricing list is empty'
  ]);
}

?>

<section class="pricing | section">
  <div class="container | mx-auto text-center">
    <div class="container container--narrow">
      <?php if($title): ?>
        <div class="pricing__title | flow">
          <?php echo $title ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="pricing__list | row mt-36">
      <?php foreach ($pricings as $pricing): ?>
        <article class="card pricing-card | col-4 col-md-4 col-sm-4">
          <h3 class="heading-3">
            <?php echo $pricing['title'] ?>
          </h3>

          <div class="pricing-card__price | display-flex align-items-center justify-content-center mt-24">
            <p class="heading-3">
              $<?php echo $pricing['price'] . '/mo' ?>
            </p>
          </div>

          <p class="mt-16">
            <?php echo $pricing['description'] ?>
          </p>

          <a class="button button--primary | mt-32" <?php acf_link_attrs($pricing['link']) ?>>
            <?php echo $pricing['link']['title'] ?>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

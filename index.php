<?php get_header(); ?>

<main class="page" id="main">

<style>
  .box {
    background: red;
    border: black;
    height: 5rem;
  }
</style>


<section class="about-us | section bg-primary-700 clr-neutral-000">
  <div class="container">
    <div class="about-us__row | row align-items-center justify-content-between">
      <div class="about-us__content | flow col-6">
        <h2 class="heading-2 clr-neutral-000">About us</h2>
        <p>BrandBoosters was founded with the mission of <strong>helping businesses of all sizes</strong> achieve
          their marketing
          goals by working closely with each client to <strong>develop a customized strategy that delivers
            results</strong>.</p>
        <a href="" class="button button--accent">Learn more about us</a>
      </div>
      <div class="full-height-image position--right col-6" style="--space-top: 2rem">
        <img class="bg-primary-200 round-top width-full" <?php img_src('image.png') ?> alt="">
      </div>
    </div>
  </div>
</section>

</main>


<?php get_footer(); ?>

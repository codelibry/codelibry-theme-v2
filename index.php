<?php get_header(); ?>

<main class="page" id="main">

<style>
  .box {
    background: red;
    border: black;
    height: 5rem;
  }
</style>

<section class="hero | section">
  <div class="container container--wide">
    <div class="row align-items-center justify-content-between">
      <div class="col-7 col-md-12">
        <div class="flow">
          <h1 class="heading-1">
            Welcome to
            <span class="clr-accent-400">BrandBoosters</span>
          </h1>
          <p>Dedicated to boosting your brand’s visibility and success that uses the latest strategies & techniques to
            help you reach your target audience and achieve your goals.
          </p>
          <div class="flex-group">
            <a href="" class="button button--primary">Join now</a>
            <a href="" class="button">Learn more</a>
          </div>
        </div>
      </div>

      <div class="col-5 col-md-12 mt-md-800">
        <img class="hero__image | border-radius-2 mx-auto" <?php img_src('image.png') ?> alt="">
      </div>
    </div>
  </div>
</section>

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

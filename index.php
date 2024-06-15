<?php get_header(); ?>

<main class="page">

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

</main>


<?php get_footer(); ?>

<?php get_header(); ?>

<main class="page">

<style>
  .box {
    background: red;
    border: black;
    height: 5rem;
  }
</style>

<section class="section">
  <div class="container">
    <div class="row" >
      <div class="col-3">
        <div class="box"></div>
      </div>
      <div class="col-3">
        <div class="box"></div>
      </div>
      <div class="col-3-offset-1">
        <div class="box"></div>
      </div>
    </div>
  </div>
</section>

</main>


<?php get_footer(); ?>

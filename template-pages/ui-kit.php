<?php
/*
Template Name: Ui Kit
*/
?>

<?php get_header(); ?>

<main class="ui-kit">

  <div class="container">

    <?php get_template_part('/template-parts/ui-kit/colors'); ?>

    <?php get_template_part('/template-parts/ui-kit/typography'); ?>

    <?php get_template_part('/template-parts/ui-kit/buttons'); ?>

    <?php get_template_part('/template-parts/ui-kit/cards'); ?>

    <?php get_template_part('/template-parts/ui-kit/accordions'); ?>

  </div>
</main>

<?php get_footer(); ?>

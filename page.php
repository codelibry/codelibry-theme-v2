<?php
/*
 * Default Page Template
 */
?>

<?php get_header(); ?>

<main id="main" class="page">

<?php
  if (have_rows('flexible-blocks')) :
    while (have_rows('flexible-blocks')) : the_row();
      get_template_part('blocks/' . get_row_layout());
    endwhile;
  endif;
?>

</main>

<?php get_footer(); ?>

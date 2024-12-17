<?php

function render_heading_block($label = false, $title = false, $titleTag = 'h2', $descr = false, $mod = '')
{

?>
  <div class="heading-block <?php echo esc_html($mod); ?>">
    <?php if (!empty($label)) { ?>
      <div class="heading-block__label"><?php echo esc_html($label); ?></div>
    <?php }; ?>

    <?php if (!empty($title)) { ?>
      <<?php echo $titleTag;?>  class="heading-block__title">
        <?php echo esc_html($title); ?>
      </<?php echo $titleTag;?>>
    <?php }; ?>

    <?php if (!empty($descr)) { ?>
      <div class="heading-block__descr"><?php echo $descr; ?></div>
    <?php }; ?>
  </div>
<?php
}
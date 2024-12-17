<?php
/*
 * Component: Link
 */

$link = def_prop($args, 'link');

if(!$link) return;

$title = def_prop($link, 'title', __('LINK', 'pp'));
$target = def_prop($link, 'target', '_self');
$url = def_prop($link, 'url', '#');

$icon = def_prop($args, 'icon');

$additional_classes = def_prop($args, 'additional_classes', '');

?>

<a 
  href="<?php echo $url ?>" 
  target="<?php echo $target ?>" 
  class="link <?php echo $additional_classes ?>"
>
  <?php 
    if($icon){
      echo $icon;
    }
  ?>

  <?php echo $title ?>

</a>

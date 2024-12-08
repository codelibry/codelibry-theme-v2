<?php

function is_svg_icon($url){
  return wp_check_filetype($url)['ext'] === 'svg';
}

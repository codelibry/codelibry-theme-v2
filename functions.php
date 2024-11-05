<?php

require get_template_directory().'/inc/theme-setup.php';
require get_template_directory().'/inc/theme-support.php';
require get_template_directory().'/inc/theme-enqueue.php';
require get_template_directory().'/inc/theme-customizer.php';

require get_template_directory().'/inc/custom-post-types.php';
require get_template_directory().'/inc/custom-taxonomies.php';

require get_template_directory().'/inc/acf.php';
require get_template_directory().'/inc/theme-functions.php';

// Helpers
require get_template_directory().'/inc/helpers/acf-image-src.php';
require get_template_directory().'/inc/helpers/acf-image-attrs.php';
require get_template_directory().'/inc/helpers/acf-link-attrs.php';
require get_template_directory().'/inc/helpers/get-array-value.php';
require get_template_directory().'/inc/helpers/get-inline-svg.php';
require get_template_directory().'/inc/helpers/pretty-log.php';
require get_template_directory().'/inc/helpers/excerpt.php';
require get_template_directory().'/inc/helpers/get-img-src.php';
require get_template_directory().'/inc/helpers/img-src.php';

<?php
/*
=====================
    Theme functions
=====================
*/


/*
    =====================
        Limit excerpt length function
    =====================
*/

function excerpt($limit, $post_id = -1)
{
    if (-1 === $post_id) :
        $excerpt = explode(' ', get_the_excerpt(), $limit);
    else :
        $excerpt = explode(' ', get_the_excerpt($post_id), $limit);
    endif;
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(' ', $excerpt) . '...';
    } else {
        $excerpt = implode(' ', $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}

/*
    =====================
        Don't scale down large images
    =====================
*/

add_filter('big_image_size_threshold', '__return_false');

/*
    =====================
        Header nav menu
    =====================
*/
// Nav arrows
function filter_walker_nav_menu_start_el($item_output, $item, $depth, $args)
{
    if ((in_array('menu-item-has-children', $item->classes) || ('Events' === $item->title))) {
        return '<div class="menu-item__parent">' . $item_output . '</div>';
    }
    
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'filter_walker_nav_menu_start_el', 10, 4);


/*
    =====================
        Move Yoast to bottom
    =====================
*/
function yoasttobottom()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'yoasttobottom');


/*
    =====================
        Remove Gutenberg Block Library CSS from loading on the frontend
    =====================
*/
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');

/*
    =====================
        Get width and height from SVG files
    =====================
*/

function fix_wp_get_attachment_image_svg($image, $attachment_id, $size, $icon)
{
    if (is_array($image) && preg_match('/\.svg$/i', $image[0]) && $image[1] <= 1) {
        if (is_array($size)) {
            $image[1] = $size[0];
            $image[2] = $size[1];
        } elseif (($xml = simplexml_load_file($image[0])) !== false) {
            $attr = $xml->attributes();
            $viewbox = explode(' ', $attr->viewBox);
            $image[1] = isset($attr->width) && preg_match('/\d+/', $attr->width, $value) ? (int)$value[0] : (count($viewbox) == 4 ? (int)$viewbox[2] : null);
            $image[2] = isset($attr->height) && preg_match('/\d+/', $attr->height, $value) ? (int)$value[0] : (count($viewbox) == 4 ? (int)$viewbox[3] : null);
        } else {
            $image[1] = $image[2] = null;
        }
    }
    return $image;
}

add_filter('wp_get_attachment_image_src', 'fix_wp_get_attachment_image_svg', 10, 4);


/*
    =====================
        Get SVG file content
    =====================
*/
function get_inline_svg($name) {
    if ($name) {
        $file_path = get_template_directory() . '/assets/icons/' . $name;
        if (file_exists($file_path)) {
            return file_get_contents($file_path);
        }
    }
    return '';
}

/**
 *
 * WP Query by title
 *
 */

function posts_by_title($where, $query)
{
    global $wpdb;
    
    $title = $query->get('title_equals');
    
    if ($title) {
        $where .= " AND $wpdb->posts.post_title = '$title'";
    }
    
    return $where;
}

add_filter('posts_where', 'posts_by_title', 10, 2);


function get_img_src(string $image_name): string {
  return get_template_directory_uri() . '/assets/images/' . $image_name;
}


function img_src(string $image_name): void {
  echo 'src="' . get_img_src($image_name) . '"';
}


function acf_image_src($image_id, $max_width = "100%", $image_size = "full"){

  // check the image ID is not blank
  if($image_id != '') {

    // set the default src image size
    $image_src = wp_get_attachment_image_url( $image_id, $image_size );

    // set the srcset with various image sizes
    $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

    // generate the markup for the responsive image
    return 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

  }
}


function acf_image_attrs($image) {
  if(is_int($image)){
    echo acf_image_src($image) . ' alt="' . get_the_title($image) . '"';
  } else {
    $url = $image['url'];
    $alt = $image['alt'] ? $image['alt'] : $image['title'];
    echo 'src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '"';
  }
}


function acf_link_attrs(array $link) {
  $url = $link['url'];
  $target = $link['target'] ? $link['target'] : '_self';
  echo 'href="' . esc_url($url) . '" target="' . esc_attr($target) . '"';
}


function def_prop($array, $key, $default = false)
{
  return isset($array[$key]) && !empty($array[$key])
    ? $array[$key]
    : $default;
}

function my_log($value)
{
  echo "<pre>";
  print_r($value);
  wp_die();
}


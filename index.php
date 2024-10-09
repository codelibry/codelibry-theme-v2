<?php get_header(); ?>

<main class="page" id="main">

<?php

  // Hero
  get_template_part('blocks/hero', null, [
    'title' => '<h1>Hero Title</h1>',
    'image' => [
      'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
      'title' => 'Codelibry Logo',
      'alt' => 'codelibry-logo',
    ],
    'button_1' => [
      'url' => '#contact-us',
      'target' => '_self',
      'title' => 'Contact Us',
    ],
    'button_2' => [
      'url' => '#learn-more',
      'target' => '_self',
      'title' => 'Learn More',
    ],
    'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'
  ]);

  // Logo Slider
  get_template_part('blocks/logo-slider', null, [
  'logo-slider' => [
      [
        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
        'title' => 'Codelibry Logo',
        'alt' => 'codelibry-logo',
      ],
      [
        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
        'title' => 'Codelibry Logo',
        'alt' => 'codelibry-logo',
      ],
      [
        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
        'title' => 'Codelibry Logo',
        'alt' => 'codelibry-logo',
      ],
      [
        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
        'title' => 'Codelibry Logo',
        'alt' => 'codelibry-logo',
      ],
      [
        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
        'title' => 'Codelibry Logo',
        'alt' => 'codelibry-logo',
      ],
      [
        'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7P-cCaFwyYJmut32fDmmc6Btv8zWzc3nyMg&s',
        'title' => 'Codelibry Logo',
        'alt' => 'codelibry-logo',
      ],
    ]
  ]);

?>

</main>


<?php get_footer(); ?>

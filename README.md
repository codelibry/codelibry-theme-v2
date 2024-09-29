# Codelibry Starter Template (SASS Folder)

The Sass directory is organized into several subdirectories, 
each serving a specific purpose in the development of your WordPress project. 

- 📁`sass` 
    - 📁`abstracts`     - contains Sass tools like variables and mixins.
    - 📁`base`          - holds foundational styles and resets.
    - 📁`blocks`        - styles for specific website sections.
    - 📁`components`    - ui-component styles (e.g., buttons, cards).
    - 📁`layout`        - layout-related styles (e.g., grids, headers).
    - 📁`pages`         - page-specific styles.
    - 📁`utilities`     - utility classes for margins, paddings, etc.
    - 📁`vendor`        - third-party CSS styles.
    - 📄`main.sass`     - main entry point for compiling Sass files.



## `abstracts/_breakpoints.scss`

This file defines the `$breakpoints` map used for responsive design in your project. 
It specifies the following breakpoints:

```scss
$breakpoints: (
  small: 30em,
  medium: 45em,
  large: 65em,
);
```


## `abstracts/_colors.scss`

1. Here we define our *global* color tokens inside private sass constants.
To make them private just add prefix `-`: Instead of $clr-white => $-clr-white.
This is how we can be sure, these constants won't be used in our css directly.
These constants should only be used inside *contextual* color tokens (see below).

```scss
$-clr-white: rgb(255, 255, 255);
$-clr-gray-100: rgb(242, 242, 242);
$-clr-gray-200: rgb(210, 210, 210);
$-clr-gray-300: rgb(179, 179, 179);
$-clr-gray-400: rgb(153, 153, 153);
$-clr-gray-500: rgb(128, 128, 128);
$-clr-gray-600: rgb(102, 102, 102);
$-clr-gray-700: rgb(77, 77, 77);
$-clr-gray-800: rgb(45, 45, 45);
$-clr-gray-900: rgb(19, 19, 19);
$-clr-black: rgb(0, 0, 0);
...
```

2. Then we pass our *global* colors inside our scss maps.
*neutral* means colors that are used for backgrounds or text color. These colors unlikely will change in the future.
*primary* means the main color. Usualy it is applied to the buttons, links or other interactive elements.
*accent* means the color which is applied to the important ui elements. Sometime, *primary* color is enough.
However, you are not limited to the following logic of our color naming. It is up to you :)

```scss
$light: (
  "neutral": ( ... ),
  "primary": ( ... ),
  "accent": ( ... ),
);

$dark: (
  "neutral": ( ... ),
  "primary": ( ... ),
  "accent": ( ... ),
);
```

These maps: `$ligth`, `$dark` are used to generate css color variables in our `:root` element.
As you can see, we generate a bunch of variables that have different values depending on the color theme.

```scss
//base/_root.scss

:root {
  @each $color, $shade-map in $active-theme {
    @each $shade, $value in $shade-map {
      --clr-#{$color}-#{$shade}: #{$value};
    }
  }

  @if ($enable-media-query-dark-mode) {
    @media (prefers-color-scheme: dark) {
      @each $color, $shade-map in $dark {
        @each $shade, $value in $shade-map {
          --clr-#{$color}-#{$shade}: #{$value};
        }
      }
    }
  }

```

For easy use, we pass our generated css variables inside scss constants. 
It is just more convinient to write: `$color-neutral-000` than `var(--clr-neutral-000)`...

```scss
$color-neutral-000: var(--clr-neutral-000);
$color-primary-100: var(--clr-primary-100);
$color-accent-100: var(--clr-accent-100);
```

In summary, global colors are private constants that cannot be used directly in CSS but ensure a consistent design palette. 
Contextual colors are CSS variables that derive their values from global colors, allowing for dynamic theming and greater flexibility in styling.


## `abstracts/_functions.scss`

This file contains utility functions for converting pixel values to `rem` and `em` units.

```scss
$base-font-size: 16;

@function rem($px) {
  @return ($px / $base-font-size) + rem;
}

@function em($px) {
  @return ($px / $base-font-size) + em;
}
```

---
layout: docs
title: Base
description: An overview of Turret and basic styling behaviours including color palettes, text colors, breakpoints and media queries. Includes base styles for body, images, typography, basic generic font styles, and responsive text scaling behaviours.
permalink: /docs/base/
---

## Global

### Border Radius

Default border-radius definitions for buttons, inputs etc.

```scss
// Border Radius
@border-radius: 2px;
```

### Z-Index

Z-index utility definitions for general use.

```scss
// Z-Index
@z-index-high: 999;
@z-index-medium: 99;
@z-index-low: 9;
```

### Animation

Default animation speeds.

```scss
// Animation
@animation-fast: 0.5s;
@animation-medium: 1s;
@animation-slow: 2s;
```

### Transition

Default transition speeds.


```scss
// Transition
@transition-fast: 0.2s;
@transition-medium: 0.3s;
@transition-slow: 0.5s;
```

### Height

Height sizes for buttons, inputs, input-groups, selects etc.

```scss
// Height
@height-xlarge: 65px;
@height-large: 50px;
@height-medium: 40px;
@height-small: 30px;
@height-xsmall: 20px;
```

### Margin

Margin sizes (xlarge, large, medium, small, xsmall) for use globally, including utility classes.

```scss
// Margin
@margin-xlarge: 100px;
@margin-large: 65px;
@margin-medium: 50px;
@margin-small: 35px;
@margin-xsmall: 20px;
```

### Padding



```scss
// Padding
@padding-xlarge: 100px;
@padding-large: 65px;
@padding-medium: 50px;
@padding-small: 35px;
@padding-xsmall: 20px;
```

### Max Width

Max Width sizes (xlarge, large, medium, small, xsmall) for use globally, including utility classes.

```scss
// Max Width
@max-width-xlarge: 1280px;
@max-width-large: 1024px;
@max-width-medium: 800px;
@max-width-small: 600px;
@max-width-xsmall: 450px;
```

## Body

Some top level definitions for general styles on the `<body>` tag.

```scss
// Body
@body-font-family: @regular-font-family;
@body-font-weight: @regular-font-weight; 
@body-color: @dark;
@body-line-height: @line-height-medium;
@body-letter-spacing: 0.02rem;
@body-background: @white;
```

## Colors

### Shades

<div class="swatches">
  <div class="swatch background-white"><small>White</small></div>
  <div class="swatch background-light-grey"><small>Light Grey</small></div>
  <div class="swatch background-grey"><small>Grey</small></div>
  <div class="swatch background-dark-grey"><small>Dark Grey</small></div>
  <div class="swatch background-black"><small>Black</small></div>
</div>

### Indicators

<div class="swatches">
  <div class="swatch background-info"><small>Info</small></div>
  <div class="swatch background-error"><small>Error</small></div>
  <div class="swatch background-warning"><small>Warning</small></div>
  <div class="swatch background-success"><small>Success</small></div>
</div>

### Palette

<div class="swatches">
  <div class="swatch background-light"><small>Light</small></div>
  <div class="swatch background-primary"><small>Primary</small></div>
  <div class="swatch background-secondary"><small>Secondary</small></div>
  <div class="swatch background-tertiary"><small>Tertiary</small></div>
  <div class="swatch background-dark"><small>Dark</small></div>
</div>

```scss
//Shades
@white: #FFFFFF;
@black: #000000;
@light-grey: #CCD1D9;
@grey: #656D78;
@dark-grey: #434A54;

//Indicators
@info: #149CFD;
@error: #E01A2E;
@warning: #FFC200;
@success: #05BE55;

//Palette
@light: #E3E7EC;
@dark: @dark-grey;
@primary: #05BED5;
@secondary: #8D48AB;
@tertiary: #B2347E;

//Utility
@inverse: @dark;
```

## Font

Some top level definitions for the base font-size styles on the `<html>` tag, with breakpoints.

```scss
// Fonts
@font-path: '../fonts';
@sans-serif-font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
@serif-font-family: Georgia, "Times New Roman", Times, serif;
@monospace-font-family: Monaco, Menlo, Consolas, "Courier New", monospace;

// Generic Font Families
@thin-font-family: @sans-serif-font-family;
@regular-font-family: @sans-serif-font-family;
@medium-font-family: @sans-serif-font-family;
@semibold-font-family: @sans-serif-font-family;
@bold-font-family: @sans-serif-font-family;

// Generic Font Weights
@thin-font-weight: 300;
@regular-font-weight: 400;
@medium-font-weight: 500;
@semibold-font-weight: 600;
@bold-font-weight: 700;

// Base Font Size
@base-font-size: 10px;
@base-font-size-xlarge: @base-font-size;
@base-font-size-large: @base-font-size;
@base-font-size-medium: @base-font-size;
@base-font-size-small: @base-font-size;
@base-font-size-xsmall: @base-font-size;

// Font Sizes
@font-size-xlarge: 2.4;
@font-size-large: 1.8;
@font-size-medium: 1.6;
@font-size-small: 1.3;
@font-size-xsmall: 1;

// Line height
@line-height-xlarge: 1.75;
@line-height-large: 1.5;
@line-height-medium: 1.35;
@line-height-small: 1.2;
@line-height-xsmall: 1;
```

### Font Families

<p class="sans-serif-font">Sans Serif Font</p>
<p class="serif-font">Serif Font</p>
<p class="monospace-font">Monospace Font</p>
<p class="thin-font">Thin Font</p>
<p class="regular-font">Regular Font</p>
<p class="medium-font">Medium Font</p>
<p class="semibold-font">Semibold Font</p>
<p class="bold-font">Bold Font</p>

### Font Sizes

<p class="font-size-xlarge">Font Size Extra Large</p>
<p class="font-size-large">Font Size Large</p>
<p class="font-size-medium">Font Size Medium</p>
<p class="font-size-small">Font Size Small</p>
<p class="font-size-xsmall">Font Size Extra Small</p>

## Link

```scss
// Link
@link-color: @primary;
@link-text-decoration: none;

// Link Hover
@link-hover-color: @dark;
@link-hover-decoration: underline;
```

<p><a href="index.html">Link</a></p>

```html
<a href="">...</a>
```

## Image

### Responsive Image

Images in Turret can be made responsive-friendly via the addition of the `.responsive` class. This applies `max-width: 100%; and height: auto;` to the image so that it scales nicely to the parent element.

<img src="/assets/images/photo.svg" class="responsive">

```html
<img src="..." class="responsive">
```

### Image Styles

<img src="/assets/images/image.svg" class="rounded">

```scss
@image-rounded-border-radius: 8px;
```

```html
<img src="..." class="responsive">
```

<img src="/assets/images/image.svg" class="circle">

```html
<img src="..." class="circle">
```

## Breakpoints

```scss
// Screen Sizes
@screen-xsmall: 480px;
@screen-xsmall-max: (@screen-small-min - 1);
@screen-small: 768px;
@screen-small-min: @screen-small;
@screen-small-max: (@screen-medium-min - 1);
@screen-medium: 1024px;
@screen-medium-min: @screen-medium;
@screen-medium-max: (@screen-large-min - 1);
@screen-large: 1280px;
@screen-large-min: @screen-large;
@screen-large-max: (@screen-xlarge-min - 1);
@screen-xlarge: 1680px;
@screen-xlarge-min: @screen-xlarge;
```

{% include tables/breakpoints.html %}

## Media Queries

```scss
// Orientation
@portrait: ~"(orientation: portrait)";
@landscape: ~"(orientation: landscape)";

// Breakpoints
@xsmall: ~"(max-width: @{screen-xsmall-max})";
@small: ~"(min-width: @{screen-small-min}) and (max-width: @{screen-small-max})";
@small-up: ~"(min-width: @{screen-small-min})";
@small-down: ~"(max-width: @{screen-small-max})";
@medium: ~"(min-width: @{screen-medium-min}) and (max-width: @{screen-medium-max})";
@medium-up: ~"(min-width: @{screen-medium-min})";
@medium-down: ~"(max-width: @{screen-medium-max})";
@large: ~"(min-width: @{screen-large-min}) and (max-width: @{screen-large-max})";
@large-up: ~"(min-width: @{screen-large-min})";
@large-down: ~"(max-width: @{screen-large-max})";
@xlarge: ~"(min-width: @{screen-xlarge})";

// Retina
@retina: ~"only screen and (-webkit-min-device-pixel-ratio: 1.5)",
~"only screen and (min--moz-device-pixel-ratio: 1.5)",
~"only screen and (-o-min-device-pixel-ratio: 3/2)",
~"only screen and (min-device-pixel-ratio: 1.5)";

// IE Media Queries
@ie6-7: screen\9;
@ie8: \0screen;
@oldIE: ~"@{ie8}\,@{ie6-7}";
@ie9-10: ~"screen and (min-width:0\0)";
```

## Print

By default Turret's print styles are formatted for `A4` page size with a margin of `1.5cm 2cm`. Print styles include making text `@black`, and removing backgrounds from elements by default. Links are displayed next to anchors using `:after` pseudo content.

```scss
// Print Page
@print-page-size: A4;
@print-page-margin: 1.5cm 2cm;
```

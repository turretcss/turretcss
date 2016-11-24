---
layout: docs
title: Base
page_title: Base - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of Turret and basic styling behaviours including color palettes, text colors, breakpoints and media queries. Includes base styles for body, images, typography, basic generic font styles, and responsive text scaling behaviours.
permalink: /docs/base/
---

## Global

### Border Radius

Default border-radius definitions for buttons, inputs etc.

```css
--border-radius: 2px;
```

### Z-Index

Z-index utility definitions for general use.

```css
--z-index-high: 999;
--z-index-m: 99;
--z-index-low: 9;
```

### Speed

Default transition/animation speeds.

```css
--speed-fast: 200ms;
--speed-m: 300ms;
--speed-slow: 500ms;
```

### Height

Height sizes for buttons, inputs, and selects.

```css
--height-xl: 6.0rem;
--height-l: 5.0rem;
--height-m: 4.4rem;
--height-s: 3.6rem;
--height-xs: 3.0rem;
```

### Space

Space sizes (xl, l, m, s, xs) for use globally, including utility classes.

```css
--space-xl: 8.0rem;
--space-l: 5.0rem;
--space-m: 3.5rem;
--space-s: 2.0rem;
--space-xs: 1.5rem;
```

### Margin

Margin sizes (xl, l, m, s, xs) for use globally, including utility classes.

```css
// Margin
@margin-xl: 8.0rem;
@margin-l: 5.0rem;
@margin-m: 3.5rem;
@margin-s: 2.0rem;
@margin-xs: 1.5rem;
```

### Padding

Padding sizes (xl, l, m, s, xs) for use globally, including utility classes.

```css
// Padding
@padding-xl: 8.0rem;
@padding-l: 5.0rem;
@padding-m: 3.5rem;
@padding-s: 2.0rem;
@padding-xs: 1.5rem;
```

### Max Width

Max Width sizes (xl, l, m, s, xs) for use globally, including utility classes.

```css
// Max Width
@max-width-xl: 128rem;
@max-width-l: 100rem;
@max-width-m: 80rem;
@max-width-s: 60rem;
@max-width-xs: 48rem;
```

## Root

Sets @root-size on the `:root` element with responsive breakpoints.

```css
// Root Size
@root-size: 10px;
@root-size-xl: @root-size;
@root-size-l: @root-size;
@root-size-m: @root-size;
@root-size-s: @root-size - 1;
@root-size-xs: @root-size - 1;
```

## Body

Some top level definitions for general styles on the `<body>` tag.

```css
// Body
@body-font-family: @regular-font-family;
@body-font-weight: @regular-font-weight; 
@body-color: @grey;
@body-line-height: @line-height-m;
@body-letter-spacing: 0.03rem;
@body-background: @white;
```

## Colors

<div class="palette">
  <div class="swatch color-black background-white">White</div>
  <div class="swatch color-white background-black">Black</div>
</div>

### Shades

<div class="palettes">
  <div class="palette">
    <div class="swatch color-dark background-light">Light</div>
    <div class="swatch color-dark background-light-100">Light 100</div>
    <div class="swatch color-dark background-light-200">Light 200</div>
    <div class="swatch color-dark background-light-300">Light 300</div>
    <div class="swatch color-dark background-light-400">Light 400</div>
    <div class="swatch color-dark background-light-500">Light 500</div>
    <div class="swatch color-dark background-light-600">Light 600</div>
    <div class="swatch color-dark background-light-700">Light 700</div>
    <div class="swatch color-dark background-light-800">Light 800</div>
    <div class="swatch color-dark background-light-900">Light 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-grey">Grey</div>
    <div class="swatch color-white background-grey-100">Grey 100</div>
    <div class="swatch color-white background-grey-200">Grey 200</div>
    <div class="swatch color-white background-grey-300">Grey 300</div>
    <div class="swatch color-white background-grey-400">Grey 400</div>
    <div class="swatch color-white background-grey-500">Grey 500</div>
    <div class="swatch color-white background-grey-600">Grey 600</div>
    <div class="swatch color-white background-grey-700">Grey 700</div>
    <div class="swatch color-white background-grey-800">Grey 800</div>
    <div class="swatch color-white background-grey-900">Grey 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-dark">Dark</div>
    <div class="swatch color-white background-dark-100">Dark 100</div>
    <div class="swatch color-white background-dark-200">Dark 200</div>
    <div class="swatch color-white background-dark-300">Dark 300</div>
    <div class="swatch color-white background-dark-400">Dark 400</div>
    <div class="swatch color-white background-dark-500">Dark 500</div>
    <div class="swatch color-white background-dark-600">Dark 600</div>
    <div class="swatch color-white background-dark-700">Dark 700</div>
    <div class="swatch color-white background-dark-800">Dark 800</div>
    <div class="swatch color-white background-dark-900">Dark 900</div>
  </div>
</div>

### Palettes
  
<div class="palettes">
  <div class="palette">
    <div class="swatch color-white background-primary">Primary</div>
    <div class="swatch color-white background-primary-100">Primary 100</div>
    <div class="swatch color-white background-primary-200">Primary 200</div>
    <div class="swatch color-white background-primary-300">Primary 300</div>
    <div class="swatch color-white background-primary-400">Primary 400</div>
    <div class="swatch color-white background-primary-500">Primary 500</div>
    <div class="swatch color-white background-primary-600">Primary 600</div>
    <div class="swatch color-white background-primary-700">Primary 700</div>
    <div class="swatch color-white background-primary-800">Primary 800</div>
    <div class="swatch color-white background-primary-900">Primary 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-secondary">Secondary</div>
    <div class="swatch color-white background-secondary-100">Secondary 100</div>
    <div class="swatch color-white background-secondary-200">Secondary 200</div>
    <div class="swatch color-white background-secondary-300">Secondary 300</div>
    <div class="swatch color-white background-secondary-400">Secondary 400</div>
    <div class="swatch color-white background-secondary-500">Secondary 500</div>
    <div class="swatch color-white background-secondary-600">Secondary 600</div>
    <div class="swatch color-white background-secondary-700">Secondary 700</div>
    <div class="swatch color-white background-secondary-800">Secondary 800</div>
    <div class="swatch color-white background-secondary-900">Secondary 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-tertiary">Tertiary</div>
    <div class="swatch color-white background-tertiary-100">Tertiary 100</div>
    <div class="swatch color-white background-tertiary-200">Tertiary 200</div>
    <div class="swatch color-white background-tertiary-300">Tertiary 300</div>
    <div class="swatch color-white background-tertiary-400">Tertiary 400</div>
    <div class="swatch color-white background-tertiary-500">Tertiary 500</div>
    <div class="swatch color-white background-tertiary-600">Tertiary 600</div>
    <div class="swatch color-white background-tertiary-700">Tertiary 700</div>
    <div class="swatch color-white background-tertiary-800">Tertiary 800</div>
    <div class="swatch color-white background-tertiary-900">Tertiary 900</div>
  </div>
</div>

### Indicators

<div class="palettes">
  <div class="palette">
    <div class="swatch color-white background-info">Info</div>
    <div class="swatch color-white background-info-100">Info 100</div>
    <div class="swatch color-white background-info-200">Info 200</div>
    <div class="swatch color-white background-info-300">Info 300</div>
    <div class="swatch color-white background-info-400">Info 400</div>
    <div class="swatch color-white background-info-500">Info 500</div>
    <div class="swatch color-white background-info-600">Info 600</div>
    <div class="swatch color-white background-info-700">Info 700</div>
    <div class="swatch color-white background-info-800">Info 800</div>
    <div class="swatch color-white background-info-900">Info 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-error">Error</div>
    <div class="swatch color-white background-error-100">Error 100</div>
    <div class="swatch color-white background-error-200">Error 200</div>
    <div class="swatch color-white background-error-300">Error 300</div>
    <div class="swatch color-white background-error-400">Error 400</div>
    <div class="swatch color-white background-error-500">Error 500</div>
    <div class="swatch color-white background-error-600">Error 600</div>
    <div class="swatch color-white background-error-700">Error 700</div>
    <div class="swatch color-white background-error-800">Error 800</div>
    <div class="swatch color-white background-error-900">Error 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-warning">Warning</div>
    <div class="swatch color-white background-warning-100">Warning 100</div>
    <div class="swatch color-white background-warning-200">Warning 200</div>
    <div class="swatch color-white background-warning-300">Warning 300</div>
    <div class="swatch color-white background-warning-400">Warning 400</div>
    <div class="swatch color-white background-warning-500">Warning 500</div>
    <div class="swatch color-white background-warning-600">Warning 600</div>
    <div class="swatch color-white background-warning-700">Warning 700</div>
    <div class="swatch color-white background-warning-800">Warning 800</div>
    <div class="swatch color-white background-warning-900">Warning 900</div>
  </div>
  <div class="palette">
    <div class="swatch color-white background-success">Success</div>
    <div class="swatch color-white background-success-100">Success 100</div>
    <div class="swatch color-white background-success-200">Success 200</div>
    <div class="swatch color-white background-success-300">Success 300</div>
    <div class="swatch color-white background-success-400">Success 400</div>
    <div class="swatch color-white background-success-500">Success 500</div>
    <div class="swatch color-white background-success-600">Success 600</div>
    <div class="swatch color-white background-success-700">Success 700</div>
    <div class="swatch color-white background-success-800">Success 800</div>
    <div class="swatch color-white background-success-900">Success 900</div>
  </div>
</div>

```css
//Shades
@white: #FFFFFF;
@black: #000000;
@light-grey: #DDD;
@grey: #555;
@dark-grey: #333;

//Indicators
@info: #1E90FF;
@error: #D91E18;
@warning: #FF4500;
@success: #00AA00;

//Palette
@light: #FAFAFC;
@dark: #222;
@primary: #3455DB;
@secondary: #663399;
@tertiary: #8B008B;

//Utility
@inverse: @dark;
```

## Font

Some top level definitions for the base font-size styles on the `<html>` tag, with breakpoints.

```css
// Fonts
@font-path: '../fonts';
@sans-serif-font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
@serif-font-family: Georgia, "Times New Roman", Times, serif;
@monospace-font-family: Monaco, Menlo, Consolas, "Courier New", monospace;

// Generic Font Families
@thin-font-family: @sans-serif-font-family;
@regular-font-family: @sans-serif-font-family;
@m-font-family: @sans-serif-font-family;
@semibold-font-family: @sans-serif-font-family;
@bold-font-family: @sans-serif-font-family;

// Generic Font Weights
@thin-font-weight: 300;
@regular-font-weight: 400;
@m-font-weight: 500;
@semibold-font-weight: 600;
@bold-font-weight: 700;

// Font Sizes
@font-size-xl: 2.0;
@font-size-l: 1.8;
@font-size-m: 1.6;
@font-size-s: 1.4;
@font-size-xs: 1.2;

// Line height
@line-height-xl: 1.8;
@line-height-l: 1.65;
@line-height-m: 1.5;
@line-height-s: 1.35;
@line-height-xs: 1.2;
```

### Font Families

<p class="sans-serif-font">Sans Serif Font</p>
<p class="serif-font">Serif Font</p>
<p class="monospace-font">Monospace Font</p>
<p class="thin-font">Thin Font</p>
<p class="regular-font">Regular Font</p>
<p class="m-font">Medium Font</p>
<p class="semibold-font">Semibold Font</p>
<p class="bold-font">Bold Font</p>

### Font Sizes

<p class="font-size-xl">Font Size Extra Large</p>
<p class="font-size-l">Font Size Large</p>
<p class="font-size-m">Font Size Medium</p>
<p class="font-size-s">Font Size Small</p>
<p class="font-size-xs">Font Size Extra Small</p>

## Link

```css
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

<img src="{{ site.baseurl }}/assets/images/photo.svg" class="responsive">

```html
<img src="..." class="responsive">
```

### Image Styles

<img src="{{ site.baseurl }}/assets/images/image.svg" class="rounded">

```css
@image-rounded-border-radius: 8px;
```

```html
<img src="..." class="responsive">
```

<img src="{{ site.baseurl }}/assets/images/image.svg" class="circle">

```html
<img src="..." class="circle">
```

## Breakpoints

```css
// Screen Sizes
@screen-xs: 480px;
@screen-xs-max: (@screen-s-min - 1);
@screen-s: 768px;
@screen-s-min: @screen-s;
@screen-s-max: (@screen-m-min - 1);
@screen-m: 1024px;
@screen-m-min: @screen-m;
@screen-m-max: (@screen-l-min - 1);
@screen-l: 1280px;
@screen-l-min: @screen-l;
@screen-l-max: (@screen-xl-min - 1);
@screen-xl: 1680px;
@screen-xl-min: @screen-xl;
```

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%">Breakpoint</th>
        <th width="25%">Device</th>
        <th width="25%">Min Width</th>
        <th width="25%">Max Width</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>xs</td>
        <td>Phone</td>
        <td class="is-null"></td>
        <td>767px</td>
      </tr>
      <tr>
        <td>s</td>
        <td>Tablet</td>
        <td>768px</td>
        <td>1023px</td>
      </tr>
      <tr>
        <td>m</td>
        <td>Laptop</td>
        <td>1024px</td>
        <td>1279px</td>
      </tr>
      <tr>
        <td>l</td>
        <td>Desktop</td>
        <td>1280px</td>
        <td>1679px</td>
      </tr>
      <tr>
        <td>xl</td>
        <td>Large Screen</td>
        <td>1680px</td>
        <td class="is-null"></td>
      </tr>
    </tbody>
  </table>
</div>

## Media Queries

```css
// Orientation
@portrait: ~"(orientation: portrait)";
@landscape: ~"(orientation: landscape)";

// Breakpoints
@xs: ~"(max-width: @{screen-xs-max})";
@s: ~"(min-width: @{screen-s-min}) and (max-width: @{screen-s-max})";
@s-up: ~"(min-width: @{screen-s-min})";
@s-down: ~"(max-width: @{screen-s-max})";
@m: ~"(min-width: @{screen-m-min}) and (max-width: @{screen-m-max})";
@m-up: ~"(min-width: @{screen-m-min})";
@m-down: ~"(max-width: @{screen-m-max})";
@l: ~"(min-width: @{screen-l-min}) and (max-width: @{screen-l-max})";
@l-up: ~"(min-width: @{screen-l-min})";
@l-down: ~"(max-width: @{screen-l-max})";
@xl: ~"(min-width: @{screen-xl})";

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

```css
// Print Page
@print-page-size: A4;
@print-page-margin: 1.5cm 2cm;
```

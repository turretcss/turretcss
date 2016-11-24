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
// Border Radius
@border-radius: 2px;
```

### Z-Index

Z-index utility definitions for general use.

```css
// Z-Index
@z-index-high: 999;
@z-index-medium: 99;
@z-index-low: 9;
```

### Animation

Default animation speeds.

```css
// Animation
@animation-fast: 0.5s;
@animation-medium: 1s;
@animation-slow: 2s;
```

### Transition

Default transition speeds.


```css
// Transition
@transition-fast: 0.2s;
@transition-medium: 0.3s;
@transition-slow: 0.5s;
```

### Height

Height sizes for buttons, inputs, input-groups, selects etc.

```css
// Height
@height-xlarge: 6.0rem;
@height-large: 5.0rem;
@height-medium: 4.4rem;
@height-small: 3.6rem;
@height-xsmall: 2.4rem;
```

### Margin

Margin sizes (xlarge, large, medium, small, xsmall) for use globally, including utility classes.

```css
// Margin
@margin-xlarge: 8.0rem;
@margin-large: 5.0rem;
@margin-medium: 3.5rem;
@margin-small: 2.0rem;
@margin-xsmall: 1.5rem;
```

### Padding

Padding sizes (xlarge, large, medium, small, xsmall) for use globally, including utility classes.

```css
// Padding
@padding-xlarge: 8.0rem;
@padding-large: 5.0rem;
@padding-medium: 3.5rem;
@padding-small: 2.0rem;
@padding-xsmall: 1.5rem;
```

### Max Width

Max Width sizes (xlarge, large, medium, small, xsmall) for use globally, including utility classes.

```css
// Max Width
@max-width-xlarge: 128rem;
@max-width-large: 100rem;
@max-width-medium: 80rem;
@max-width-small: 60rem;
@max-width-xsmall: 48rem;
```

## Root

Sets @root-size on the `:root` element with responsive breakpoints.

```css
// Root Size
@root-size: 10px;
@root-size-xlarge: @root-size;
@root-size-large: @root-size;
@root-size-medium: @root-size;
@root-size-small: @root-size - 1;
@root-size-xsmall: @root-size - 1;
```

## Body

Some top level definitions for general styles on the `<body>` tag.

```css
// Body
@body-font-family: @regular-font-family;
@body-font-weight: @regular-font-weight; 
@body-color: @grey;
@body-line-height: @line-height-medium;
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
@medium-font-family: @sans-serif-font-family;
@semibold-font-family: @sans-serif-font-family;
@bold-font-family: @sans-serif-font-family;

// Generic Font Weights
@thin-font-weight: 300;
@regular-font-weight: 400;
@medium-font-weight: 500;
@semibold-font-weight: 600;
@bold-font-weight: 700;

// Font Sizes
@font-size-xlarge: 2.0;
@font-size-large: 1.8;
@font-size-medium: 1.6;
@font-size-small: 1.4;
@font-size-xsmall: 1.2;

// Line height
@line-height-xlarge: 1.8;
@line-height-large: 1.65;
@line-height-medium: 1.5;
@line-height-small: 1.35;
@line-height-xsmall: 1.2;
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
        <td>xsmall</td>
        <td>Phone</td>
        <td class="is-null"></td>
        <td>767px</td>
      </tr>
      <tr>
        <td>small</td>
        <td>Tablet</td>
        <td>768px</td>
        <td>1023px</td>
      </tr>
      <tr>
        <td>medium</td>
        <td>Laptop</td>
        <td>1024px</td>
        <td>1279px</td>
      </tr>
      <tr>
        <td>large</td>
        <td>Desktop</td>
        <td>1280px</td>
        <td>1679px</td>
      </tr>
      <tr>
        <td>xlarge</td>
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

```css
// Print Page
@print-page-size: A4;
@print-page-margin: 1.5cm 2cm;
```

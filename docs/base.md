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

```scss
--border-radius: 2px;
```

### Z-Index

Z-index utility definitions for general use.

```scss
--z-index-high: 999;
--z-index-m: 99;
--z-index-low: 9;
```

### Speed

Default transition/animation speeds.

```scss
--speed-fast: 200ms;
--speed-m: 300ms;
--speed-slow: 500ms;
```

### Height

Height sizes for buttons, inputs, and selects.

```scss
--height-xl: 6.0rem;
--height-l: 5.0rem;
--height-m: 4.4rem;
--height-s: 3.6rem;
--height-xs: 3.0rem;
```

### Space

Space sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--space-xl: 8.0rem;
--space-l: 5.0rem;
--space-m: 3.5rem;
--space-s: 2.0rem;
--space-xs: 1.5rem;
```

### Margin

Margin sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--margin-xl: var(--space-xl);
--margin-l: var(--space-l);
--margin-m: var(--space-m);
--margin-s: var(--space-s);
--margin-xs: var(--space-xs);
```

### Padding

Padding sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--padding-xl: var(--space-xl);
--padding-l: var(--space-l);
--padding-m: var(--space-m);
--padding-s: var(--space-s);
--padding-xs: var(--space-xs);
```

### Max Width

Max Width sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--max-width-xl: 1280px;
--max-width-l: 1024px;
--max-width-m: 800px;
--max-width-s: 640px;
--max-width-xs: 480px;
```

## Root

Sets @root-size on the `:root` element with responsive breakpoints.

```scss
--root-size: 10px;
--root-size-xl: var(--root-size);
--root-size-l: var(--root-size);
--root-size-m: var(--root-size);
--root-size-s: var(--root-size);
--root-size-xs: var(--root-size);
```

## Body

Some top level definitions for general styles on the `<body>` tag.

```scss
--body-font-family: var(--font-family-system);
--body-color: var(--dark);
```

## Colors

<div class="palette">
  <div class="swatch color-black background-white">White</div>
  <div class="swatch color-white background-black">Black</div>
</div>

```scss
--white: #FFFFFF;
--white-hover: color(var(--white) shade(5%));
--white-active: color(var(--white) shade(10%));

--black: #000000;
--black-hover: color(var(--black) tint(20%));
--black-active: color(var(--black) tint(10%));
```

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

```scss
--light: #CCCCCC;
--light-hover: var(--light-400);
--light-active: var(--light-600);
--light-100: color(var(--light) tint(80%));
--light-200: color(var(--light) tint(60%));
--light-300: color(var(--light) tint(40%));
--light-400: color(var(--light) tint(20%));
--light-500: var(--light);
--light-600: color(var(--light) shade(5%));
--light-700: color(var(--light) shade(10%));
--light-800: color(var(--light) shade(15%));
--light-900: color(var(--light) shade(20%));

--grey: #666666;
--grey-hover: var(--grey-400);
--grey-active: var(--grey-600);
--grey-100: color(var(--grey) tint(30%));
--grey-200: color(var(--grey) tint(22.5%));
--grey-300: color(var(--grey) tint(15%));
--grey-400: color(var(--grey) tint(7.5%));
--grey-500: var(--grey);
--grey-600: color(var(--grey) shade(7.5%));
--grey-700: color(var(--grey) shade(15%));
--grey-800: color(var(--grey) shade(22.5%));
--grey-900: color(var(--grey) shade(30%));

--dark: #333333;
--dark-hover: var(--dark-400);
--dark-active: var(--dark-600);
--dark-100: color(var(--dark) tint(20%));
--dark-200: color(var(--dark) tint(15%));
--dark-300: color(var(--dark) tint(10%));
--dark-400: color(var(--dark) tint(5%));
--dark-500: var(--dark);
--dark-600: color(var(--dark) shade(7.5%));
--dark-700: color(var(--dark) shade(15%));
--dark-800: color(var(--dark) shade(22.5%));
--dark-900: color(var(--dark) shade(30%));
```

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

```scss
--primary: #3455DB;
--primary-hover: var(--primary-400);
--primary-active: var(--primary-600);
--primary-100: color(var(--primary) tint(40%));
--primary-200: color(var(--primary) tint(30%));
--primary-300: color(var(--primary) tint(20%));
--primary-400: color(var(--primary) tint(10%));
--primary-500: var(--primary);
--primary-600: color(var(--primary) shade(10%));
--primary-700: color(var(--primary) shade(20%));
--primary-800: color(var(--primary) shade(30%));
--primary-900: color(var(--primary) shade(40%));

--secondary: #663399;
--secondary-hover: var(--secondary-400);
--secondary-active: var(--secondary-600);
--secondary-100: color(var(--secondary) tint(40%));
--secondary-200: color(var(--secondary) tint(30%));
--secondary-300: color(var(--secondary) tint(20%));
--secondary-400: color(var(--secondary) tint(10%));
--secondary-500: var(--secondary);
--secondary-600: color(var(--secondary) shade(10%));
--secondary-700: color(var(--secondary) shade(20%));
--secondary-800: color(var(--secondary) shade(30%));
--secondary-900: color(var(--secondary) shade(40%));

--tertiary: #8B008B;
--tertiary-hover: var(--tertiary-400);
--tertiary-active: var(--tertiary-600);
--tertiary-100: color(var(--tertiary) tint(40%));
--tertiary-200: color(var(--tertiary) tint(30%));
--tertiary-300: color(var(--tertiary) tint(20%));
--tertiary-400: color(var(--tertiary) tint(10%));
--tertiary-500: var(--tertiary);
--tertiary-600: color(var(--tertiary) shade(10%));
--tertiary-700: color(var(--tertiary) shade(20%));
--tertiary-800: color(var(--tertiary) shade(30%));
--tertiary-900: color(var(--tertiary) shade(40%));
```

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

```scss
--info: #1E90FF;
--info-hover: var(--info-400);
--info-active: var(--info-600);
--info-100: color(var(--info) tint(40%));
--info-200: color(var(--info) tint(30%));
--info-300: color(var(--info) tint(20%));
--info-400: color(var(--info) tint(10%));
--info-500: var(--info);
--info-600: color(var(--info) shade(10%));
--info-700: color(var(--info) shade(20%));
--info-800: color(var(--info) shade(30%));
--info-900: color(var(--info) shade(40%));

--error: #D91E18;
--error-hover: var(--error-400);
--error-active: var(--error-600);
--error-100: color(var(--error) tint(40%));
--error-200: color(var(--error) tint(30%));
--error-300: color(var(--error) tint(20%));
--error-400: color(var(--error) tint(10%));
--error-500: var(--error);
--error-600: color(var(--error) shade(10%));
--error-700: color(var(--error) shade(20%));
--error-800: color(var(--error) shade(30%));
--error-900: color(var(--error) shade(40%));

--warning: #FF4500;
--warning-hover: var(--warning-400);
--warning-active: var(--warning-600);
--warning-100: color(var(--warning) tint(40%));
--warning-200: color(var(--warning) tint(30%));
--warning-300: color(var(--warning) tint(20%));
--warning-400: color(var(--warning) tint(10%));
--warning-500: var(--warning);
--warning-600: color(var(--warning) shade(10%));
--warning-700: color(var(--warning) shade(20%));
--warning-800: color(var(--warning) shade(30%));
--warning-900: color(var(--warning) shade(40%));

--success: #00AA00;
--success-hover: var(--success-400);
--success-active: var(--success-600);
--success-100: color(var(--success) tint(40%));
--success-200: color(var(--success) tint(30%));
--success-300: color(var(--success) tint(20%));
--success-400: color(var(--success) tint(10%));
--success-500: var(--success);
--success-600: color(var(--success) shade(10%));
--success-700: color(var(--success) shade(20%));
--success-800: color(var(--success) shade(30%));
--success-900: color(var(--success) shade(40%));
```

## Fonts

Some top level definitions for the base font-size styles on the `<html>` tag, with breakpoints.

### Font Families

<p class="font-family-system">Font Family System</p>
<p class="font-family-sans-serif">Font Family Sans Serif</p>
<p class="font-family-serif">Font Family Serif</p>
<p class="font-family-monospace">Font Family Monospace</p>

```scss
--font-family-system: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
--font-family-sans-serif: "Helvetica Neue", Helvetica, Arial, sans-serif;
--font-family-serif: Georgia, "Times New Roman", Times, serif;
--font-family-monospace: Monaco, Menlo, Consolas, "Courier New", monospace;
```

### Font Sizes

<p class="font-size-xl">Font Size Extra Large</p>
<p class="font-size-l">Font Size Large</p>
<p class="font-size-m">Font Size Medium</p>
<p class="font-size-s">Font Size Small</p>
<p class="font-size-xs">Font Size Extra Small</p>

```scss
--font-size-xl: 2.0rem;
--font-size-l: 1.8rem;
--font-size-m: 1.6rem;
--font-size-s: 1.4rem;
--font-size-xs: 1.2rem;
```

### Font Weights

<p class="font-weight-thin">Font Weight Thin</p>
<p class="font-weight-light">Font Weight Light</p>
<p class="font-weight-regular">Font Weight Regular</p>
<p class="font-weight-medium">Font Weight Medium</p>
<p class="font-weight-semibold">Font Weight Semibold</p>
<p class="font-weight-bold">Font Weight Bold</p>
<p class="font-weight-black">Font Weight Black</p>

```scss
--font-weight-thin: 200;
--font-weight-light: 300;
--font-weight-regular: 400;
--font-weight-medium: 500;
--font-weight-semibold: 600;
--font-weight-bold: 700;
--font-weight-black: 800;
```

### Line Heights

<p class="line-height-xl">Line Height Extra Large</p>
<p class="line-height-l">Line Height Large</p>
<p class="line-height-m">Line Height Medium</p>
<p class="line-height-s">Line Height Small</p>
<p class="line-height-xs">Line Height Extra Small</p>

```scss
--line-height-xl: 1.8;
--line-height-l: 1.65;
--line-height-m: 1.5;
--line-height-s: 1.35;
--line-height-xs: 1.2;
```

## Images

Images in Turret are made responsive-friendly via the addition of `max-width: 100%;` and `height: auto;` to images so that it scales nicely to the parent element.

<img src="{{ site.baseurl }}/assets/images/photo.svg">

```html
<img src="..." alt="...">
```

## Media Queries

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

```scss
@custom-media --xs (max-width: 767px);
@custom-media --s (min-width: 768px) and (max-width: 1023px);
@custom-media --s-up (min-width: 768px);
@custom-media --s-down (max-width: 1023px);
@custom-media --m (min-width: 1024px) and (max-width: 1279px);
@custom-media --m-up (min-width: 1024px);
@custom-media --m-down (max-width: 1279px);
@custom-media --l (min-width: 1280px) and (max-width: 1679px);
@custom-media --l-up (min-width: 1280px);
@custom-media --l-down (max-width: 1679px);
@custom-media --xl (min-width: 1680px);
```

## Print

By default Turret's print styles are formatted for `A4` page size with a margin of `1.5cm 2cm`. Print styles include making text `@black`, and removing backgrounds from elements by default. Links are displayed next to anchors using `:after` pseudo content.

```scss
--print-page-size: A4;
--print-page-margin: 1.5cm 2cm;
```

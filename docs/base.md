---
layout: docs
title: Base
page_title: Base - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of Turret and basic styling behaviours including global variables, fonts, color palettes, and media queries.
permalink: /docs/base/
---

## Reset

On top of [Normalize.css](https://necolas.github.io/normalize.css/), Turret applies some basic resets to ensure the correct rendering of elements. These resets include `border-box` for global `box-sizing`, `max-width 100%` for images, and removing top and bottom margins for `first-child` and `last-child` typography, form, and block element items.

### Box Sizing

For more straightforward sizing in CSS, Turret switches the global `box-sizing` value from `content-box` to `border-box`. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third party software like Google Maps and Google Custom Search Engine.

### Images

Images in Turret are made responsive-friendly via the addition of `max-width: 100%;` and `height: auto;` to images so that it scales nicely to the parent element.

<img src="{{ site.baseurl }}/assets/images/photo.svg">

```html
<img src="..." alt="...">
```

## Body

Some top level definitions for general styles on the `<body>` tag.

```scss
--body-font-family: var(--font-family);
--body-font-weight: var(--font-weight);
--body-color: var(--color);
--body-line-height: var(--line-height);
--body-letter-spacing: var(--letter-spacing);
--body-background: var(--background);
```

## Container

Content wrapper with `max-width` set at differing sizes at various media query breakpoints.

By default the container has `@gutter` padding applied to the left and right of the container `<div>`, this is configurable for each breakpoint as needed.

```scss
--container-xl: 90rem;
--container-l: 80rem;
--container-m: 70rem;
--container-s: 100%;
--container-xs: 100%;
```

```html
<div class="container">...</div>
```

## Gutter

The gutter is padding applied to the left and right of the container to ensure content does not touch the sides of the viewport.

```scss
--gutter: var(--space-xs);
```

### Gutters Classes

Add `gutter-*` utility class to add gutter to element

```html
<div class="gutter-bottom">...</div>
<div class="gutter-left">...</div>
<div class="gutter-right">...</div>
<div class="gutter-top">...</div>
```

### No Gutter

Add `no-gutter` utility class to remove default gutters applied to a container.

```html
<div class="container no-gutter">...</div>
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
        <td class="color-grey background-light-100">None</td>
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
        <td class="color-grey background-light-100">None</td>
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

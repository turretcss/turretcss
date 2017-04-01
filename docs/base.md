---
layout: docs
title: Base
page_title: Base - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of turretcss and basic styling behaviours including global variables, fonts, color palettes, and media queries.
permalink: /docs/base/
---

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Reset

On top of [Normalize.css](https://necolas.github.io/normalize.css/), turretcss applies some basic resets to ensure the correct rendering of elements. These resets include `border-box` for global `box-sizing`, `max-width 100%` for images, and removing top and bottom margins for `first-child` and `last-child` typography, form, and block element items.

### Box Sizing

For more straightforward sizing in CSS, turretcss switches the global `box-sizing` value from `content-box` to `border-box`. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third party software like Google Maps and Google Custom Search Engine.

### Text Rendering

To improve type rendering for legibility `text-rendering: optimizeLegibility;` is set on the root `<html>` element. This allows browsers to emphasize legibility over rendering speed and geometric precision. This enables kerning and optional ligatures. [MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/text-rendering)

### Font Smoothing

turretcss sets `--font-smoothing-antialiased` on the `<html>` root tag for browsers that support font-smoothing, this can be overwritten with the `--font-smoothing-auto` mixin.

### Min Height

```scss
html,
body {
  width: 100%;
  min-height: 100%;
}
```

### Margin Resets

turretcss resets vertical margins for nested HTML typography and form elements. This aims to make container element (`<div>`, `<section>`, etc.) margins more predictable, this affects the first and last children of nested heading elements (`h1`, `h2`, `h3`, `h4`, `h5`, `h6`), typography elements (`p`, `dl`, `dd`, `dt`, `ul li`, `ol li`, `blockquote`, `cite`), and form elements (`.field`, `fieldset`, `label`, `input`, `textarea`, `.select`, and `.control`).

```scss
selectors {

  &:first-child {
    margin-top: 0;
  }

  &:last-child {
    margin-bottom: 0;
  }
}
```

### Images

Images in turretcss are made responsive-friendly via the addition of `max-width: 100%;` and `height: auto;` to images so that it scales nicely to the parent element.

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

## Media Queries

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

By default turretcss's print styles are formatted for `A4` page size with a margin of `1.5cm 2cm`. Print styles include making text `@black`, and removing backgrounds from elements by default. Links are displayed next to anchors using `:after` pseudo content.

```scss
--print-page-size: A4;
--print-page-margin: 1.5cm 2cm;
```

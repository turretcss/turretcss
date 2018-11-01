---
layout: docs
title: Reset
description: ""
---

## About

On top of [Normalize.css](https://necolas.github.io/normalize.css/), turretcss applies some basic resets to ensure the correct rendering of elements. These resets include `border-box` for global `box-sizing`, `max-width 100%` for images, and removing top and bottom margins for `first-child` and `last-child` typography, form, and block element items.

### Box Sizing

For more straightforward sizing in CSS, turretcss switches the global `box-sizing` value from `content-box` to `border-box`. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third party software like Google Maps and Google Custom Search Engine.

### Text Rendering

To improve type rendering for legibility `text-rendering: optimizeLegibility;` is set on the root `<html>` element. This allows browsers to emphasize legibility over rendering speed and geometric precision. This enables kerning and optional ligatures. [MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/text-rendering)

### Font Smoothing

turretcss sets `--font-smoothing-antialiased` on the `<html>` root tag for browsers that support font-smoothing, this can be overwritten with the `--font-smoothing-auto` mixin.

### Images

Images in turretcss are made responsive-friendly via the addition of `max-width: 100%;` and `height: auto;` to images so that it scales nicely to the parent element.

<img src="{{ site.baseurl }}/assets/images/photo.svg">

```html
<img src="..." alt="...">
```

### Min Height

```scss
html,
body {
  width: 100%;
  min-height: 100%;
}
```

### Margin Resets

turretcss resets vertical margins for nested HTML typography and form elements. This aims to make container element (`<div>`, `<section>`, etc.) margins more predictable, this affects the first and last children of nested heading elements (`h1`, `h2`, `h3`, `h4`, `h5`, `h6`), typography elements (`hr`, `p`, `dl`, `dd`, `dt`, `ul li`, `ol li`, `blockquote`, `cite`), and form elements (`.field`, `fieldset`, `label`, `input`, `textarea`, `.select`, and `.control`).

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

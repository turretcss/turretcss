---
layout: docs
title: Grid
page_title: Grid - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An outline of the Turret grid system using containers, rows and gutters. Includes a demonstration of the 12 column grid system with columns, nested columns, offsets, and push/pull examples.
permalink: /docs/grid/
---

## Container

Content wrapper with `max-width` set at differing sizes at various media query breakpoints.

By default the container has `@gutter` padding applied to the left and right of the container `<div>`, this is configurable for each breakpoint as needed.

```scss
--container-xl: 1440px;
--container-l: 1280px;
--container-m: 1024px;
--container-s: 100%;
--container-xs: 100%;
```

```html
<div class="container">...</div>
```

## Gutter

The gutter is padding applied to the left and right of the container to ensure content does not touch the sides of the viewport.

```scss
--gutter: 1.5rem;
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
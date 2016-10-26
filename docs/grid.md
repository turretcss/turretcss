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

```css
// Container
@container-xsmall: 100%;
@container-small: 100%;
@container-medium: 1024px;
@container-large: 1280px;
@container-xlarge: 1440px;
```

```html
<div class="container">
  <div class="row">
    <div class="column-1-2">...</div>
    <div class="column-1-2">...</div>
  </div>
</div>
```

## Gutter

```css
// Gutter
@gutter: 1.6rem;
@gutter-xlarge: @gutter;
@gutter-large: @gutter;
@gutter-medium: @gutter;
@gutter-small: @gutter;
@gutter-xsmall: @gutter;
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

Add `no-gutter` utility class to remove default gutters applied to a container or columns.

```html
<div class="column-1 no-gutter">...</div>
```

### No Gutter Breakponts

General `no-gutter` utility classes for each responsive breakpoint.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%"></th>
        <th width="15%">Extra Small Devices<br><small>Phones (&lt;767px)</small></th>
        <th width="15%">Small Devices<br><small>Tablets (768px - 1023px)</small></th>
        <th width="15%">Medium devices<br><small>Laptops (1024px - 1279px)</small></th>
        <th width="15%">Large devices<br><small>Desktops (1280px - 1679px)</small></th>
        <th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.no-gutter-xsmall</code></td>
        <td class="is-hidden">No gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
      </tr>
      <tr>
        <td><code>.no-gutter-small</code></td>
        <td class="is-visible">Gutter</td>
        <td class="is-hidden">No gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
      </tr>
      <tr>
        <td><code>.no-gutter-medium</code></td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-hidden">No gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
      </tr>
      <tr>
        <td><code>.no-gutter-large</code></td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-hidden">No gutter</td>
        <td class="is-visible">Gutter</td>
      </tr>
      <tr>
        <td><code>.no-gutter-xlarge</code></td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-visible">Gutter</td>
        <td class="is-hidden">No gutter</td>
      </tr>
    </tbody>
  </table>
</div>
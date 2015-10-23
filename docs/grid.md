---
layout: docs
title: Grid
description: An outline of the Turret grid system using containers, rows and gutters. Includes a demonstration of the 12 column grid system with columns, nested columns, offsets, and push/pull examples.
permalink: /docs/grid/
---

## Container

Content wrapper with `max-width` set at differing sizes at various media query breakpoints.

By default the container has `@gutter` padding applied to the left and right of the container `<div>`, this is configurable for each breakpoint as needed.

```scss
// Container
@container-xsmall: 100%;
@container-small: 100%;
@container-medium: 1024px;
@container-large: 1280px;
@container-xlarge: 1680px;
```

```html
<div class="container">
  <div class="row">
    <div class="column-1-2">...</div>
    <div class="column-1-2">...</div>
  </div>
</div>
```

## Row

Containing element for children with `.column-1*` attributes set, used for a clearfix for column floats as well as negating the outer gutters applied to columns.

```html
<div class="row">...</div>
```

## Gutter

```scss
// Gutter
@gutter: 15px;
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

{% include tables/gutter.html %}

## Column

Columns can be applied to html elements as classes in order to position elements, columns are floated left with `@gutter` padding applied to the left and right of the element. Columns are realtively positioned and have a `min-height` of `1px`.

{% include columns.html %}

### Responsive Breakpoint Columns

<div class="row">
  <div class="column-1-5 column-xlarge-1-6 column-medium-1-3 column-small-1-2">
    <div class="grid-item">Responsive Breakpoints</div>
  </div>
</div>

```html
<div class="column-1-5 column-xlarge-1-6 column-medium-1-3 column-small-1-2">...</div>
```

### Nested Columns

<div class="row">
  <div class="column-1">
    <div class="grid-item">
      <div class="row">
        <div class="column-1-2"><div class="grid-item">Column-1-2</div></div>
        <div class="column-1-2"><div class="grid-item">Column-1-2</div></div>
      </div>
    </div>
  </div>
</div>

```html
<div class="column-1">
  <div class="row">
    <div class="column-1-2">...</div>
    <div class="column-1-2">...</div>
  </div>
</div>
```

### Column Center

<div class="row">
  <div class="column-1-2 column-center">
    <div class="grid-item no-margin">Column Center</div>
  </div>
</div>

```html
<div class="column-1-2 column-center">...</div>
```

## Offset

Column offset classes can be added to columns to add a `margin-left` value that corresponds to the offset column class width.

<div class="row">
  <div class="column-1-2 column-offset-1-2">
    <div class="grid-item no-margin">Column Offset</div>
  </div>
</div>

```html
<div class="column-1-2 column-offset-1-2">...</div>
```

## Push

Column push classes can be added to columns to add a `left` value that corresponds to the push column class width.

<div class="row">
  <div class="column-1-2 column-push-1-12">
    <div class="grid-item no-margin">Column Offset</div>
  </div>
</div>

```html
<div class="column-1-2 column-push-1-12">...</div>
```

## Pull

Column pull classes can be added to columns to add a `left` value that corresponds to the pull column class width.

<div class="row">
  <div class="column-1-2 column-pull-1-12">
    <div class="grid-item no-margin">Column Offset</div>
  </div>
</div>

```html
<div class="column-1-2 column-pull-1-12">...</div>
```




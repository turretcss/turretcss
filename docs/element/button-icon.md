---
layout: docs
title: Button Colors
description: 
permalink: /docs/element/button-icon/
---

## Example


<div>
  <button class="button button-square button-icon">
    <svg viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

### HTML

```html
<button class="button button-square button-icon">
  <svg>...</svg>
</button>
```

### CSS

```scss
--button-icon-margin: calc(var(--button-padding-horizontal) / 2);
--button-icon-padding: calc((var(--button-height) - var(--icon-size) - (var(--button-border-width) * 2)) / 2);
```

## Sizes

<div>
  <button class="button button-xxl button-square button-icon">
    <svg class="icon-xxl" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-xl button-square button-icon">
    <svg class="icon-xl" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-l button-square button-icon">
    <svg class="icon-l" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-icon">
    <svg class="icon" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-s button-square button-icon">
    <svg class="icon-s" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-xs button-square button-icon">
    <svg class="icon-xs" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-xxs button-square button-icon">
    <svg class="icon-xxs" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

### HTML


```html
<button class="button button-xxl button-square button-icon">
  <svg class="icon-xxl">...</svg>
</button>
<button class="button button-xl button-square button-icon">
  <svg class="icon-xl">...</svg>
</button>
<button class="button button-l button-square button-icon">
  <svg class="icon-l">...</svg>
</button>
<button class="button button-square button-icon">
  <svg class="icon">...</svg>
</button>
<button class="button button-s button-square button-icon">
  <svg class="icon-s">...</svg>
</button>
<button class="button button-xs button-square button-icon">
  <svg class="icon-xs">...</svg>
</button>
<button class="button button-xxs button-square button-icon">
  <svg class="icon-xxs">...</svg>
</button>
```

### CSS

```scss
--button-icon-xxl-padding: calc((var(--button-xxl-height) - var(--icon-xxl-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-xl-padding: calc((var(--button-xl-height) - var(--icon-xl-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-l-padding: calc((var(--button-l-height) - var(--icon-l-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-s-padding: calc((var(--button-s-height) - var(--icon-s-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-xs-padding: calc((var(--button-xs-height) - var(--icon-xs-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-xxs-padding: calc((var(--button-xxs-height) - var(--icon-xxs-size) - (var(--button-border-width) * 2)) / 2);
```

## Icon and Text

<div>
  <button class="button button-icon">
    <span>Button</span>
    <svg viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <a class="button button-icon" href="#">
    <span>Button</span>
    <svg viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
</div>

### HTML

```html
<button class="button button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<a class="button button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
```

### Icon and Text Sizes

<div>
  <button class="button button-xxl button-icon">
    <span>Button</span>
    <svg class="icon-xxl" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-xl button-icon">
    <span>Button</span>
    <svg class="icon-xl" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-l button-icon">
    <span>Button</span>
    <svg class="icon-l" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-icon">
    <span>Button</span>
    <svg viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-s button-icon">
    <span>Button</span>
    <svg class="icon-s" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-xs button-icon">
    <span>Button</span>
    <svg class="icon-xs" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-xxs button-icon">
    <span>Button</span>
    <svg class="icon-xxs" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

### HTML

```html
<button class="button button-xxl button-icon">
  <span>Button</span>
  <svg class="icon-xxl">...</svg>
</button>
<button class="button button-xl button-icon">
  <span>Button</span>
  <svg class="icon-xl">...</svg>
</button>
<button class="button button-l button-icon">
  <span>Button</span>
  <svg class="icon-l">...</svg>
</button>
<button class="button button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-s button-icon">
  <span>Button</span>
  <svg class="icon-s">...</svg>
</button>
<button class="button button-xs button-icon">
  <span>Button</span>
  <svg class="icon-xs">...</svg>
</button>
<button class="button button-xxs button-icon">
  <span>Button</span>
  <svg class="icon-xxs">...</svg>
</button>
```

## Anchors

<div>
  <a class="button button-xxl button-icon" href="#">
    <span>Button</span>
    <svg class="icon-xxl" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
  <a class="button button-xl button-icon" href="#">
    <span>Button</span>
    <svg class="icon-xl" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
  <a class="button button-l button-icon" href="#">
    <span>Button</span>
    <svg class="icon-l" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
  <a class="button button-icon" href="#">
    <span>Button</span>
    <svg viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
  <a class="button button-s button-icon" href="#">
    <span>Button</span>
    <svg class="icon-s" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
  <a class="button button-xs button-icon" href="#">
    <span>Button</span>
    <svg class="icon-xs" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
  <a class="button button-xxs button-icon" href="#">
    <span>Button</span>
    <svg class="icon-xxs" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </a>
</div>

### HTML

```html
<a class="button button-xxl button-icon" href="#">
  <span>Button</span>
  <svg class="icon-xxl">...</svg>
</a>
<a class="button button-xl button-icon" href="#">
  <span>Button</span>
  <svg class="icon-xl">...</svg>
</a>
<a class="button button-l button-icon" href="#">
  <span>Button</span>
  <svg class="icon-l">...</svg>
</a>
<a class="button button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-s button-icon" href="#">
  <span>Button</span>
  <svg class="icon-s">...</svg>
</a>
<a class="button button-xs button-icon" href="#">
  <span>Button</span>
  <svg class="icon-xs">...</svg>
</a>
<a class="button button-xxs button-icon" href="#">
  <span>Button</span>
  <svg class="icon-xxs">...</svg>
</a>
```

## Customisation

A XL button with medium icon that has a `--primary` fill

<div>
  <button class="button button-xl button-icon">
    <span>Button</span>
    <svg class="icon-m fill-primary" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

### HTML

```html
<button class="button button-xl button-icon">
  <span>Button</span>
  <svg class="icon-m fill-primary">...</svg>
</button>
```

A `--primary` button with icon that has a `--primary-200` fill

<div>
  <button class="button button-primary button-icon">
    <span>Button</span>
    <svg class="fill-primary-200" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

### HTML

```html
<button class="button button-primary button-icon">
  <span>Button</span>
  <svg class="fill-primary-200">...</svg>
</button>
```
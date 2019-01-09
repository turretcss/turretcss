---
layout: docs
title: Button Colors
description: null
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
--button-icon-size: 1.5rem;
--button-icon-margin: calc(var(--button-padding-horizontal) / 1.25);
--button-icon-padding: calc((var(--button-height) - var(--button-icon-size) - (var(--button-border-width) * 2)) / 2);
```

## Sizes

<div class="group group-xs">
  <ul>
    <li>  
      <button class="button button-xxl button-square button-icon">
        <svg width="20" height="20" viewBox="0 0 20 20">
          <circle cx="10" cy="10" r="10"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-xl button-square button-icon">
        <svg width="20" height="20" viewBox="0 0 20 20">
          <circle cx="10" cy="10" r="10"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-l button-square button-icon">
        <svg width="18" height="18" viewBox="0 0 18 18">
          <circle cx="9" cy="9" r="9"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-m button-square button-icon">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-s button-square button-icon">
        <svg width="14" height="14" viewBox="0 0 14 14">
          <circle cx="7" cy="7" r="7"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-xs button-square button-icon">
        <svg width="12" height="12" viewBox="0 0 12 12">
          <circle cx="6" cy="6" r="6"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-xxs button-square button-icon">
        <svg width="12" height="12" viewBox="0 0 12 12">
          <circle cx="6" cy="6" r="6"></circle>
        </svg>
      </button>
    </li>
  </ul>
</div>

### HTML

```html
<button class="button button-xxl button-square button-icon">
  <svg>...</svg>
</button>
<button class="button button-xl button-square button-icon">
  <svg>...</svg>
</button>
<button class="button button-l button-square button-icon">
  <svg>...</svg>
</button>
<button class="button button-square button-icon">
  <svg>...</svg>
</button>
<button class="button button-s button-square button-icon">
  <svg>...</svg>
</button>
<button class="button button-xs button-square button-icon">
  <svg>...</svg>
</button>
<button class="button button-xxs button-square button-icon">
  <svg>...</svg>
</button>
```

### CSS

```scss
--button-icon-xxl-size: 2.25rem;
--button-icon-xxl-padding: calc((var(--button-xxl-height) - var(--button-icon-xxl-size) - (var(--button-border-width) * 2)) / 2);

--button-icon-xl-size: 2rem;
--button-icon-xl-padding: calc((var(--button-xl-height) - var(--button-icon-xl-size) - (var(--button-border-width) * 2)) / 2);

--button-icon-l-size: 1.75rem;
--button-icon-l-padding: calc((var(--button-l-height) - var(--button-icon-l-size) - (var(--button-border-width) * 2)) / 2);

--button-icon-s-size: 1.25rem;
--button-icon-s-padding: calc((var(--button-s-height) - var(--button-icon-s-size) - (var(--button-border-width) * 2)) / 2);

--button-icon-xs-size: 1rem;
--button-icon-xs-padding: calc((var(--button-xs-height) - var(--button-icon-xs-size) - (var(--button-border-width) * 2)) / 2);

--button-icon-xxs-size: 0.75rem;
--button-icon-xxs-padding: calc((var(--button-xxs-height) - var(--button-icon-xxs-size) - (var(--button-border-width) * 2)) / 2);
```

## Icon and Label

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

### Icon and Label Sizes

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-xxl button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-xl button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-l button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-s button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-xs button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-xxs button-icon">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
  </ul>
</div>

### HTML

```html
<button class="button button-xxl button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-xl button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-l button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-s button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-xs button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
<button class="button button-xxs button-icon">
  <span>Button</span>
  <svg>...</svg>
</button>
```

## Anchors

<div class="group group-xs">
  <ul>
    <li>  
      <a class="button button-xxl button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
    <li>  
      <a class="button button-xl button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
    <li>  
      <a class="button button-l button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
    <li>  
      <a class="button button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
    <li>  
      <a class="button button-s button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
    <li>  
      <a class="button button-xs button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
    <li>  
      <a class="button button-xxs button-icon" href="#">
        <span>Button</span>
        <svg viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </a>
    </li>
  </ul>
</div>

### HTML

```html
<a class="button button-xxl button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-xl button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-l button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-s button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-xs button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
<a class="button button-xxs button-icon" href="#">
  <span>Button</span>
  <svg>...</svg>
</a>
```

## Customisation

A XL button with medium icon that has a `--primary` fill

<div>
  <button class="button button-xl button-icon">
    <span>Button</span>
    <svg class="fill-primary" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

### HTML

```html
<button class="button button-xl button-icon">
  <span>Button</span>
  <svg class="fill-primary">...</svg>
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

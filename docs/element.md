---
layout: docs
title: Element
page_title: Element - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to the use of HTML elements and turretcss's default styling definitions including buttons, figure, media, nav, and tables.
permalink: /docs/element/
---

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Button

Button styles are applied directly to the `<button>` element, button style and size modifiers do not require the button class added to the button element. Button styles can be set on an achor tag by using the .button class.

<div>
  <button>Button</button>
</div>

```scss
--button-padding-vertical: calc((var(--button-height) - var(--button-font-size) - (var(--button-border-width) * 2)) / 2);
--button-padding-horizontal: 1.5em;
--button-height: var(--height-m);
--button-font-family: inherit;
--button-font-weight: var(--font-weight-semibold);
--button-font-size: var(--font-size-m);
--button-color: var(--dark);
--button-line-height: 1;
--button-letter-spacing: var(--letter-spacing);
--button-text-align: center;
--button-text-transform: none;
--button-background: var(--background);
--button-border-width: var(--border-width);
--button-border-style: var(--border-style);
--button-border-color: var(--border-color);
--button-border-radius: var(--border-radius);
--button-box-shadow: var(--box-shadow);

--button-hover-color: var(--button-color);
--button-hover-background: color-mod(var(--button-background) shade(2.5%));
--button-hover-border-color: color-mod(var(--button-border-color) shade(2.5%));
--button-hover-box-shadow: var(--hover-box-shadow);

--button-active-color: var(--button-color);
--button-active-background: color-mod(var(--button-background) shade(5%));
--button-active-border-color: color-mod(var(--button-border-color) shade(5%));
--button-active-box-shadow: var(--active-box-shadow);
```

```html
<button>...</button>
```

### Button Disabled

<div>
  <button disabled>Button</button>
</div>

```scss
--button-disabled-opacity: 0.65;
```

```html
<button disabled>...</button>
```

### Button Spinner

<div>
  <button class="spinner"></button>
</div>

```html
<button class="spinner">...</button>
```

### Button Block

<div>
  <button class="button button-block">Button Block</button>
</div>

```scss
--button-block-text-align: center;
```

```html
<button class="button button-block">...</button>
```

### Button Pill

The `.button-pill` class applies `border-radius` half the size of the `--button-height`.

<div>
  <button class="button button-pill button-xl">Extra Large</button>
  <button class="button button-pill button-l">Large</button>
  <button class="button button-pill">Medium</button>
  <button class="button button-pill button-s">Small</button>
  <button class="button button-pill button-xs">Extra Small</button>
</div>

```html
<button class="button button-pill">...</button>
```

### Button Square

The `.button-square` class applies the same padding all round calculated from the `height` of the button minus `font-size` and `border-width`.

<div>
  <button class="button button-square"></button>
</div>

```html
<button class="button button-square">...</button>
```

### Button with SVG

A `<svg>` contained within a `button` or `.button` element will inherit the button `font-size` as the `width` and `height`, as well as the button `color` as `fill`.

<div>
  <button class="button button-square button-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-light">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-grey">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-dark">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-black">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-secondary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square error">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square warning">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square info">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>
<div class="margin-top-xs">
  <button class="button button-square button-white button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-light button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-grey button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-dark button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-black button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-primary button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-secondary button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-tertiary button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square error button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square warning button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square success button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square info button-border">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>
<div class="margin-top-xs">
  <button class="button button-square button-xl">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
      <circle cx="10" cy="10" r="10"/>
    </svg>
  </button>
  <button class="button button-square button-l">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
      <circle cx="9" cy="9" r="9"/>
    </svg>
  </button>
  <button class="button button-square">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
  <button class="button button-square button-s">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
      <circle cx="7" cy="7" r="7"/>
    </svg>
  </button>
  <button class="button button-square button-xs">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
      <circle cx="6" cy="6" r="6"/>
    </svg>
  </button>
</div>

```html
<button>
  <svg>...</svg>
</button>
```

## Button Sizes

<div>
  <button class="button button-xl">Extra Large</button>
  <button class="button button-l">Large</button>
  <button class="button">Medium</button>
  <button class="button button-s">Small</button>
  <button class="button button-xs">Extra Small</button>
</div>


```scss
--button-xl-padding-vertical: calc((var(--button-xl-height) - var(--button-xl-font-size) - (var(--button-border-width) * 2)) / 2);
--button-xl-padding-horizontal: var(--button-padding-horizontal);
--button-xl-height: var(--height-xl);
--button-xl-font-size: var(--font-size-xl);

--button-l-padding-vertical: calc((var(--button-l-height) - var(--button-l-font-size) - (var(--button-border-width) * 2)) / 2);
--button-l-padding-horizontal: var(--button-padding-horizontal);
--button-l-height: var(--height-l);
--button-l-font-size: var(--font-size-l);

--button-s-padding-vertical: calc((var(--button-s-height) - var(--button-s-font-size) - (var(--button-border-width) * 2)) / 2);
--button-s-padding-horizontal: var(--button-padding-horizontal);
--button-s-height: var(--height-s);
--button-s-font-size: var(--font-size-s);

--button-xs-padding-vertical: calc((var(--button-xs-height) - var(--button-xs-font-size) - (var(--button-border-width) * 2)) / 2);
--button-xs-padding-horizontal: var(--button-padding-horizontal);
--button-xs-height: var(--height-xs);
--button-xs-font-size: var(--font-size-xs);
```

```html
<button class="button button-xl">...</button>
<button class="button button-l">...</button>
<button class="button">...</button>
<button class="button button-s">...</button>
<button class="button button-xs">...</button>
```

### Anchors

<div>
  <a class="button button-xl">Extra Large</a>
  <a class="button button-l">Large</a>
  <a class="button">Medium</a>
  <a class="button button-s">Small</a>
  <a class="button button-xs">Extra Small</a>
</div>

```html
<a class="button button-xl">...</a>
<a class="button button-l">...</a>
<a class="button">...</a>
<a class="button button-s">...</a>
<a class="button button-xs">...</a>
```

## Button Colors

### Shades

<div>
  <button class="button button-white">White</button>
  <button class="button button-light">Light</button>
  <button class="button button-grey">Grey</button>
  <button class="button button-dark">Dark</button>
  <button class="button button-black">Black</button>
  <button class="button button-white button-border">White</button>
  <button class="button button-light button-border">Light</button>
  <button class="button button-grey button-border">Grey</button>
  <button class="button button-dark button-border">Dark</button>
  <button class="button button-black button-border">Black</button>
</div>
<div class="margin-top-xs">
  <button class="button button-white" disabled>White</button>
  <button class="button button-light" disabled>Light</button>
  <button class="button button-grey" disabled>Grey</button>
  <button class="button button-dark" disabled>Dark</button>
  <button class="button button-black" disabled>Black</button>
  <button class="button button-white button-border" disabled>White</button>
  <button class="button button-light button-border" disabled>Light</button>
  <button class="button button-grey button-border" disabled>Grey</button>
  <button class="button button-dark button-border" disabled>Dark</button>
  <button class="button button-black button-border" disabled>Black</button>
</div>

```scss
--button-white-color: var(--black);
--button-light-color: var(--dark);
--button-grey-color: var(--white);
--button-dark-color: var(--white);
--button-black-color: var(--white);
```

```html
<button class="button button-white">...</button>
<button class="button button-light">...</button>
<button class="button button-grey">...</button>
<button class="button button-dark">...</button>
<button class="button button-black">...</button>
<button class="button button-white button-border">...</button>
<button class="button button-light button-border">...</button>
<button class="button button-grey button-border">...</button>
<button class="button button-dark button-border">...</button>
<button class="button button-black button-border">...</button>
```

### Button Palettes

<div>
  <button class="button button-primary">Primary</button>
  <button class="button button-secondary">Secondary</button>
  <button class="button button-tertiary">Tertiary</button>
  <button class="button button-primary button-border">Primary</button>
  <button class="button button-secondary button-border">Secondary</button>
  <button class="button button-tertiary button-border">Tertiary</button>
</div>
<div class="margin-top-xs">
  <button class="button button-primary" disabled>Primary</button>
  <button class="button button-secondary" disabled>Secondary</button>
  <button class="button button-tertiary" disabled>Tertiary</button>
  <button class="button button-primary button-border" disabled>Primary</button>
  <button class="button button-secondary button-border" disabled>Secondary</button>
  <button class="button button-tertiary button-border" disabled>Tertiary</button>
</div>

```scss
--button-primary-color: var(--white);
--button-secondary-color: var(--white);
--button-tertiary-color: var(--white);
```

```html
<button class="button button-primary">...</button>
<button class="button button-secondary">...</button>
<button class="button button-tertiary">...</button>
<button class="button button-primary button-border">...</button>
<button class="button button-secondary button-border">...</button>
<button class="button button-tertiary button-border">...</button>
```

### Indicators

<div>
  <button class="button error">Error</button>
  <button class="button warning">Warning</button>
  <button class="button success">Success</button>
  <button class="button info">Info</button>
  <button class="button error button-border">Error</button>
  <button class="button warning button-border">Warning</button>
  <button class="button success button-border">Success</button>
  <button class="button info button-border">Info</button>
</div>
<div class="margin-top-xs">
  <button class="button error" disabled>Error</button>
  <button class="button warning" disabled>Warning</button>
  <button class="button success" disabled>Success</button>
  <button class="button info" disabled>Info</button>
  <button class="button error button-border" disabled>Error</button>
  <button class="button warning button-border" disabled>Warning</button>
  <button class="button success button-border" disabled>Success</button>
  <button class="button info button-border" disabled>Info</button>
</div>

```scss
--button-error-color: var(--white);
--button-warning-color: var(--white);
--button-success-color: var(--white);
--button-info-color: var(--white);
```

```html
<button class="button error">...</button>
<button class="button warning">...</button>
<button class="button success">...</button>
<button class="button info">...</button>
<button class="button error button-border">...</button>
<button class="button warning button-border">...</button>
<button class="button success button-border">...</button>
<button class="button info button-border">...</button>
```

## Button Icon

```scss
--button-icon-margin: var(--button-padding-horizontal);
--button-icon-padding: calc((var(--button-height) - var(--icon-size) - (var(--button-border-width) * 2)) / 2);
```

<div>
  <button class="button button-square button-icon">
    <svg viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

```html
<button class="button button-square button-icon">
  <svg>...</svg>
</button>
```

### Button Icon Sizes

```scss
--button-icon-xl-padding: calc((var(--button-xl-height) - var(--icon-xl-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-l-padding: calc((var(--button-l-height) - var(--icon-l-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-s-padding: calc((var(--button-s-height) - var(--icon-s-size) - (var(--button-border-width) * 2)) / 2);
--button-icon-xs-padding: calc((var(--button-xs-height) - var(--icon-xs-size) - (var(--button-border-width) * 2)) / 2);
```

<div>
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
</div>

```html
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
```

### Button Icon with Text

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

### Button Icon with Text Sizes

<div>
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
</div>

```html
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
```

#### Button Icon with Text Sizes Anchors

<div>
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
</div>

```html
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
```

#### Button Icon Customisation

A XL button with medium icon that has a `--primary` fill

<div>
  <button class="button button-xl button-icon">
    <span>Button</span>
    <svg class="icon-m fill-primary" viewBox="0 0 16 16">
      <circle cx="8" cy="8" r="8"/>
    </svg>
  </button>
</div>

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

```html
<button class="button button-primary button-icon">
  <span>Button</span>
  <svg class="fill-primary-200">...</svg>
</button>
```

## Button Group

<div class="button-group">
  <button class="button">Button</button>
  <button class="button">Button</button>
  <button class="button">Button</button>
</div>

```html
<div class="button-group">
  <button class="button">...</button>
  <button class="button">...</button>
  <button class="button">...</button>
</div>
```

### Button Group Block

<div class="button-group button-group-block">
  <button class="button">Button</button>
  <button class="button">Button</button>
  <button class="button">Button</button>
</div>

```html
<div class="button-group button-group-block">
  <button class="button">...</button>
  <button class="button">...</button>
  <button class="button">...</button>
</div>
```

### Button Group Icon (SVG)

<div class="button-group">
  <button class="button">Button</button>
  <button class="button button-square">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <polygon points="2,4 13,4 8,12"/>
    </svg>
  </button>
</div>

```html
<div class="button-group">
  <button class="button">...</button>
  <button class="button button-square">
    <svg>...</svg>
  </button>
</div>
```

## Figure

<div>
  <figure>
    <img src="{{ site.baseurl }}/assets/images/photo.svg" class="responsive">
    <figcaption>Figure Caption</figcaption>
  </figure>
</div>

```scss
--figure-display: block;
--figure-margin: 0;
--figure-padding: 0;

--figure-caption-margin: 1em 0;
--figure-caption-font-family: inherit;
--figure-caption-font-weight: inherit;
--figure-caption-font-size: var(--font-size-s);
--figure-caption-color: inherit;
--figure-caption-text-align: left;
```

```html
<figure>
  <img src="..." class="responsive">
  <figcaption>...</figcaption>
</figure>
```

## Media

The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.

The media frame wraps `<img>`, `<svg>`, `<video>`, and `<iframe>` by default, to wrap other content in a media container use the media-inner class. The `media-transparent` class removes the default background color on the media element.

<div class="media media-16-9 spinner"></div>


```scss
--media-background: color-mod(var(--black) alpha(10%));
--media-border-radius: var(--border-radius);
```

```html
<div class="media media-16-9 spinner">...</div>
```

### Media Ratios

By default the media element has the following common media type ratios:

`media-1-2`
`media-9-16`
`media-9-14`
`media-2-3`
`media-3-4`
`media-1`
`media-4-3`
`media-3-2`
`media-16-9`
`media-2-1`
`media-4-5`
`media-5-4`

### Custom Media Ratios

To add custom media ratios use padding top with `calc`.

```scss
padding-top: calc((height / width) * 100%);
```

## Spinner

The `.spinner` class can be added to any element to add a `::before` pseudo element that has a spin animation and border styles to emulate a loading indicator.

<div class="max-width-xs">
  <div class="media media-1 spinner"></div>
</div>

```scss
--spinner-size: 2rem;
--spinner-speed: var(--speed-slow);
--spinner-background-color: color-mod(var(--black) alpha(10%));
--spinner-foreground-color: var(--white);
```

```html
<div class="... spinner">...</div>
```

## Nav

For menu and navigation components use the `<nav>` element wrapped around an unordered list `<ul>`.

<div>
  <nav>
    <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
      <li><a href="#">Item 4</a></li>
    </ul>
  </nav>
</div>

```scss
--nav-list-margin: 0;
--nav-item-margin: 1rem 0;
--nav-item-padding: 0;
```

```html
<nav>
  <ul>
    <li><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
  </ul>
</nav>
```

### Nav Inline

To display navigaiton inline add the `nav-inline` class to the `<nav>` element.

<div>
  <nav class="nav-inline">
    <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
      <li><a href="#">Item 4</a></li>
    </ul>
  </nav>
</div>

```scss
--nav-inline-item-margin: 0 1rem;
```

```html
<nav class="nav-inline">
  <ul>
    <li><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
  </ul>
</nav>
```

## Table

<table>
  <caption>Table Caption</caption>
  <thead>
    <tr>
      <th scope="col">Vestibulum Sem Ipsum</th>
      <th scope="col">Dolor Fringilla</th>
      <th scope="col">Amet Mattis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
  </tbody>
</table>

```scss
--table-margin: var(--paragraph-margin);
--table-background: var(--background);
--table-border-width: var(--border-width);
--table-border-style: var(--border-style);
--table-border-color: var(--border-color);
--table-border-radius: var(--border-radius);

--table-caption-margin: 1em 0;
--table-caption-font-family: inherit;
--table-caption-font-weight: inherit;
--table-caption-font-size: inherit;
--table-caption-color: inherit;
--table-caption-text-align: left;

--table-head-padding: 0.5em;
--table-head-font-family: inherit;
--table-head-font-weight: inherit;
--table-head-font-size: inherit;
--table-head-color: inherit;
--table-head-text-align: left;
--table-head-text-transform: none;
--table-head-background: var(--light-50);
--table-head-border-width: var(--table-border-width);
--table-head-border-style: var(--table-border-style);
--table-head-border-color: var(--table-border-color);

--table-cell-padding: 0.5em;
--table-cell-font-family: inherit;
--table-cell-font-weight: inherit;
--table-cell-font-size: inherit;
--table-cell-color: inherit;
--table-cell-line-height: var(--line-height);
--table-cell-vertical-align: middle;
--table-cell-border-width: var(--table-border-width);
--table-cell-border-style: var(--table-border-style);
--table-cell-border-color: var(--table-border-color);
```

```html
<table>
  <thead>
    <tr>
      <th scope="col">...</th>
      <th scope="col">...</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
```

### Table Responsive

The `.table-responsive` class wraps a table allowing it to be sized appropriately for its contents, overflow content is viewable through scrolling.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th scope="col">Vestibulum Sem Ipsum</th>
        <th scope="col">Dolor Fringilla</th>
        <th scope="col">Amet Mattis</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
    </tbody>
  </table>
</div>

```html
<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th scope="col">...</th>
        <th scope="col">...</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>...</td>
        <td>...</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>
```
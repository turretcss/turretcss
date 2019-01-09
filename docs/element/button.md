---
layout: docs
title: Button
description: Button styles are applied directly to the button element, button style and size modifiers do not require the button class added to the button element. Button styles can be set on an achor tag by using the .button class.
---

## Example

<div>
  <button>Button</button>
  <button disabled>Button</button>
</div>

### HTML

```html
<button>...</button>
<button disabled>...</button>
```

### CSS

```scss
--button-padding-vertical: calc((var(--button-height) - var(--button-font-size) - (var(--button-border-width) * 2)) / 2);
--button-padding-horizontal: 1em;
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

--button-disabled-opacity: 0.65;
```

## Button Spinner

<div>
  <button class="spinner" title="Loading"></button>
</div>

### HTML

```html
<button class="spinner" title="Loading"></button>
```

## Button Block

<div>
  <button class="button-block">Button</button>
</div>

### HTML

```html
<button class="button-block">...</button>
```

### CSS

```scss
--button-block-text-align: center;
```

## Button Pill

The `.button-pill` class applies `border-radius` half the size of the `--button-height`.

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-pill button-xxl">Button XXL</button>
    </li>
    <li>
      <button class="button button-pill button-xl">Button XL</button>
    </li>
    <li>
      <button class="button button-pill button-l">Button L</button>
    </li>
    <li>
      <button class="button button-pill">Button M</button>
    </li>
    <li>
      <button class="button button-pill button-s">Button S</button>
    </li>
    <li>
      <button class="button button-pill button-xs">Button XS</button>
    </li>
    <li>
      <button class="button button-pill button-xxs">Button XXS</button>
    </li>
  </ul>
</div>

### HTML

```html
<button class="button button-pill">...</button>
```

## Button Square

The `.button-square` class applies the same padding all round calculated from the `height` of the button minus `font-size` and `border-width`.

<div>
  <button class="button button-square"></button>
</div>

### HTML

```html
<button class="button button-square">...</button>
```

### Button with SVG

A `<svg>` contained within a `button` or `.button` element will inherit the button `font-size` as the `width` and `height`, as well as the button `color` as `fill`.

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-square button-white">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-light">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-grey">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-dark">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-black">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-primary">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-secondary">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-tertiary">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square error">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square warning">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square success">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square info">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
  </ul>
</div>

<div class="group group-xs margin-top-xs">
  <ul>
    <li>
      <button class="button button-square button-white button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-light button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-grey button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-dark button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-black button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-primary button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-secondary button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square button-tertiary button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square error button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square warning button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square success button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
    <li>
      <button class="button button-square info button-border">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"/>
        </svg>
      </button>
    </li>
  </ul>
</div>

<div class="group group-xs margin-top-xs">
  <ul>
    <li>  
      <button class="button button-square button-xxl">
        <svg width="20" height="20" viewBox="0 0 20 20">
          <circle cx="10" cy="10" r="10"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-xl">
        <svg width="20" height="20" viewBox="0 0 20 20">
          <circle cx="10" cy="10" r="10"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-l">
        <svg width="18" height="18" viewBox="0 0 18 18">
          <circle cx="9" cy="9" r="9"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-m">
        <svg width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="8"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-s">
        <svg width="14" height="14" viewBox="0 0 14 14">
          <circle cx="7" cy="7" r="7"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-xs">
        <svg width="12" height="12" viewBox="0 0 12 12">
          <circle cx="6" cy="6" r="6"></circle>
        </svg>
      </button>
    </li>
    <li>  
      <button class="button button-square button-xxs">
        <svg width="12" height="12" viewBox="0 0 12 12">
          <circle cx="6" cy="6" r="6"></circle>
        </svg>
      </button>
    </li>
  </ul>
</div>

### HTML

```html
<button>
  <svg>...</svg>
</button>
```

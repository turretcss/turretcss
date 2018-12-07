---
layout: docs
title: Button Sizes
description: null
---

## Example

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-xxl">Button XXL</button>
    </li>
    <li>
      <button class="button button-xl">Button XL</button>
    </li>
    <li>
      <button class="button button-l">Button L</button>
    </li>
    <li>
      <button class="button">Button M</button>
    </li>
    <li>
      <button class="button button-s">Button S</button>
    </li>
    <li>
      <button class="button button-xs">Button XS</button>
    </li>
    <li>
      <button class="button button-xxs">Button XXS</button>
    </li>
  </ul>
</div>

### HTML

```html
<button class="button button-xxl">...</button>
<button class="button button-xl">...</button>
<button class="button button-l">...</button>
<button class="button">...</button>
<button class="button button-s">...</button>
<button class="button button-xs">...</button>
<button class="button button-xxs">...</button>
```

### CSS

```scss
--button-xxl-padding-vertical: calc((var(--button-xxl-height) - var(--button-xxl-font-size) - (var(--button-border-width) * 2)) / 2);
--button-xxl-padding-horizontal: var(--button-padding-horizontal);
--button-xxl-height: var(--height-xxl);
--button-xxl-font-size: var(--font-size-xxl);

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

--button-xxs-padding-vertical: calc((var(--button-xxs-height) - var(--button-xxs-font-size) - (var(--button-border-width) * 2)) / 2);
--button-xxs-padding-horizontal: var(--button-padding-horizontal);
--button-xxs-height: var(--height-xxs);
--button-xxs-font-size: var(--font-size-xxs);
```

## Anchors

<div class="group group-xs">
  <ul>
    <li>
      <a class="button button-xxl">Button XXL</a>
    </li>
    <li>
      <a class="button button-xl">Button XL</a>
    </li>
    <li>
      <a class="button button-l">Button L</a>
    </li>
    <li>
      <a class="button">Button M</a>
    </li>
    <li>
      <a class="button button-s">Button S</a>
    </li>
    <li>
      <a class="button button-xs">Button XS</a>
    </li>
    <li>
      <a class="button button-xxs">Button XXS</a>
    </li>
  </ul>
</div>

### HTML

```html
<a href="..." class="button button-xxl">...</a>
<a href="..." class="button button-xl">...</a>
<a href="..." class="button button-l">...</a>
<a href="..." class="button">...</a>
<a href="..." class="button button-s">...</a>
<a href="..." class="button button-xs">...</a>
<a href="..." class="button button-xxs">...</a>
```

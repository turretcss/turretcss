---
layout: docs
title: Spinner Sizes
description: null
---

## About

The `.spinner` class can be added to any element to add a `::before` pseudo element that has a spin animation and border styles to emulate a loading indicator.

## Example

<div class="group group-xs">
  <ul>
    <li>
      <div class="space-xxl background-light spinner spinner-xxl"></div>
    </li>
    <li>
      <div class="space-xxl background-light spinner spinner-xl"></div>
    </li>
    <li>
      <div class="space-xxl background-light spinner spinner-l"></div>
    </li>
    <li>
      <div class="space-xxl background-light spinner spinner-m"></div>
    </li>
    <li>
      <div class="space-xxl background-light spinner spinner-s"></div>
    </li>
    <li>
      <div class="space-xxl background-light spinner spinner-xs"></div>
    </li>
    <li>
      <div class="space-xxl background-light spinner spinner-xxs"></div>
    </li>
  </ul>
</div>

### HTML

```html
<div class="spinner spinner-xxl">...</div>
<div class="spinner spinner-xl">...</div>
<div class="spinner spinner-l">...</div>
<div class="spinner spinner-m">...</div>
<div class="spinner spinner-s">...</div>
<div class="spinner spinner-xs">...</div>
<div class="spinner spinner-xxs">...</div>
```

### CSS

```scss
--spinner-xxl-size: 2.5rem;
--spinner-xl-size: 2.25rem;
--spinner-l-size: 2rem;
--spinner-s-size: 1.5rem;
--spinner-xs-size: 1.25rem;
--spinner-xxs-size: 1rem;
```

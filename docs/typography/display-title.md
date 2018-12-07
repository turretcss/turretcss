---
layout: docs
title: Display Title
description: null
---

## Example

<h1 class="display-title">Display Title</h1>

### HTML

```html
<h1 class="display-title">...</h1>
```

### CSS

```scss
--display-title-margin: 0;
--display-title-font-family: var(--headings-font-family);
--display-title-font-weight: var(--headings-font-weight);
--display-title-font-size: 1.375rem;
--display-title-color: inherit;
--display-title-line-height: var(--line-height-xxs);
--display-title-letter-spacing: 0;
--display-title-text-transform: none;
```

## Sizes

<h1 class="display-title display-title-xxl">Display Title XXL</h1>
<h1 class="display-title display-title-xl">Display Title XL</h1>
<h1 class="display-title display-title-l">Display Title L</h1>
<h1 class="display-title">Display Title M</h1>
<h1 class="display-title display-title-s">Display Title S</h1>
<h1 class="display-title display-title-xs">Display Title XS</h1>
<h1 class="display-title display-title-xxs">Display Title XXS</h1>

### HTML

```html
<h1 class="display-title display-title-xxl">...</h1>
<h1 class="display-title display-title-xl">...</h1>
<h1 class="display-title display-title-l">...</h1>
<h1 class="display-title">...</h1>
<h1 class="display-title display-title-s">...</h1>
<h1 class="display-title display-title-xs">...</h1>
<h1 class="display-title display-title-xxs">...</h1>
```

### CSS

```scss
--display-title-xxl-font-size: calc(var(--display-title-xl-font-size) + 0.125rem);
--display-title-xl-font-size: calc(var(--display-title-l-font-size) + 0.125rem);
--display-title-l-font-size: calc(var(--display-title-font-size) + 0.125rem);
--display-title-s-font-size: calc(var(--display-title-font-size) - 0.125rem);
--display-title-xs-font-size: calc(var(--display-title-s-font-size) - 0.125rem);
--display-title-xxs-font-size: calc(var(--display-title-xs-font-size) - 0.125rem);
```

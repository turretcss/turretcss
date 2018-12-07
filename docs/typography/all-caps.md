---
layout: docs
title: All Caps
description: null
---

## Example

<h1 class="all-caps">All Caps</h1>

### HTML

```html
<h1 class="all-caps">...</h1>
```

### CSS

```scss
--all-caps-margin: 0.5em 0;
--all-caps-font-family: var(--headings-font-family);
--all-caps-font-weight: var(--headings-font-weight);
--all-caps-font-size: 0.875rem;
--all-caps-color: inherit;
--all-caps-line-height: var(--line-height-xs);
--all-caps-text-transform: uppercase;
--all-caps-letter-spacing: var(--letter-spacing);
```

## Sizes

<h1 class="all-caps all-caps-xxl">All Caps XXL</h1>
<h1 class="all-caps all-caps-xl">All Caps XL</h1>
<h1 class="all-caps all-caps-l">All Caps L</h1>
<h1 class="all-caps">All Caps M</h1>
<h1 class="all-caps all-caps-s">All Caps S</h1>
<h1 class="all-caps all-caps-xs">All Caps XS</h1>
<h1 class="all-caps all-caps-xxs">All Caps XXS</h1>

### HTML

```html
<h1 class="all-caps all-caps-xxl">...</h1>
<h1 class="all-caps all-caps-xl">...</h1>
<h1 class="all-caps all-caps-l">...</h1>
<h1 class="all-caps">...</h1>
<h1 class="all-caps all-caps-s">...</h1>
<h1 class="all-caps all-caps-xs">...</h1>
<h1 class="all-caps all-caps-xxs">...</h1>
```

### CSS

```scss
--all-caps-xxl-font-size: calc(var(--all-caps-xl-font-size) + 0.0625rem);
--all-caps-xl-font-size: calc(var(--all-caps-l-font-size) + 0.0625rem);
--all-caps-l-font-size: calc(var(--all-caps-font-size) + 0.0625rem);
--all-caps-s-font-size: calc(var(--all-caps-font-size) - 0.0625rem);
--all-caps-xs-font-size: calc(var(--all-caps-s-font-size) - 0.0625rem);
--all-caps-xxs-font-size: calc(var(--all-caps-xs-font-size) - 0.0625rem);
```

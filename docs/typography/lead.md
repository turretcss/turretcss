---
layout: docs
title: Lead
description: null
---

## Example

<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>

### HTML

```html
<p class="lead">...</p>
```

### CSS

```scss
--lead-margin: 0.5em 0;
--lead-font-family: inherit;
--lead-font-weight: inherit;
--lead-font-size: 1.375rem;
--lead-font-style: normal;
--lead-color: inherit;
--lead-line-height: var(--line-height-xs);
--lead-text-transform: none;
--lead-letter-spacing: var(--letter-spacing);
```

## Sizes

<p class="lead lead-xxl">Lead XXL</p>
<p class="lead lead-xl">Lead XL</p>
<p class="lead lead-l">Lead L</p>
<p class="lead">Lead M</p>
<p class="lead lead-s">Lead S</p>
<p class="lead lead-xs">Lead XS</p>
<p class="lead lead-xxs">Lead XXS</p>

### HTML

```html
<p class="lead lead-xxl">...</p>
<p class="lead lead-xl">...</p>
<p class="lead lead-l">...</p>
<p class="lead">...</p>
<p class="lead lead-s">...</p>
<p class="lead lead-xs">...</p>
<p class="lead lead-xxs">...</p>
```

### CSS

```scss
--lead-xxl-font-size: calc(var(--lead-xl-font-size) + 0.125rem);
--lead-xl-font-size: calc(var(--lead-l-font-size) + 0.125rem);
--lead-l-font-size: calc(var(--lead-font-size) + 0.125rem);
--lead-s-font-size: calc(var(--lead-font-size) - 0.125rem);
--lead-xs-font-size: calc(var(--lead-s-font-size) - 0.125rem);
--lead-xxs-font-size: calc(var(--lead-xs-font-size) - 0.125rem);
```

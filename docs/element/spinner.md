---
layout: docs
title: Spinner
description: ""
---

## About

The `.spinner` class can be added to any element to add a `::before` pseudo element that has a spin animation and border styles to emulate a loading indicator.

## Example

<div class="max-width-xxs">
  <div class="media media-1 spinner"></div>
</div>

### HTML

```html
<div class="spinner">...</div>
```

### CSS

```scss
--spinner-width: 0.125rem;
--spinner-size: 1.75rem;
--spinner-speed: var(--speed-slow);
--spinner-background-color: color-mod(var(--black) alpha(10%));
--spinner-foreground-color: var(--white);
```

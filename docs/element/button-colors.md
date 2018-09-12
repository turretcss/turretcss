---
layout: docs
title: Button Colors
description: ""
---

## Shades

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

### Disabled

<div>
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

### HTML

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

### CSS

```scss
--button-white-color: var(--black);
--button-light-color: var(--dark);
--button-grey-color: var(--white);
--button-dark-color: var(--white);
--button-black-color: var(--white);
```

## Palettes

<div>
  <button class="button button-primary">Primary</button>
  <button class="button button-secondary">Secondary</button>
  <button class="button button-tertiary">Tertiary</button>
  <button class="button button-primary button-border">Primary</button>
  <button class="button button-secondary button-border">Secondary</button>
  <button class="button button-tertiary button-border">Tertiary</button>
</div>

### Disabled

<div>
  <button class="button button-primary" disabled>Primary</button>
  <button class="button button-secondary" disabled>Secondary</button>
  <button class="button button-tertiary" disabled>Tertiary</button>
  <button class="button button-primary button-border" disabled>Primary</button>
  <button class="button button-secondary button-border" disabled>Secondary</button>
  <button class="button button-tertiary button-border" disabled>Tertiary</button>
</div>

### HTML

```html
<button class="button button-primary">...</button>
<button class="button button-secondary">...</button>
<button class="button button-tertiary">...</button>
<button class="button button-primary button-border">...</button>
<button class="button button-secondary button-border">...</button>
<button class="button button-tertiary button-border">...</button>
```

### CSS

```scss
--button-primary-color: var(--white);
--button-secondary-color: var(--white);
--button-tertiary-color: var(--white);
```

## Indicators

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

### Disabled

<div>
  <button class="button error" disabled>Error</button>
  <button class="button warning" disabled>Warning</button>
  <button class="button success" disabled>Success</button>
  <button class="button info" disabled>Info</button>
  <button class="button error button-border" disabled>Error</button>
  <button class="button warning button-border" disabled>Warning</button>
  <button class="button success button-border" disabled>Success</button>
  <button class="button info button-border" disabled>Info</button>
</div>

### HTML

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

### CSS

```scss
--button-error-color: var(--white);
--button-warning-color: var(--white);
--button-success-color: var(--white);
--button-info-color: var(--white);
```

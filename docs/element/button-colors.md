---
layout: docs
title: Button Colors
description: null
---

## Shades

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-white">White</button>
    </li>
    <li>
      <button class="button button-light">Light</button>
    </li>
    <li>
      <button class="button button-grey">Grey</button>
    </li>
    <li>
      <button class="button button-dark">Dark</button>
    </li>
    <li>
      <button class="button button-black">Black</button>
    </li>
    <li>
      <button class="button button-white button-border">White</button>
    </li>
    <li>
      <button class="button button-light button-border">Light</button>
    </li>
    <li>
      <button class="button button-grey button-border">Grey</button>
    </li>
    <li>
      <button class="button button-dark button-border">Dark</button>
    </li>
    <li>
      <button class="button button-black button-border">Black</button>
    </li>
    <li>
      <button class="button button-white button-text">White</button>
    </li>
    <li>
      <button class="button button-light button-text">Light</button>
    </li>
    <li>
      <button class="button button-grey button-text">Grey</button>
    </li>
    <li>
      <button class="button button-dark button-text">Dark</button>
    </li>
    <li>
      <button class="button button-black button-text">Black</button>
    </li>
  </ul>
</div>

### Disabled

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-white" disabled>White</button>
    </li>
    <li>
      <button class="button button-light" disabled>Light</button>
    </li>
    <li>
      <button class="button button-grey" disabled>Grey</button>
    </li>
    <li>
      <button class="button button-dark" disabled>Dark</button>
    </li>
    <li>
      <button class="button button-black" disabled>Black</button>
    </li>
    <li>
      <button class="button button-white button-border" disabled>White</button>
    </li>
    <li>
      <button class="button button-light button-border" disabled>Light</button>
    </li>
    <li>
      <button class="button button-grey button-border" disabled>Grey</button>
    </li>
    <li>
      <button class="button button-dark button-border" disabled>Dark</button>
    </li>
    <li>
      <button class="button button-black button-border" disabled>Black</button>
    </li>
    <li>
      <button class="button button-white button-text" disabled>White</button>
    </li>
    <li>
      <button class="button button-light button-text" disabled>Light</button>
    </li>
    <li>
      <button class="button button-grey button-text" disabled>Grey</button>
    </li>
    <li>
      <button class="button button-dark button-text" disabled>Dark</button>
    </li>
    <li>
      <button class="button button-black button-text" disabled>Black</button>
    </li>
  </ul>
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
<button class="button button-white button-text">...</button>
<button class="button button-light button-text">...</button>
<button class="button button-grey button-text">...</button>
<button class="button button-dark button-text">...</button>
<button class="button button-black button-text">...</button>
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

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-primary">Primary</button>
    </li>
    <li>
      <button class="button button-secondary">Secondary</button>
    </li>
    <li>
      <button class="button button-tertiary">Tertiary</button>
    </li>
    <li>
      <button class="button button-primary button-border">Primary</button>
    </li>
    <li>
      <button class="button button-secondary button-border">Secondary</button>
    </li>
    <li>
      <button class="button button-tertiary button-border">Tertiary</button>
    </li>
    <li>
      <button class="button button-primary button-text">Primary</button>
    </li>
    <li>
      <button class="button button-secondary button-text">Secondary</button>
    </li>
    <li>
      <button class="button button-tertiary button-text">Tertiary</button>
    </li>
  </ul>
</div>

### Disabled

<div class="group group-xs">
  <ul>
    <li>
      <button class="button button-primary" disabled>Primary</button>
    </li>
    <li>
      <button class="button button-secondary" disabled>Secondary</button>
    </li>
    <li>
      <button class="button button-tertiary" disabled>Tertiary</button>
    </li>
    <li>
      <button class="button button-primary button-border" disabled>Primary</button>
    </li>
    <li>
      <button class="button button-secondary button-border" disabled>Secondary</button>
    </li>
    <li>
      <button class="button button-tertiary button-border" disabled>Tertiary</button>
    </li>
    <li>
      <button class="button button-primary button-text" disabled>Primary</button>
    </li>
    <li>
      <button class="button button-secondary button-text" disabled>Secondary</button>
    </li>
    <li>
      <button class="button button-tertiary button-text" disabled>Tertiary</button>
    </li>
  </ul>
</div>

### HTML

```html
<button class="button button-primary">...</button>
<button class="button button-secondary">...</button>
<button class="button button-tertiary">...</button>
<button class="button button-primary button-border">...</button>
<button class="button button-secondary button-border">...</button>
<button class="button button-tertiary button-border">...</button>
<button class="button button-primary button-text">...</button>
<button class="button button-secondary button-text">...</button>
<button class="button button-tertiary button-text">...</button>
```

### CSS

```scss
--button-primary-color: var(--white);
--button-secondary-color: var(--white);
--button-tertiary-color: var(--white);
```

## Indicators

<div class="group group-xs">
  <ul>
    <li>
      <button class="button error">Error</button>
    </li>
    <li>
      <button class="button warning">Warning</button>
    </li>
    <li>
      <button class="button success">Success</button>
    </li>
    <li>
      <button class="button info">Info</button>
    </li>
    <li>
      <button class="button error button-border">Error</button>
    </li>
    <li>
      <button class="button warning button-border">Warning</button>
    </li>
    <li>
      <button class="button success button-border">Success</button>
    </li>
    <li>
      <button class="button info button-border">Info</button>
    </li>
    <li>
      <button class="button error button-text">Error</button>
    </li>
    <li>
      <button class="button warning button-text">Warning</button>
    </li>
    <li>
      <button class="button success button-text">Success</button>
    </li>
    <li>
      <button class="button info button-text">Info</button>
    </li>
  </ul>
</div>

### Disabled

<div class="group group-xs">
  <ul>
    <li>
      <button class="button error" disabled>Error</button>
    </li>
    <li>
      <button class="button warning" disabled>Warning</button>
    </li>
    <li>
      <button class="button success" disabled>Success</button>
    </li>
    <li>
      <button class="button info" disabled>Info</button>
    </li>
    <li>
      <button class="button error button-border" disabled>Error</button>
    </li>
    <li>
      <button class="button warning button-border" disabled>Warning</button>
    </li>
    <li>
      <button class="button success button-border" disabled>Success</button>
    </li>
    <li>
      <button class="button info button-border" disabled>Info</button>
    </li>
    <li>
      <button class="button error button-text" disabled>Error</button>
    </li>
    <li>
      <button class="button warning button-text" disabled>Warning</button>
    </li>
    <li>
      <button class="button success button-text" disabled>Success</button>
    </li>
    <li>
      <button class="button info button-text" disabled>Info</button>
    </li>
  </ul>
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
<button class="button error button-text">...</button>
<button class="button warning button-text">...</button>
<button class="button success button-text">...</button>
<button class="button info button-text">...</button>
```

### CSS

```scss
--button-error-color: var(--white);
--button-warning-color: var(--white);
--button-success-color: var(--white);
--button-info-color: var(--white);
```

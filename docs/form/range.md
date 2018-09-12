---
layout: docs
title: Range
description: ""
---

## Example

<form>
  <div class="field">
    <input type="range" min="0" max="100" />
  </div>
  <div class="field">
    <input type="range" min="0" max="100" disabled />
  </div>
</form>

### HTML

```html
<input type="range" min="0" max="100" />
<input type="range" min="0" max="100" disabled />
```

### CSS

```scss
--range-margin: var(--field-margin);
--range-padding: 0;
--range-height: 0.625rem;

--range-thumb-width: 2em;
--range-thumb-height: var(--range-thumb-width);
--range-thumb-background: var(--input-background);
--range-thumb-border-width: var(--input-border-width);
--range-thumb-border-style: var(--input-border-style);
--range-thumb-border-color: var(--input-border-color);
--range-thumb-border-radius: 50%;
--range-thumb-box-shadow: var(--input-box-shadow);

--range-thumb-hover-background: var(--input-hover-background);
--range-thumb-hover-border-color: var(--input-hover-border-color);
--range-thumb-hover-box-shadow: var(--input-hover-box-shadow);

--range-thumb-focus-background: var(--input-focus-background);
--range-thumb-focus-border-color: var(--input-focus-border-color);
--range-thumb-focus-box-shadow: var(--input-focus-box-shadow);

--range-track-background: var(--input-border-color);
--range-track-border-width: 0;
--range-track-border-style: none;
--range-track-border-color: none;
--range-track-border-radius: var(--input-border-radius);
--range-track-box-shadow: var(--input-box-shadow);

--range-track-hover-background: var(--input-hover-border-color);
--range-track-hover-border-color: none;
--range-track-hover-box-shadow: var(--input-hover-box-shadow);

--range-track-focus-background: var(--input-focus-border-color);
--range-track-focus-border-color: none;
--range-track-focus-box-shadow: var(--input-focus-box-shadow);
```

---
layout: docs
title: Select
description: ""
permalink: /docs/form/select/
---

## Example

<form>
  <div class="field">
    <label class="select" for="select">
      <select id="select">
        <option>Select Field</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">
    <label class="select" for="select">
      <select id="select" disabled>
        <option>Select Field</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
</form>

### HTML

```html
<label class="select" for="select">
  <select id="select">...</select>
</label>

<label class="select" for="select">
  <select id="select" disabled>...</select>
</label>
```

### CSS

```scss
--select-margin: var(--input-margin);
--select-padding: var(--input-padding);
--select-height: var(--input-height);
--select-font-family: var(--input-font-family);
--select-font-weight: var(--input-font-weight);
--select-font-size: var(--input-font-size);
--select-color: var(--input-color);
--select-line-height: auto;
--select-background: var(--input-background);
--select-border-width: var(--input-border-width);
--select-border-style: var(--input-border-style);
--select-border-color: var(--input-border-color);
--select-border-radius: var(--border-radius);
--select-box-shadow: var(--input-box-shadow);

--select-arrow-size: 4px;
--select-arrow-background: var(--dark);

--select-hover-color: var(--input-hover-color);
--select-hover-background: var(--input-hover-background);
--select-hover-border-color: var(--input-hover-border-color);
--select-hover-box-shadow: var(--input-hover-box-shadow);

--select-focus-color: var(--input-focus-color);
--select-focus-background: var(--input-focus-background);
--select-focus-border-color: var(--input-focus-border-color);
--select-focus-box-shadow: var(--input-focus-box-shadow);

--select-disabled-color: var(--input-disabled-color);
--select-disabled-background: var(--input-disabled-background);
--select-disabled-border-color: var(--input-disabled-border-color);
```

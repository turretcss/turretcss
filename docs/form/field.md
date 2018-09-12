---
layout: docs
title: Field
description: The field is a container that wraps an label and input in a form to normalise margins.
---

## Example

<div class="field">
  <label for="field">Label</label>
  <input type="email" id="field" placeholder="Input">
</div>

### HTML

```html
<div class="field">...</div>
```

### CSS

```scss
--field-margin: var(--space-xs) 0;
```

## Field Float Label

<div class="field field-float-label">
  <input type="email" id="field" placeholder="Name">
  <label for="field">Name</label>
</div>

### HTML

```html
<div class="field field-float-label">
  <input type="text" id="field">
  <label for="field">...</label>
</div>
```

### CSS

```scss
--field-float-label-padding: 0.25em;
```

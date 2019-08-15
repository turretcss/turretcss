---
layout: docs
title: Field
description: The field is a container that wraps an label and input in a form to normalise margins.
---

## Example

<p class="field">
  <label for="field">Label</label>
  <input type="email" id="field" placeholder="Input">
</p>

### HTML

```html
<p class="field">...</p>
```

### CSS

```scss
--field-margin: var(--space-xs) 0;
```

## Field Float Label

<p class="field field-float-label">
  <input type="email" id="field" placeholder="Name">
  <label for="field">Name</label>
</p>

### HTML

```html
<p class="field field-float-label">
  <input type="text" id="field" />
  <label for="field">...</label>
</p>
```

### CSS

```scss
--field-float-label-padding: 0.25em;
```

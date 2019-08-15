---
layout: docs
title: Fieldset
description: null
---

## Example

<form>
  <fieldset>
    <p class="field">
      <label for="fieldset-email">Email</label>
      <input type="email" id="fieldset-email" placeholder="Enter Email">
    </p>
    <p class="field">
      <label for="fieldset-password">Password</label>
      <input type="password" id="fieldset-password" placeholder="Enter Password">
    </p>
    <p class="field">
      <button type="submit" class="button">Submit</button>
      <button type="reset" class="button">Reset</button>
    </p>
  </fieldset>
</form>

### HTML

```html
<fieldset>...</fieldset>
```

### CSS

```scss
--fieldset-margin: var(--field-margin);
--fieldset-padding: var(--space-xs);
--fieldset-border-width: var(--border-width);
--fieldset-border-style: var(--border-style);
--fieldset-border-color: var(--border-color);
--fieldset-border-radius: var(--border-radius);
```

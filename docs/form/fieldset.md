---
layout: docs
title: Fieldset
description: null
---

## Example

<form>
  <fieldset>
    <div class="field">
      <label for="fieldset-email">Email</label>
      <input type="email" id="fieldset-email" placeholder="Enter Email">
    </div>
    <div class="field">
      <label for="fieldset-password">Password</label>
      <input type="password" id="fieldset-password" placeholder="Enter Password">
    </div>
    <div class="field">
      <button type="submit" class="button">Submit</button>
      <button type="reset" class="button">Reset</button>
    </div>
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

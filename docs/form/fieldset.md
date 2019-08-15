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
--fieldset-padding: 0;
--fieldset-border-width: 0;
--fieldset-border-style: none;
--fieldset-border-color: transparent;
--fieldset-border-radius: 0;
```

---
layout: docs
title: Form
page_title: Form - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to turretcss's default styling of form elements including examples of input types and sizes, input-groups, controls, and selects.
---

## Example

<form>
  <p class="field">
    <label for="form-simple-email">Email</label>
    <input type="email" id="form-simple-email" placeholder="Enter Email">
  </p>
  <p class="field">
    <label for="form-simple-password">Password</label>
    <input type="password" id="form-simple-password" placeholder="Enter Password">
  </p>
  <p class="field">
    <label class="control checkbox">
      <input type="checkbox" name="checkbox" checked="true">
      <span class="control-indicator"></span>
      <span class="control-label">I agree to checking this checkbox</span>
    </label>
  </p>
  <p class="field">
    <button type="submit" class="button">Submit</button>
    <button type="reset" class="button">Reset</button>
  </p>
</form>

### HTML

```html
<form>
  <p class="field">
    <label for="form-simple-email">Email</label>
    <input type="email" id="form-simple-email" placeholder="Enter Email" />
  </p>
  <p class="field">
    <label for="form-simple-password">Password</label>
    <input type="password" id="form-simple-password" placeholder="Enter Password" />
  </p>
  <p class="field">
    <label class="control checkbox">
      <input type="checkbox" name="checkbox" checked="true" />
      <span class="control-indicator"></span>
      <span class="control-label">I agree to checking this checkbox</span>
    </label>
  </p>
  <p class="field">
    <button type="submit" class="button">Submit</button>
    <button type="reset" class="button">Reset</button>
  </p>
</form>
```

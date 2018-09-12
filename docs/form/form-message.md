---
layout: docs
title: Form Message
description: ""
permalink: /docs/form/form-message/
---

## Example

<form>
  <div class="field">
    <label for="form-message-title">Title</label>
    <input type="text" id="form-message-title" placeholder="Title">
    <p class="form-message">Form message</p>
  </div>
  <div class="field">
    <label for="form-message-first-name">First Name</label>
    <input type="text" id="form-message-first-name" placeholder="Enter First Name">
    <p class="form-message success">Form message success</p>
  </div>
  <div class="field">
    <label for="form-message-last-name">Last Name</label>
    <input type="text" id="form-message-last-name" placeholder="Enter Last Name">
    <p class="form-message error">Form message error</p>
  </div>
  <div class="field">
    <label for="form-message-email">Email</label>
    <input type="email" id="form-message-email" placeholder="Enter Email">
    <p class="form-message warning">Form message warning</p>
  </div>
  <div class="field">
    <label for="form-message-password">Password</label>
    <input type="password" id="form-message-password" placeholder="Enter Password">
    <p class="form-message info">Form message info</p>
  </div>
</form>

### HTML

```html
<p class="form-message">...</p>
<p class="form-message success">...</p>
<p class="form-message error">...</p>
<p class="form-message warning">...</p>
<p class="form-message info">...</p>
```

### CSS

```scss
--form-message-margin: var(--label-margin);
--form-message-font-family: var(--paragraph-font-family);
--form-message-font-weight: var(--paragraph-font-weight);
--form-message-font-size: var(--font-size-s);
--form-message-color: var(--paragraph-color);
--form-message-line-height: var(--paragraph-line-height);
```

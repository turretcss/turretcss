---
layout: docs
title: Input Sizes
description: null
---

## Example

<form>
  <p class="field">
    <input class="input-xxl" type="text" placeholder="Input XXL">
  </p>
  <p class="field">
    <input class="input-xl" type="text" placeholder="Input XL">
  </p>
  <p class="field">
    <input class="input-l" type="text" placeholder="Input L">
  </p>
  <p class="field">
    <input type="text" placeholder="Input M">
  </p>
  <p class="field">
    <input class="input-s" type="text" placeholder="Input S">
  </p>
  <p class="field">
    <input class="input-xs" type="text" placeholder="Input XS">
  </p>
  <p class="field">
    <input class="input-xxs" type="text" placeholder="Input XXS">
  </p>
</form>

### HTML

```html
<input class="input-xxl" type="text" />
<input class="input-xl" type="text" />
<input class="input-l" type="text" />
<input type="text" />
<input class="input-s" type="text" />
<input class="input-xs" type="text" />
<input class="input-xxs" type="text" />
```

### CSS

```scss
--input-xxl-height: var(--height-xxl);
--input-xxl-font-size: var(--font-size-xxl);

--input-xl-height: var(--height-xl);
--input-xl-font-size: var(--font-size-xl);

--input-l-height: var(--height-l);
--input-l-font-size: var(--font-size-l);

--input-s-height: var(--height-s);
--input-s-font-size: var(--font-size-s);

--input-xs-height: var(--height-xs);
--input-xs-font-size: var(--font-size-xs);

--input-xxs-height: var(--height-xxs);
--input-xxs-font-size: var(--font-size-xxs);
```

---
layout: docs
title: Control Sizes
description: 
permalink: /docs/form/control-sizes/
---

## Example

### Checkbox

<form>
  <label class="control control-xxl checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox XXL</span>
  </label>
  <label class="control control-xl checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox XL</span>
  </label>
  <label class="control control-l checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox L</span>
  </label>
  <label class="control checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox M</span>
  </label>
  <label class="control control-s checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox S</span>
  </label>
  <label class="control control-xs checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox XS</span>
  </label>
  <label class="control control-xxs checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox XXS</span>
  </label>
</form>

### Radio

<form>
  <label class="control control-xxl radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio XXL</span>
  </label>
  <label class="control control-xl radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio XL</span>
  </label>
  <label class="control control-l radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio L</span>
  </label>
  <label class="control radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio M</span>
  </label>
  <label class="control control-s radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio S</span>
  </label>
  <label class="control control-xs radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio XS</span>
  </label>
  <label class="control control-xxs radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio XXS</span>
  </label>
</form>

### Switch

<form>
  <label class="control control-xxl switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch XXL</span>
  </label>
  <label class="control control-xl switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch XL</span>
  </label>
  <label class="control control-l switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch L</span>
  </label>
  <label class="control switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch M</span>
  </label>
  <label class="control control-s switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch S</span>
  </label>
  <label class="control control-xs switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch XS</span>
  </label>
  <label class="control control-xxs switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch XXS</span>
  </label>
</form>

### HTML

```html
<label class="control control-xxl">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control control-xl">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control control-l">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control control-s">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control control-xs">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control control-xxs">
  <input type="..." name="...">
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### CSS

```scss
--control-xxl-font-size: var(--font-size-xxl);
--control-xxl-indicator-size: 1.75rem;

--control-xl-font-size: var(--font-size-xl);
--control-xl-indicator-size: 1.625rem;

--control-l-font-size: var(--font-size-l);
--control-l-indicator-size: 1.5rem;

--control-s-font-size: var(--font-size-s);
--control-s-indicator-size: 1.25rem;

--control-xs-font-size: var(--font-size-xs);
--control-xs-indicator-size: 1.125rem;

--control-xxs-font-size: var(--font-size-xxs);
--control-xxs-indicator-size: 1rem;
```

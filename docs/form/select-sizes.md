---
layout: docs
title: Select Sizes
description: null
---

## Example

<form>
  <div class="field">  
    <label class="select select-xxl" for="select-xxl">
      <select id="select-xxl">
        <option>Select XXL</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-xl" for="select-xl">
      <select id="select-xl">
        <option>Select XL</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-l" for="select-l">
      <select id="select-l">
        <option>Select L</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-m" for="select-m">
      <select id="select-m">
        <option>Select M</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-s" for="select-s">
      <select id="select-s">
        <option>Select S</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-xs" for="select-xs">
      <select id="select-xs">
        <option>Select XS</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-xxs" for="select-xxs">
      <select id="select-xxs">
        <option>Select XXS</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
</form>

### HTML

```html
<label class="select select-xxl" for="select-xxl">
  <select id="select-xxl">...</select>
</label>

<label class="select select-xl" for="select-xl">
  <select id="select-xl">...</select>
</label>

<label class="select select-l" for="select-l">
  <select id="select-l">...</select>
</label>

<label class="select" for="select-m">
  <select id="select-m">...</select>
</label>

<label class="select select-s" for="select-s">
  <select id="select-s">...</select>
</label>

<label class="select select-xs" for="select-xs">
  <select id="select-xs">...</select>
</label>

<label class="select select-xxs" for="select-xxs">
  <select id="select-xxs">...</select>
</label>
```

### CSS

```scss
--select-xxl-height: var(--input-xxl-height);
--select-xxl-font-size: var(--input-xxl-font-size);

--select-xl-height: var(--input-xl-height);
--select-xl-font-size: var(--input-xl-font-size);

--select-l-height: var(--input-l-height);
--select-l-font-size: var(--input-l-font-size);

--select-s-height: var(--input-s-height);
--select-s-font-size: var(--input-s-font-size);

--select-xs-height: var(--input-xs-height);
--select-xs-font-size: var(--input-xs-font-size);

--select-xxs-height: var(--input-xxs-height);
--select-xxs-font-size: var(--input-xxs-font-size);
```

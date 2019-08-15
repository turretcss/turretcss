---
layout: docs
title: Control
description: null
---

## Example

<form>
  <label class="control checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>
  <label class="control radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>
  <label class="control switch">
    <input type="checkbox" name="switch">
    <span class="control-indicator"></span>
    <span class="control-label">Switch</span>
  </label>
</form>

### HTML

```html
<label class="control checkbox">
  <input type="checkbox" name="checkbox" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control radio">
  <input type="radio" name="radio" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>

<label class="control switch">
  <input type="checkbox" name="checkbox" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### CSS

```scss
--control-margin: var(--input-margin);
--control-padding: 0;
--control-font-family: var(--input-font-family);
--control-font-weight: var(--input-font-weight);
--control-font-size: var(--input-font-size);
--control-font-style: var(--input-font-style);
--control-color: var(--input-color);
--control-line-height: var(--line-height-xs);
--control-text-transform: none;
--control-letter-spacing: var(--letter-spacing);
--control-text-transform: var(--input-text-transform);
--control-letter-spacing: var(--input-letter-spacing);

--control-hover-indicator-background: var(--input-hover-background);
--control-hover-indicator-border-color: var(--input-hover-border-color);
--control-hover-indicator-box-shadow: var(--input-hover-box-shadow);

--control-focus-indicator-background: var(--input-focus-background);
--control-focus-indicator-border-color: var(--input-focus-border-color);
--control-focus-indicator-box-shadow: var(--input-focus-box-shadow);

--control-checked-indicator-background: var(--primary);
--control-checked-indicator-border: var(--control-indicator-border-width) var(--control-indicator-border-style) var(--control-checked-indicator-background);
--control-checked-label-color: var(--control-label-color);

--control-indicator-size: 1.375rem;
--control-indicator-background: var(--input-background);
--control-indicator-border-width: var(--input-border-width);
--control-indicator-border-style: var(--input-border-style);
--control-indicator-border-color: var(--input-border-color);
--control-indicator-box-shadow: var(--input-box-shadow);

--control-label-margin: 0 0 0 0.75em;
--control-label-color: inherit;

--control-inline-margin-right: 2rem;
```

## Checkbox

<form>
  <label class="control checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>
</form>

### HTML

```html
<label class="control checkbox">
  <input type="checkbox" name="checkbox" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### CSS

```scss
--checkbox-indicator-border-radius: var(--input-border-radius);
```

## Radio

<form>
  <label class="control radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>
</form>

### HTML

```html
<label class="control radio">
  <input type="radio" name="radio" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### CSS

```scss
--radio-indicator-size: 0.5em;
--radio-indicator-background: var(--input-background);
--radio-indicator-border-radius: var(--control-indicator-size);
```

## Switch

<form>
  <label class="control switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch</span>
  </label>
</form>

### HTML

```html
<label class="control switch">
  <input type="checkbox" name="switch" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### CSS

```scss
--switch-indicator-background: var(--control-indicator-background);
--switch-indicator-border-radius: var(--control-indicator-size);
```

## Inline

### Checkbox Inline

<form>
  <label class="control control-inline checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>
  <label class="control control-inline checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>
  <label class="control control-inline checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>
</form>

```html
<label class="control control-inline checkbox">
  <input type="checkbox" name="checkbox" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
<label class="control control-inline checkbox">
  <input type="checkbox" name="checkbox" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
<label class="control control-inline checkbox">
  <input type="checkbox" name="checkbox" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### Radio Inline

<form>
  <label class="control control-inline radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>
  <label class="control control-inline radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>
  <label class="control control-inline radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>
</form>

```html
<label class="control control-inline radio">
  <input type="radio" name="radio" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
<label class="control control-inline radio">
  <input type="radio" name="radio" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
<label class="control control-inline radio">
  <input type="radio" name="radio" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

### Switch Inline

<form>
  <label class="control control-inline switch">
    <input type="checkbox" name="switch">
    <span class="control-indicator"></span>
    <span class="control-label">Switch</span>
  </label>
  <label class="control control-inline switch">
    <input type="checkbox" name="switch">
    <span class="control-indicator"></span>
    <span class="control-label">Switch</span>
  </label>
  <label class="control control-inline switch">
    <input type="checkbox" name="switch">
    <span class="control-indicator"></span>
    <span class="control-label">Switch</span>
  </label>
</form>

```html
<label class="control control-inline switch">
  <input type="checkbox" name="switch" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
<label class="control control-inline switch">
  <input type="checkbox" name="switch" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
<label class="control control-inline switch">
  <input type="checkbox" name="switch" />
  <span class="control-indicator"></span>
  <span class="control-label">...</span>
</label>
```

---
layout: docs
title: Input
description: null
---

## Example

<form>
  <div class="field">
    <label for="input-text">Text Input</label>
    <input type="text" id="input-text" placeholder="Text">
  </div>
  <div class="field">
    <label for="input-disabled">Disabled</label>
    <input type="text" id="input-disabled" placeholder="Disabled" disabled="">
  </div>
  <div class="field">
    <label for="input-email">Email Input</label>
    <input type="email" id="input-email" placeholder="Email">
  </div>
  <div class="field">
    <label for="input-search">Search Input</label>
    <input type="search" id="input-search" placeholder="Search">
  </div>
  <div class="field">
    <label for="input-tel">Telephone Input</label>
    <input type="tel" id="input-tel" placeholder="Telephone">
  </div>
  <div class="field">
    <label for="input-url">URL Input</label>
    <input type="url" id="input-url" placeholder="https://">
  </div>
  <div class="field">
    <label for="input-password">Password Input</label>
    <input type="password" id="input-password" value="password">
  </div>
  <div class="field">
    <label for="input-file">File Input</label>
    <input type="file" id="input-file">
  </div>
  <div class="field">
    <label for="input-textarea">Textarea</label>
    <textarea id="input-textarea" cols="30" rows="5" placeholder="Textarea text"></textarea>
  </div>
  <div class="field">
    <label for="input-number">Number Input</label>
    <input type="number" id="input-number" min="0" max="10" placeholder="Enter a number form 0 to 10">
  </div>
  <div class="field">
    <label for="input-date">Date Input</label>
    <input type="date" id="input-date">
  </div>
  <div class="field">
    <label for="input-month">Month Input</label>
    <input type="month" id="input-month">
  </div>
  <div class="field">
    <label for="input-week">Week Input</label>
    <input type="week" id="input-week">
  </div>
  <div class="field">
    <label for="input-datetime">Datetime Input</label>
    <input type="datetime" id="input-datetime" placeholder="Enter a datetime string">
  </div>
  <div class="field">
    <label for="input-datetime-local">Datetime-local Input</label>
    <input type="datetime-local" id="input-datetime-local">
  </div>
  <div class="field">
    <label for="input-color">Color Input</label>
    <input type="color" id="input-color" value="#3455DB">
  </div>
  <div class="field">
    <input id="input-checkbox" type="checkbox" name="checkbox" value="Checkbox Input">
    <label for="input-checkbox">Checkbox Input</label>
  </div>
  <div class="field">
    <input id="input-radio" type="radio" name="radio" value="Radio Input">
    <label for="input-radio">Radio Input</label>
  </div>
</form>

### HTML

```html
<label for="input-text">Text Input</label>
<input type="text" id="input-text" placeholder="Text">

<label for="input-inverse">Inverse Input</label>
<input class="input-inverse" type="text" id="input-inverse" placeholder="Inverse">

<label for="input-disabled">Disabled</label>
<input type="text" id="input-disabled" placeholder="Disabled" disabled="">

<label for="input-email">Email Input</label>
<input type="email" id="input-email" placeholder="Email">

<label for="input-search">Search Input</label>
<input type="search" id="input-search" placeholder="Search">

<label for="input-tel">Telephone Input</label>
<input type="tel" id="input-tel" placeholder="Telephone">

<label for="input-url">URL Input</label>
<input type="url" id="input-url" placeholder="https://">

<label for="input-password">Password Input</label>
<input type="password" id="input-password" value="password">

<label for="input-file">File Input</label>
<input type="file" id="input-file">

<label for="input-textarea">Textarea</label>
<textarea id="input-textarea" cols="30" rows="5" placeholder="Textarea text"></textarea>

<label for="input-number">Number Input</label>
<input type="number" id="input-number" min="0" max="10" placeholder="Enter a number form 0 to 10">

<label for="input-date">Date Input</label>
<input type="date" id="input-date">

<label for="input-month">Month Input</label>
<input type="month" id="input-month">

<label for="input-week">Week Input</label>
<input type="week" id="input-week">

<label for="input-datetime">Datetime Input</label>
<input type="datetime" id="input-datetime" placeholder="Enter a datetime string">

<label for="input-datetime-local">Datetime-local Input</label>
<input type="datetime-local" id="input-datetime-local">

<label for="input-color">Color Input</label>
<input type="color" id="input-color" value="#3455DB">

<input id="input-checkbox" type="checkbox" name="checkbox" value="Checkbox Input">
<label for="input-checkbox">Checkbox Input</label>

<input id="input-radio" type="radio" name="radio" value="Radio Input">
<label for="input-radio">Radio Input</label>
```

### CSS

```scss
--input-margin: var(--label-margin);
--input-padding: 0 1em;
--input-height: var(--height-m);
--input-color: inherit;
--input-font-family: inherit;
--input-font-weight: inherit;
--input-font-size: var(--font-size-m);
--input-line-height: var(--line-height-m);
--input-background: var(--background);
--input-border-width: var(--border-width);
--input-border-style: var(--border-style);
--input-border-color: var(--border-color);
--input-border-radius: var(--border-radius);
--input-box-shadow: var(--box-shadow);

--input-placeholder-color: var(--input-color);
--input-placeholder-opacity: 0.5;

--input-hover-color: var(--input-color);
--input-hover-background: color-mod(var(--input-background) shade(2.5%));
--input-hover-border-color: color-mod(var(--input-border-color) shade(2.5%));
--input-hover-box-shadow: var(--hover-box-shadow);

--input-focus-color: var(--input-color);
--input-focus-background: color-mod(var(--input-background) shade(5%));
--input-focus-border-color: color-mod(var(--input-border-color) shade(5%));
--input-focus-box-shadow: var(--focus-box-shadow);

--input-disabled-color: var(--input-color);
--input-disabled-background: color-mod(var(--input-background) shade(5%));
--input-disabled-border-color: var(--input-border-color);

--textarea-padding: 1em;
--textarea-line-height: inherit;
```

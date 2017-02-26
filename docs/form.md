---
layout: docs
title: Form
page_title: Form - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to Turret's default styling of form elements including examples of input types and sizes, input-groups, controls, and selects.
permalink: /docs/form/
---

## Example

<form>
  <div class="field">
    <label for="form-simple-email">Email</label>
    <input type="email" id="form-simple-email" placeholder="Enter Email">
  </div>
  <div class="field">
    <label for="form-simple-password">Password</label>
    <input type="password" id="form-simple-password" placeholder="Enter Password">
  </div>
  <div class="field">
    <label class="control checkbox">
      <input type="checkbox" name="checkbox" checked="true">
      <span class="control-indicator"></span>
      <span class="control-label">I agree to checking this checkbox</span>
    </label>
  </div>
  <div class="field">
    <button type="submit" class="button margin-right-xs">Submit</button>
    <button type="reset" class="button">Reset</button>
  </div>
</form>

```html
<form>
  <div class="field">
    <label for="form-simple-email">Email</label>
    <input type="email" id="form-simple-email" placeholder="Enter Email">
  </div>
  <div class="field">
    <label for="form-simple-password">Password</label>
    <input type="password" id="form-simple-password" placeholder="Enter Password">
  </div>
  <div class="field">
    <label class="control checkbox">
      <input type="checkbox" name="checkbox" checked="true">
      <span class="control-indicator"></span>
      <span class="control-label">I agree to checking this checkbox</span>
    </label>
  </div>
  <div class="field">
    <button type="submit" class="button margin-right-xs">Submit</button>
    <button type="reset" class="button">Reset</button>
  </div>
</form>
```

## Field

The field is a `<div>` that wraps an label and input in a form to normalise margins.

<div class="field">
  <label for="field">Label</label>
  <input type="email" id="field" placeholder="Input">
</div>

```scss
--field-margin: var(--margin-s) 0;
```

```html
<div class="field">...</div>
```

### Field Float Label

<div class="field field-float-label">
  <input type="email" id="field" placeholder="Name">
  <label for="field">Name</label>
</div>

```scss
--field-float-label-padding: 0.25em;
```

```html
<div class="field field-float-label">
  <input type="text" id="field">
  <label for="field">...</label>
</div>
```

## Label

<form>
  <label for="input">Label</label>
</form>

```scss
--label-margin: 1rem 0;
--label-font-family: inherit;
--label-font-weight: inherit;
--label-font-size: var(--font-size-s);
--label-color: inherit;
--label-line-height: var(--line-height-m);
```

```html
<label for="input">...</label>
```

## Fieldset 

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
      <button type="submit" class="button margin-right-xs">Submit</button>
      <button type="reset" class="button">Reset</button>
    </div>
  </fieldset>
</form>

```scss
--fieldset-margin: var(--field-margin);
--fieldset-padding: var(--padding-s);
--fieldset-border: 1px solid var(--light);
```

```html
<fieldset>...</fieldset>
```

## Legend 

<form>
  <fieldset>
    <legend>Login</legend>
  </fieldset>
</form>

```scss
--legend-padding: 0.5em;
--legend-font-family: inherit;
--legend-font-weight: inherit;
--legend-font-size: var(--font-size-m);
--legend-color: inherit;
```

```html
<fieldset>
  <legend>...</legend>
</fieldset>
```


## Form Message

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
  <button type="submit" class="button">Submit</button>
</form>

```scss
--form-message-margin: var(--label-margin);
--form-message-font-family: var(--paragraph-font-family);
--form-message-font-weight: var(--paragraph-font-weight);
--form-message-font-size: var(--font-size-s);
--form-message-color: var(--paragraph-color);
--form-message-line-height: var(--paragraph-line-height);
```

```html
<p class="form-message">...</p>
<p class="form-message success">...</p>
<p class="form-message error">...</p>
<p class="form-message warning">...</p>
<p class="form-message info">...</p>
```

## Input

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
    <input type="url" id="input-url" placeholder="http://">
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
    <input id="input-checkbox" type="checkbox" name="checkbox" value="Checkbox Input">
    <label for="input-checkbox">Checkbox Input</label>
  </div>
  <div class="field">
    <input id="input-radio" type="radio" name="radio" value="Radio Input">
    <label for="input-radio">Radio Input</label>
  </div>
</form>

```scss
--input-margin: var(--label-margin);
--input-padding: 0 1em;
--input-height: var(--height-m);
--input-color: inherit;
--input-font-family: inherit;
--input-font-weight: inherit;
--input-font-size: var(--font-size-m);
--input-line-height: var(--line-height-m);
--input-background: var(--white);
--input-border-width: 1px;
--input-border-style: solid;
--input-border-color: var(--light);
--input-border-radius: var(--border-radius);

--input-placeholder-color: var(--input-color);
--input-placeholder-opacity: 0.5;

--input-hover-color: var(--input-color);
--input-hover-background: color(var(--input-background) shade(2%));
--input-hover-border-color: color(var(--light) shade(10%));

--input-focus-color: var(--input-color);
--input-focus-background: color(var(--input-background) shade(2%));
--input-focus-border-color: var(--primary);

--input-disabled-color: var(--input-color);
--input-disabled-background: color(var(--input-background) shade(5%));
--input-disabled-border-color: var(--input-border-color);

--textarea-padding: 1em;
--textarea-line-height: inherit;
```

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
<input type="url" id="input-url" placeholder="http://">

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

<input id="input-checkbox" type="checkbox" name="checkbox" value="Checkbox Input">
<label for="input-checkbox">Checkbox Input</label>

<input id="input-radio" type="radio" name="radio" value="Radio Input">
<label for="input-radio">Radio Input</label>
```

## Input Indicators

<form>
  <div class="field">
    <label for="error">Input Error</label>
    <input class="error" type="text" id="error" value="Input Error">
  </div>
  <div class="field">
    <label for="warning">Input Warning</label>
    <input class="warning" type="text" id="warning" value="Input Warning">
  </div>
  <div class="field">
    <label for="success">Input Success</label>
    <input class="success" type="text" id="success" value="Input Success">
  </div>
  <div class="field">
    <label for="info">Input Info</label>
    <input class="info" type="text" id="info" value="Input Info">
  </div>
</form>

```html
<label for="error">...</label>
<input class="error" type="text" id="error">

<label for="warning">...</label>
<input class="warning" type="text" id="warning">

<label for="success">...</label>
<input class="success" type="text" id="success">

<label for="info">...</label>
<input class="info" type="text" id="info">
```

## Input Sizes


<form>
  <div class="field">
    <input class="input-xl" type="text" placeholder="Input Extra Large">
  </div>
  <div class="field">
    <input class="input-l" type="text" placeholder="Input Large">
  </div>
  <div class="field">
    <input type="text" placeholder="Input Medium">
  </div>
  <div class="field">
    <input class="input-s" type="text" placeholder="Input Small">
  </div>
  <div class="field">
    <input class="input-xs" type="text" placeholder="Input Extra Small">
  </div>
</form>

```scss
--input-xl-padding: var(--input-padding);
--input-xl-height: var(--height-xl);
--input-xl-font-size: var(--font-size-xl);

--input-l-padding: var(--input-padding);
--input-l-height: var(--height-l);
--input-l-font-size: var(--font-size-l);

--input-s-padding: var(--input-padding);
--input-s-height: var(--height-s);
--input-s-font-size: var(--font-size-s);

--input-xs-padding: var(--input-padding);
--input-xs-height: var(--height-xs);
--input-xs-font-size: var(--font-size-xs);
```

```html
<input class="input-xl" type="text">
<input class="input-l" type="text">
<input type="text">
<input class="input-s" type="text">
<input class="input-xs" type="text">
```

## Input Group

<div class="input-group">
  <input type="text" placeholder="Enter Keyword...">
  <button class="button" type="submit">Submit</button>
</div>

```html
<div class="input-group">
  <input type="text">
  <button class="button" type="submit">...</button>
</div>
```

## Input Group Sizes

<form>
  <div class="field">
    <div class="input-group">
      <input class="input-xl" type="text" placeholder="Input Group Extra Large">
      <button class="button button-xl" type="submit">Submit</button>
    </div>
  </div>
  <div class="field">
    <div class="input-group">
      <input class="input-l" type="text" placeholder="Input Group Large">
      <button class="button button-l" type="submit">Submit</button>
    </div>
  </div>
  <div class="field">
    <div class="input-group">
      <input type="text" placeholder="Input Group Medium">
      <button class="button" type="submit">Submit</button>
    </div>
  </div>
  <div class="field">
    <div class="input-group">
      <input class="input-s" type="text" placeholder="Input Group Small">
      <button class="button button-s" type="submit">Submit</button>
    </div>
  </div>
  <div class="field">
    <div class="input-group">
      <input class="input-xs" type="text" placeholder="Input Group Extra Small">
      <button class="button button-xs" type="submit">Submit</button>
    </div>
  </div>
</form>

```html  
<div class="input-group">
  <input class="input-xl" type="text">
  <button class="button button-xl" type="submit">...</button>
</div>

<div class="input-group">
  <input class="input-l" type="text">
  <button class="button button-l" type="submit">...</button>
</div>

<div class="input-group">
  <input type="text">
  <button class="button" type="submit">...</button>
</div>

<div class="input-group">
  <input class="input-s" type="text">
  <button class="button button-s" type="submit">...</button>
</div>

<div class="input-group">
  <input class="input-xs" type="text">
  <button class="button button-xs" type="submit">...</button>
</div>
```

## Control

```scss
--control-margin: var(--input-margin);
--control-padding: 0;
--control-font-family: var(--input-font-family);
--control-font-weight: var(--input-font-weight);
--control-font-size: var(--input-font-size);
--control-color: var(--input-color);
--control-line-height: var(--input-line-height);

--control-hover-indicator-background: var(--input-hover-background);
--control-hover-indicator-border-color: var(--input-hover-border-color);

--control-focus-indicator-box-shadow: 0 0 0 1px var(--white), 0 0 0 2px var(--input-focus-border-color);

--control-checked-indicator-background: var(--primary);
--control-checked-indicator-border: 1px solid var(--primary);
--control-checked-label-color: var(--control-label-color);

--control-indicator-size: 1.5rem;
--control-indicator-background: var(--input-background);
--control-indicator-border-width: var(--input-border-width);
--control-indicator-border-style: var(--input-border-style);
--control-indicator-border-color: var(--input-border-color);

--control-label-margin: 0 0 0 1rem;
--control-label-color: inherit;

--control-inline-margin-right: 2rem;
```

### Checkbox

<form>
  <label class="control checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>
</form>

```scss
--checkbox-indicator-border-radius: var(--input-border-radius);
```

```html
<label class="control checkbox">
  <input type="checkbox" name="checkbox">
  <span class="control-indicator"></span>
  <span class="control-label">Checkbox</span>
</label>
```

### Radio

<form>
  <label class="control radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>
</form>

```scss
--radio-indicator-size: 0.5em;
--radio-indicator-background: var(--input-background);
--radio-indicator-border-radius: var(--control-indicator-size);
```

```html
<label class="control radio">
  <input type="radio" name="radio">
  <span class="control-indicator"></span>
  <span class="control-label">Radio</span>
</label>
```

### Switch

<form>
  <label class="control switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch</span>
  </label>
</form>

```scss
--switch-indicator-background: var(--control-indicator-background);
--switch-indicator-border-radius: var(--control-indicator-size);
```

```html
<label class="control switch">
  <input type="checkbox" name="checkbox">
  <span class="control-indicator"></span>
  <span class="control-label">Switch</span>
</label>
```

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
```

## Control Indicators

### Checkbox

<form>
  <label class="control checkbox error">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Error</span>
  </label>
  <label class="control checkbox warning">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Warning</span>
  </label>
  <label class="control checkbox success">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Success</span>
  </label>
  <label class="control checkbox info">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Info</span>
  </label>
</form>

```html
<label class="control checkbox error">...</label>
<label class="control checkbox warning">...</label>
<label class="control checkbox success">...</label>
<label class="control checkbox info">...</label>
```

### Radio

<form>
  <label class="control radio error">
    <input type="radio" name="radio 1" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Radio Error</span>
  </label>
  <label class="control radio warning">
    <input type="radio" name="radio 2" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Radio Warning</span>
  </label>
  <label class="control radio success">
    <input type="radio" name="radio 3" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Radio Succcess</span>
  </label>
  <label class="control radio info">
    <input type="radio" name="radio 4" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Radio Info</span>
  </label>
</form>

```html
<label class="control radio error">...</label>
<label class="control radio warning">...</label>
<label class="control radio success">...</label>
<label class="control radio info">...</label>
```

### Switch

<form>
  <label class="control switch error">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Switch Error</span>
  </label>
  <label class="control switch warning">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Switch Warning</span>
  </label>
  <label class="control switch success">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Switch Success</span>
  </label>
  <label class="control switch info">
    <input type="checkbox" name="checkbox" checked>
    <span class="control-indicator"></span>
    <span class="control-label">Switch Info</span>
  </label>
</form>

```html
<label class="control switch error">...</label>
<label class="control switch warning">...</label>
<label class="control switch success">...</label>
<label class="control switch info">...</label>
```


## Control Sizes

### Checkbox

<form>
  <label class="control control-xl checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Extra Large</span>
  </label>
  <label class="control control-l checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Large</span>
  </label>
  <label class="control checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Medium</span>
  </label>
  <label class="control control-s checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Small</span>
  </label>
  <label class="control control-xs checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox Extra Small</span>
  </label>
</form>

### Radio

<form>
  <label class="control control-xl radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio Extra Large</span>
  </label>
  <label class="control control-l radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio Large</span>
  </label>
  <label class="control radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio Medium</span>
  </label>
  <label class="control control-s radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio Small</span>
  </label>
  <label class="control control-xs radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio Extra Small</span>
  </label>
</form>

### Switch

<form>
  <label class="control control-xl switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch Extra Large</span>
  </label>
  <label class="control control-l switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch Large</span>
  </label>
  <label class="control switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch Medium</span>
  </label>
  <label class="control control-s switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch Small</span>
  </label>
  <label class="control control-xs switch">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Switch Extra Small</span>
  </label>
</form>

```scss
--control-xl-font-size: var(--font-size-xl);
--control-xl-indicator-size: 2rem;

--control-l-font-size: var(--font-size-l);
--control-l-indicator-size: 1.75rem;

--control-s-font-size: var(--font-size-s);
--control-s-indicator-size: 1.25rem;

--control-xs-font-size: var(--font-size-xs);
--control-xs-indicator-size: 1rem;
```

```html 
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
```

## Select

<form>
  <div class="field">
    <label class="select" for="select">
      <select id="select">
        <option>Select Field</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">
    <label class="select" for="select">
      <select id="select" disabled>
        <option>Select Field</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
</form>

```scss
--select-margin: var(--input-margin);
--select-padding: var(--input-padding);
--select-height: var(--input-height);
--select-font-family: var(--input-font-family);
--select-font-weight: var(--input-font-weight);
--select-font-size: var(--input-font-size);
--select-color: var(--input-color);
--select-line-height: auto;
--select-background: var(--input-background);
--select-border-width: var(--input-border-width);
--select-border-style: var(--input-border-style);
--select-border-color: var(--input-border-color);
--select-border-radius: var(--border-radius);

--select-arrow-size: 4px;
--select-arrow-background: var(--dark);

--select-hover-color: var(--input-hover-color);
--select-hover-background: var(--input-hover-background);
--select-hover-border-color: var(--input-hover-border-color);

--select-focus-color: var(--input-focus-color);
--select-focus-background: var(--input-focus-background);
--select-focus-border-color: var(--input-focus-border-color);

--select-disabled-color: var(--input-disabled-color);
--select-disabled-background: var(--input-disabled-background);
--select-disabled-border-color: var(--input-disabled-border-color);
```

```html
<label class="select" for="select">
  <select id="select">...</select>
</label>

<label class="select" for="select">
  <select id="select" disabled>...</select>
</label>
```

## Select Indicators

<form>
  <div class="field">
    <label class="select error" for="select-error">
      <select id="select-error">
        <option>Select Error</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">
    <label class="select warning" for="select-warning">
      <select id="select-warning">
        <option>Select Warning</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">
    <label class="select success" for="select-success">
      <select id="select-success">
        <option>Select Success</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">
    <label class="select info" for="select-info">
      <select id="select-info">
        <option>Select Info</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
</form>

```html
<label class="select error" for="select-error">
  <select id="select-error">...</select>
</label>

<label class="select warning" for="select-warning">
  <select id="select-warning">...</select>
</label>

<label class="select success" for="select-success">
  <select id="select-success">...</select>
</label>

<label class="select select-s" for="select-s">
  <select id="select-s">...</select>
</label>

<label class="select info" for="select-info">
  <select id="select-info">...</select>
</label>
```

## Select Sizes

<form>
  <div class="field">  
    <label class="select select-xl" for="select-xl">
      <select id="select-xl">
        <option>Select Extra Large</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-l" for="select-l">
      <select id="select-l">
        <option>Select Large</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-m" for="select-m">
      <select id="select-m">
        <option>Select Medium</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-s" for="select-s">
      <select id="select-s">
        <option>Select Small</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
  <div class="field">  
    <label class="select select-xs" for="select-xs">
      <select id="select-xs">
        <option>Select Extra Small</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
      </select>
    </label>
  </div>
</form>

```scss
--select-xl-padding: var(--input-xl-padding);
--select-xl-height: var(--input-xl-height);
--select-xl-font-size: var(--input-xl-font-size);

--select-l-padding: var(--input-l-padding);
--select-l-height: var(--input-l-height);
--select-l-font-size: var(--input-l-font-size);

--select-s-padding: var(--input-s-padding);
--select-s-height: var(--input-s-height);
--select-s-font-size: var(--input-s-font-size);

--select-xs-padding: var(--input-xs-padding);
--select-xs-height: var(--input-xs-height);
--select-xs-font-size: var(--input-xs-font-size);
```

```html 
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
```

## Range

<form>
  <div class="field">
    <input type="range" min="0" max="100" />
  </div>
  <div class="field">
    <input type="range" min="0" max="100" disabled />
  </div>
</form>

```html 
<input type="range" min="0" max="100" />
<input type="range" min="0" max="100" disabled />
```

```scss
--range-margin: var(--input-margin);
--range-padding: 0;

--range-thumb-width: 1.5rem;
--range-thumb-height: var(--range-thumb-width);
--range-thumb-background: var(--input-background);
--range-thumb-border-width: var(--input-border-width);
--range-thumb-border-style: var(--input-border-style);
--range-thumb-border-color: var(--input-border-color);
--range-thumb-border-radius: 50%;

--range-thumb-hover-background: var(--input-hover-background);
--range-thumb-hover-border-color: var(--input-hover-border-color);

--range-thumb-focus-background: var(--input-focus-background);
--range-thumb-focus-border-color: var(--input-focus-border-color);

--range-track-height: 0.5rem;
--range-track-background: var(--input-background);
--range-track-border-width: var(--input-border-width);
--range-track-border-style: var(--input-border-style);
--range-track-border-color: var(--input-border-color);
--range-track-border-radius: var(--input-border-radius);

--range-track-hover-background: var(--input-hover-background);
--range-track-hover-border-color: var(--input-hover-border-color);

--range-track-focus-background: var(--input-focus-background);
--range-track-focus-border-color: var(--input-focus-border-color);
```

## Range Indicators

<form>
  <input class="error" type="range" min="0" max="100" />
  <input class="warning" type="range" min="0" max="100" />
  <input class="success" type="range" min="0" max="100" />
  <input class="info" type="range" min="0" max="100" />
</form>

```html 
<input class="error" type="range" />
<input class="warning" type="range" />
<input class="success" type="range" />
<input class="info" type="range" />
```

## Range Sizes

<form>
  <input class="range-xl" type="range" min="0" max="100" />
  <input class="range-l" type="range" min="0" max="100" />
  <input type="range" min="0" max="100" />
  <input class="range-s" type="range" min="0" max="100" />
  <input class="range-xs" type="range" min="0" max="100" />
</form>

```html 
<input class="range-xl" type="range" />
<input class="range-l" type="range" />
<input type="range" />
<input class="range-s" type="range" />
<input class="range-xs" type="range" />
```

```scss
--range-xl-height: 1.25rem;
--range-l-height: 1rem;
--range-s-height: 0.5rem;
--range-xs-height: 0.25rem;
```

## Progress

<progress value="70" max="100">70%</progress>

```html 
<progress value="70" max="100">70%</progress>
```

```scss
--progress-margin: var(--input-margin);
--progress-height: 0.5rem;
--progress-background: var(--input-background);
--progress-border-width: var(--input-border-width);
--progress-border-style: var(--input-border-style);
--progress-border-color: var(--input-border-color);
--progress-border-radius: var(--input-border-radius);
```

## Progress Indicators

<progress class="error" value="70" max="100">70%</progress>
<progress class="warning" value="70" max="100">70%</progress>
<progress class="success" value="70" max="100">70%</progress>
<progress class="info" value="70" max="100">70%</progress>

```html 
<progress class="error">...</progress>
<progress class="warning">...</progress>
<progress class="success">...</progress>
<progress class="info">...</progress>
```

## Progress Sizes

<progress class="progress-xl" value="70" max="100">70%</progress>
<progress class="progress-l" value="70" max="100">70%</progress>
<progress value="70" max="100">70%</progress>
<progress class="progress-s" value="70" max="100">70%</progress>
<progress class="progress-xs" value="70" max="100">70%</progress>

```html 
<progress class="progress-xl">...</progress>
<progress class="progress-l">...</progress>
<progress>...</progress>
<progress class="progress-s">...</progress>
<progress class="progress-xs">...</progress>
```

```scss
--progress-xl-height: 1.5rem;
--progress-l-height: 1.25rem;
--progress-s-height: 0.75rem;
--progress-xs-height: 0.5rem;
```
---
layout: docs
title: Form
description: A guide to Turret's default styling of form elements including examples of input types and sizes, input-groups, radio and checkbox controls, and selects.
permalink: /docs/form/
---

## Form Examples

### Simple Form

<form role="form">
  <label for="form-simple-email">Email</label>
  <input type="email" id="form-simple-email" placeholder="Enter Email">
  <label for="form-simple-password">Password</label>
  <input type="password" id="form-simple-password" placeholder="Enter Password">
  <label class="control checkbox">
    <input type="checkbox" name="checkbox" checked="true">
    <span class="control-indicator"></span>
    <span class="control-label">I agree to checking this checkbox</span>
  </label>
  <button type="submit" class="button">Submit</button>
</form>

```html
<form role="form">
  <label for="form-simple-email">Email</label>
  <input type="email" id="form-simple-email" placeholder="Enter Email">
  <label for="form-simple-password">Password</label>
  <input type="password" id="form-simple-password" placeholder="Enter Password">
  <label class="control checkbox">
    <input type="checkbox" name="checkbox" checked="true">
    <span class="control-indicator"></span>
    <span class="control-label">I agree to checking this checkbox</span>
  </label>
  <button type="submit" class="button">Submit</button>
</form>
```

### Multi-Column Form

<form role="form">
  <div class="row">
    <div class="column-1-2">
      <label for="form-mulit-column-first-name">First Name</label>
      <input type="text" id="form-mulit-column-first-name" placeholder="Enter First Name">
    </div>
    <div class="column-1-2">
      <label for="form-mulit-column-last-name">Last Name</label>
      <input type="text" id="form-mulit-column-last-name" placeholder="Enter Last Name">
    </div>
    <div class="column-1-2">
      <label for="form-mulit-column-email">Email</label>
      <input type="email" id="form-mulit-column-email" placeholder="Enter Email">
    </div>
    <div class="column-1-2">
      <label for="form-mulit-column-password">Password</label>
      <input type="password" id="form-mulit-column-password" placeholder="Enter Password">
    </div>
    <div class="column-1">
      <button type="submit" class="button">Submit</button>
    </div>
  </div>
</form>

```html
<form role="form">
  <div class="row">
    <div class="column-1-2">
      <label for="form-mulit-column-first-name">First Name</label>
      <input type="text" id="form-mulit-column-first-name" placeholder="Enter First Name">
    </div>
    <div class="column-1-2">
      <label for="form-mulit-column-last-name">Last Name</label>
      <input type="text" id="form-mulit-column-last-name" placeholder="Enter Last Name">
    </div>
    <div class="column-1-2">
      <label for="form-mulit-column-email">Email</label>
      <input type="email" id="form-mulit-column-email" placeholder="Enter Email">
    </div>
    <div class="column-1-2">
      <label for="form-mulit-column-password">Password</label>
      <input type="password" id="form-mulit-column-password" placeholder="Enter Password">
    </div>
    <div class="column-1">
      <button type="submit" class="button">Submit</button>
    </div>
  </div>
</form>
```

## Labels 

```scss
// Label
@label-margin: 15px 0px;
@label-font-family: @semibold-font-family;
@label-font-weight: @semibold-font-weight;
@label-font-size: 1.2;
@label-color: @dark;
@label-line-height: @line-height-medium;
```

<form role="form">
  <label for="input">Label</label>
</form>

```html
<label for="input">Label</label>
```

## Fieldset 

```scss
// Fieldset
@fieldset-margin: 0;
@fieldset-padding: 20px;
@fieldset-border: 1px solid @grey;

// Feildset Legend
@fieldset-legend-padding: 10px;
@fieldset-legend-font-size: @font-size-medium;
@fieldset-legend-color: @grey;
```

<form role="form">
  <fieldset>
    <legend>Login</legend>
    <label for="fieldset-email">Email</label>
    <input type="email" id="fieldset-email" placeholder="Enter Email">
    <label for="fieldset-password">Password</label>
    <input type="password" id="fieldset-password" placeholder="Enter Password">
    <button type="submit" class="button">Submit</button>
  </fieldset>
</form>

```html
<fieldset>
  <legend>Login</legend>
  <label for="fieldset-email">Email</label>
  <input type="email" id="fieldset-email" placeholder="Enter Email">
  <label for="fieldset-password">Password</label>
  <input type="password" id="fieldset-password" placeholder="Enter Password">
  <button type="submit" class="button">Submit</button>
</fieldset>
```


## Form Messages

```scss
// Form Message
@form-message-margin: @label-margin;
@form-message-font-family: @paragraph-font-family;
@form-message-font-weight: @paragraph-font-weight;
@form-message-font-size: 1.2;
@form-message-color: @body-color;
@form-message-line-height: @paragraph-line-height;

// Form Message Indicators
@form-message-error-color: @error;
@form-message-warning-color: @warning;
@form-message-success-color: @success;
@form-message-info-color: @info;
```

<form role="form">
  <label for="form-message-title">Title</label>
  <input type="text" id="form-message-title" placeholder="Title">
  <p class="form-message">Form message</p>
  <label for="form-message-first-name">First Name</label>
  <input type="text" id="form-message-first-name" placeholder="Enter First Name">
  <p class="form-message success">Form message success</p>
  <label for="form-message-last-name">Last Name</label>
  <input type="text" id="form-message-last-name" placeholder="Enter Last Name">
  <p class="form-message error">Form message error</p>
  <label for="form-message-email">Email</label>
  <input type="email" id="form-message-email" placeholder="Enter Email">
  <p class="form-message warning">Form message warning</p>
  <label for="form-message-password">Password</label>
  <input type="password" id="form-message-password" placeholder="Enter Password">
  <p class="form-message info">Form message info</p>
  <button type="submit" class="button">Submit</button>
</form>

```html
<label for="form-message-title">Title</label>
<input type="text" id="form-message-title" placeholder="Title">
<p class="form-message">Form message</p>
<label for="form-message-first-name">First Name</label>
<input type="text" id="form-message-first-name" placeholder="Enter First Name">
<p class="form-message success">Form message success</p>
<label for="form-message-last-name">Last Name</label>
<input type="text" id="form-message-last-name" placeholder="Enter Last Name">
<p class="form-message error">Form message error</p>
<label for="form-message-email">Email</label>
<input type="email" id="form-message-email" placeholder="Enter Email">
<p class="form-message warning">Form message warning</p>
<label for="form-message-password">Password</label>
<input type="password" id="form-message-password" placeholder="Enter Password">
<p class="form-message info">Form message info</p>
```

## Input

```scss
// Input
@input-height: @height-medium;
@input-margin: @label-margin;
@input-padding: 0 16px;
@input-color: @body-color;
@input-font-family: @regular-font-family;
@input-font-weight: @regular-font-weight;
@input-font-size: @font-size-medium;
@input-line-height: @line-height-medium;
@input-background: @white;
@input-border: 1px solid @light-grey;
@input-border-radius: @border-radius;

// Input Focus
@input-focus-color: @input-color;
@input-focus-background: darken(@input-background, 2%);
@input-focus-border: 1px solid darken(@light-grey, 10%);

// Input Placeholder
@input-placeholder-font-family: @input-font-family;
@input-placeholder-font-size: @input-font-size;
@input-placeholder-color: fade(@input-color, 50%);
@input-placeholder-line-height: @input-line-height;
@input-placeholder-letter-spacing: 0px;
@input-placeholder-text-transform: none;

// Input Inverse
@input-inverse-color: @white;
@input-inverse-background: @inverse;
@input-inverse-border: none;
@input-inverse-focus-color: @input-inverse-color;
@input-inverse-focus-background: darken(@input-inverse-background, 2%);
@input-inverse-focus-border: @input-inverse-border;

// Input Disabled
@input-disabled-color: @light;
@input-disabled-background: @light;
@input-disabled-border: 1px solid darken(@light, 10%);

// Input Search
@input-search-border-radius: 20px;

// Textarea
@textarea-padding: 12px 16px;
@textarea-line-height: @line-height-medium;
```

<form role="form">

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

</form>

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

```scss
// Indicators
@input-error-color: @error;
@input-warning-color: @warning;
@input-success-color: @success;
@input-info-color: @info;
```

<form role="form">

  <label for="error">Input Error</label>
  <input class="error" type="text" id="error" value="Input Error">

  <label for="warning">Input Warning</label>
  <input class="warning" type="text" id="warning" value="Input Warning">

  <label for="success">Input Success</label>
  <input class="success" type="text" id="success" value="Input Success">

  <label for="info">Input Info</label>
  <input class="info" type="text" id="info" value="Input Info">

</form>

```html
<label for="error">Input Error</label>
<input class="error" type="text" id="error" value="Input Error">

<label for="warning">Input Warning</label>
<input class="warning" type="text" id="warning" value="Input Warning">

<label for="success">Input Success</label>
<input class="success" type="text" id="success" value="Input Success">

<label for="info">Input Info</label>
<input class="info" type="text" id="info" value="Input Info">
```

## Input Sizes

```scss
// Input Extra Large
@input-xlarge-padding: 0 30px;
@input-xlarge-height: @height-xlarge;
@input-xlarge-font-size: @font-size-xlarge;

// Input Large
@input-large-padding: 0 25px;
@input-large-height: @height-large;
@input-large-font-size: @font-size-large;

// Input Medium
@input-medium-padding: 0 16px;
@input-medium-height: @input-height;
@input-medium-font-size: @input-font-size;

// Input Small
@input-small-padding: 0 12px;
@input-small-height: @height-small;
@input-small-font-size: @font-size-small;

// Input Extra Small
@input-xsmall-padding: 0 8px;
@input-xsmall-height: @height-xsmall;
@input-xsmall-font-size: @font-size-xsmall;
```

<form role="form">
  
  <input class="input-xlarge" type="text" placeholder="Input Extra Large">
  <input class="input-large" type="text" placeholder="Input Large">
  <input class="input-medium" type="text" placeholder="Input Medium">
  <input class="input-small" type="text" placeholder="Input Small">
  <input class="input-xsmall" type="text" placeholder="Input Extra Small">

</form>

```html
<input class="input-xlarge" type="text" placeholder="Input Extra Large">
<input class="input-large" type="text" placeholder="Input Large">
<input class="input-medium" type="text" placeholder="Input Medium">
<input class="input-small" type="text" placeholder="Input Small">
<input class="input-xsmall" type="text" placeholder="Input Extra Small">
```

## Input Group

### Input Group

<div class="input-group">
  <input type="text" placeholder="Enter Keyword...">
  <span class="input-group-button">
    <button class="button" type="submit">Submit</button>
  </span>
</div>

```html
<div class="input-group">
  <input type="text" placeholder="Enter Keyword...">
  <span class="input-group-button">
    <button class="button" type="submit">Submit</button>
  </span>
</div>
```

### Input Group Search

<div class="input-group input-group-search">
  <input type="search" placeholder="Search">
  <span class="input-group-button">
    <button class="button" type="submit">Search</button>
  </span>
</div>

```html
<div class="input-group input-group-search">
  <input type="search" placeholder="Search">
  <span class="input-group-button">
    <button class="button" type="submit">Search</button>
  </span>
</div>
```

## Input Group Sizes

<form role="form">
  
  <div class="input-group">
    <input class="input-xlarge" type="text" placeholder="Input Group Extra Large">
    <span class="input-group-button input-group-button-xlarge">
      <button class="button" type="submit">Submit</button>
    </span>
  </div>
  <div class="input-group">
    <input class="input-large" type="text" placeholder="Input Group Large">
    <span class="input-group-button input-group-button-large">
      <button class="button" type="submit">Submit</button>
    </span>
  </div>
  <div class="input-group">
    <input class="input-medium" type="text" placeholder="Input Group Medium">
    <span class="input-group-button input-group-button-medium">
      <button class="button" type="submit">Submit</button>
    </span>
  </div>
  <div class="input-group">
    <input class="input-small" type="text" placeholder="Input Group Small">
    <span class="input-group-button input-group-button-small">
      <button class="button" type="submit">Submit</button>
    </span>
  </div>
  <div class="input-group">
    <input class="input-xsmall" type="text" placeholder="Input Group Extra Small">
    <span class="input-group-button input-group-button-xsmall">
      <button class="button" type="submit">Submit</button>
    </span>
  </div>

</form>

```html  
<div class="input-group">
  <input class="input-xlarge" type="text" placeholder="Input Group Extra Large">
  <span class="input-group-button input-group-button-xlarge">
    <button class="button" type="submit">Submit</button>
  </span>
</div>
<div class="input-group">
  <input class="input-large" type="text" placeholder="Input Group Large">
  <span class="input-group-button input-group-button-large">
    <button class="button" type="submit">Submit</button>
  </span>
</div>
<div class="input-group">
  <input class="input-medium" type="text" placeholder="Input Group Medium">
  <span class="input-group-button input-group-button-medium">
    <button class="button" type="submit">Submit</button>
  </span>
</div>
<div class="input-group">
  <input class="input-small" type="text" placeholder="Input Group Small">
  <span class="input-group-button input-group-button-small">
    <button class="button" type="submit">Submit</button>
  </span>
</div>
<div class="input-group">
  <input class="input-xsmall" type="text" placeholder="Input Group Extra Small">
  <span class="input-group-button input-group-button-xsmall">
    <button class="button" type="submit">Submit</button>
  </span>
</div>
```

## Control

```scss
// Control
@control-margin: @input-margin;
@control-padding: 0px 0px 0px 1.5em;
@control-color: @input-color;

// Control Indicator
@control-indicator-size: 16px;
@control-indicator-color: @primary;
@control-indicator-background: @input-background;
@control-indicator-border: @input-border;

// Control Checked
@control-indicator-checked-background: @primary;
@control-indicator-checked-border: 1px solid @primary;
@control-label-checked-color: @control-label-color;

// Control Label
@control-label-margin: 0px 0px 0px 10px;
@control-label-font-family: @input-font-family;
@control-label-font-weight: @input-font-weight;
@control-label-font-size: @label-font-size;
@control-label-color: @input-color;
@control-label-line-height: @input-line-height;

// Control Inline
@control-inline-margin-right: 20px;

// Checkbox
@checkbox-border-radius: none;

// Radio
@radio-border-radius: 50%;
```

### Checkbox

<form role="form">
  
  <label class="control checkbox">
    <input type="checkbox" name="checkbox">
    <span class="control-indicator"></span>
    <span class="control-label">Checkbox</span>
  </label>

</form>

```html
<label class="control checkbox">
  <input type="checkbox" name="checkbox">
  <span class="control-indicator"></span>
  <span class="control-label">Checkbox</span>
</label>
```

### Radio

<form role="form">
  
  <label class="control radio">
    <input type="radio" name="radio">
    <span class="control-indicator"></span>
    <span class="control-label">Radio</span>
  </label>

</form>

```html
<label class="control radio">
  <input type="radio" name="radio">
  <span class="control-indicator"></span>
  <span class="control-label">Radio</span>
</label>
```

### Checkbox Inline

<form role="form">
  
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

<form role="form">
  
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

## Select

```scss
// Select
@select-margin: @input-margin;
@select-padding: @input-padding;
@select-height: @input-height;
@select-font-family: @input-font-family;
@select-font-weight: @input-font-weight;
@select-font-size: @input-font-size;
@select-line-height: auto;
@select-color: @input-color;
@select-background: @input-background;
@select-border: @input-border;
@select-border-radius: @border-radius;

// Select Arrow
@select-arrow-size: 5px;
@select-arrow-background: @dark;

// Select Inverse
@select-inverse-color: @input-inverse-color;
@select-inverse-border: @input-inverse-border;
@select-inverse-background: @input-inverse-background;
@select-inverse-arrow-background: @white;
```

### Select

<form role="form">
  
  <label class="select" for="select">
    <select id="select">
      <option>Select Field</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>

</form>

```html
<label class="select" for="select">
  <select id="select">
    <option>Select Field</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
```

### Select Inverse

<form role="form">
  
  <label class="select select-inverse" for="select-inverse">
    <select id="select-inverse">
      <option>Select Field</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>

</form>

```html
<label class="select select-inverse" for="select-inverse">
  <select id="select-inverse">
    <option>Select Field</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
```

## Select Sizes

```scss
// Select Extra Large
@select-xlarge-padding: @input-xlarge-padding;
@select-xlarge-height: @input-xlarge-height;
@select-xlarge-font-size: @input-xlarge-font-size;

// Select Large
@select-large-padding: @input-large-padding;
@select-large-height: @input-large-height;
@select-large-font-size: @input-large-font-size;

// Select Medium
@select-medium-padding: @select-padding;
@select-medium-height: @select-height;
@select-medium-font-size: @select-font-size;

// Select Small
@select-small-padding: @input-small-padding;
@select-small-height: @input-small-height;
@select-small-font-size: @input-small-font-size;

// Select Extra Small
@select-xsmall-padding: @input-xsmall-padding;
@select-xsmall-height: @input-xsmall-height;
@select-xsmall-font-size: @input-xsmall-font-size;
```

<form role="form">
  
  <label class="select select-xlarge" for="select-xlarge">
    <select id="select-xlarge">
      <option>Select Extra Large</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>
  <label class="select select-large" for="select-large">
    <select id="select-large">
      <option>Select Large</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>
  <label class="select select-medium" for="select-medium">
    <select id="select-medium">
      <option>Select Medium</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>
  <label class="select select-small" for="select-small">
    <select id="select-small">
      <option>Select Small</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>
  <label class="select select-xsmall" for="select-xsmall">
    <select id="select-xsmall">
      <option>Select Extra Small</option>
      <option value="1">Option 01</option>
      <option value="2">Option 02</option>
    </select>
  </label>

</form>

```html 
<label class="select select-xlarge" for="select-xlarge">
  <select id="select-xlarge">
    <option>Select Extra Large</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
<label class="select select-large" for="select-large">
  <select id="select-large">
    <option>Select Large</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
<label class="select select-medium" for="select-medium">
  <select id="select-medium">
    <option>Select Medium</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
<label class="select select-small" for="select-small">
  <select id="select-small">
    <option>Select Small</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
<label class="select select-xsmall" for="select-xsmall">
  <select id="select-xsmall">
    <option>Select Extra Small</option>
    <option value="1">Option 01</option>
    <option value="2">Option 02</option>
  </select>
</label>
```

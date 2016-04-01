---
layout: docs
title: Elements
page_title: Elements - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to the use of HTML elements and Turret's default styling definitions. Includes buttons, button syles and sizes, button-groups, figure, media, nav, and tables.
permalink: /docs/elements/
---

## Button

Button styles are applied directly to the `<button>` element, button style and size modifiers do not require the button class added to the button element. Button styles can be set on an achor tag by using the .button class.

<div>
  <button>Button</button>
</div>

```scss
// Button
@button-padding: 1.3rem 2.2rem;
@button-height: @height-medium;
@button-font-family: @medium-font-family;
@button-font-weight: @medium-font-weight;
@button-font-size: @font-size-medium;
@button-color: @dark-grey;
@button-line-height: 1;
@button-letter-spacing: 0.05rem;
@button-text-align: center;
@button-text-transform: none;
@button-background: @white;
@button-border: 1px solid @light-grey;
@button-border-radius: @border-radius;

// Button Hover
@button-hover-color: @dark-grey;
@button-hover-background: darken(@button-background, 10%);
@button-hover-border: 1px solid darken(@light-grey, 10%);
```

```html
<button>Button</button>
```

### Button Disabled

<div>
  <button disabled>Button</button>
</div>

```scss
// Button Disabled
@button-disabled-opacity: 0.5;
```

```html
<button disabled>Button</button>
```

### Button Block

<div>
  <button class="button button-block">Button Block</button>
</div>

```scss
// Button Block
@button-block-text-align: center;
```

```html
<button class="button button-block">Button Block</button>
```

### Button Center

Note: for `.button-center` to work the containing element needs to have `text-align: center;`.

<div class="text-center">
  <button class="button button-center">Button Center</button>
</div>

```html
<button class="button button-center">Button Center</button>
```

## Button Styles

<div>
  <button class="button">Button</button>
  <button class="button button-inverse">Inverse</button>
  <button class="button button-primary">Primary</button>
  <button class="button button-secondary">Secondary</button>
  <button class="button button-tertiary">Tertiary</button>
  <button class="button button-border">Border</button>
  <button class="button button-text">Text</button>
  <br>
  <br>
</div>
<div>
  <button class="button" disabled>Button</button>
  <button class="button button-inverse" disabled>Inverse</button>
  <button class="button button-primary" disabled>Primary</button>
  <button class="button button-secondary" disabled>Secondary</button>
  <button class="button button-tertiary" disabled>Tertiary</button>
  <button class="button button-border" disabled>Border</button>
  <button class="button button-text" disabled>Text</button>
</div>

```scss
// Button Inverse
@button-inverse-color: @light;
@button-inverse-background: @inverse;
@button-inverse-border: none;
@button-inverse-hover-color: @button-inverse-color;
@button-inverse-hover-background: darken(@button-inverse-background, 10%);
@button-inverse-hover-border: none;

// Button Primary
@button-primary-color: @white;
@button-primary-background: @primary;
@button-primary-border: none;
@button-primary-hover-color: @button-primary-color;
@button-primary-hover-background: darken(@primary, 10%);
@button-primary-hover-border: none;

// Button Secondary
@button-secondary-color: @white;
@button-secondary-background: @secondary;
@button-secondary-border: none;
@button-secondary-hover-color: @button-secondary-color;
@button-secondary-hover-background: darken(@secondary, 10%);
@button-secondary-hover-border: none;

// Button Tertiary
@button-tertiary-color: @white;
@button-tertiary-background: @tertiary;
@button-tertiary-border: none;
@button-tertiary-hover-color: @button-tertiary-color;
@button-tertiary-hover-background: darken(@tertiary, 10%);
@button-tertiary-hover-border: none;

// Button Border
@button-border-color: @dark;
@button-border-border: 1px solid @button-border-color;
@button-border-background: transparent;
@button-border-hover-color: @white;
@button-border-hover-border: 1px solid @button-border-color;
@button-border-hover-background: @button-border-color;

// Button Text
@button-text-color: @dark;
@button-text-hover-color: @primary;
```

```html
<button class="button">Button</button>
<button class="button button-inverse">Inverse</button>
<button class="button button-primary">Primary</button>
<button class="button button-secondary">Secondary</button>
<button class="button button-tertiary">Tertiary</button>
<button class="button button-border">Border</button>
<button class="button button-text">Text</button>
```

## Button Indicators

<div>
  <button class="button error">Error</button>
  <button class="button warning">Warning</button>
  <button class="button success">Success</button>
  <button class="button info">Info</button>
  <br>
  <br>
</div>
<div>
  <button class="button error" disabled>Error</button>
  <button class="button warning" disabled>Warning</button>
  <button class="button success" disabled>Success</button>
  <button class="button info" disabled>Info</button>
</div>

```scss
//Button Error
@button-error-color: @white;
@button-error-background: @error;
@button-error-border: none;
@button-error-hover-color: @button-error-color;
@button-error-hover-background: darken(@error, 10%);
@button-error-hover-border: none;

//Button Warning
@button-warning-color: @white;
@button-warning-background: @warning;
@button-warning-border: none;
@button-warning-hover-color: @button-warning-color;
@button-warning-hover-background: darken(@warning, 10%);
@button-warning-hover-border: none;

//Button Success
@button-success-color: @white;
@button-success-background: @success;
@button-success-border: none;
@button-success-hover-color: @button-success-color;
@button-success-hover-background: darken(@success, 10%);
@button-success-hover-border: none;

//Button Info
@button-info-color: @white;
@button-info-background: @info;
@button-info-border: none;
@button-info-hover-color: @button-info-color;
@button-info-hover-background: darken(@button-info-background, 10%);
@button-info-hover-border: none;
```

```html
<button class="button error">Error</button>
<button class="button warning">Warning</button>
<button class="button success">Success</button>
<button class="button info">Info</button>
```

## Button Sizes

<div>
  <button class="button button-xlarge">Extra Large</button>
  <button class="button button-large">Large</button>
  <button class="button button-medium">Medium</button>
  <button class="button button-small">Small</button>
  <button class="button button-xsmall">Extra Small</button>
</div>


```scss
// Button Extra Large
@button-xlarge-padding: 1.8rem 3.2rem;
@button-xlarge-height: @height-xlarge;
@button-xlarge-font-size: @font-size-xlarge;

// Button Large
@button-large-padding: 1.4rem 2.8rem;
@button-large-height: @height-large;
@button-large-font-size: @font-size-large;

// Button Medium
@button-medium-padding: @button-padding;
@button-medium-height: @button-height;
@button-medium-font-size: @button-font-size;

// Button Small
@button-small-padding: 1.1rem 1.6rem;
@button-small-height: @height-small;
@button-small-font-size: @font-size-small;

// Button Extra Small
@button-xsmall-padding: 0.6rem 1.2rem;
@button-xsmall-height: @height-xsmall;
@button-xsmall-font-size: @font-size-xsmall;
```

```html
<button class="button button-xlarge">Extra Large</button>
<button class="button button-large">Large</button>
<button class="button button-medium">Medium</button>
<button class="button button-small">Small</button>
<button class="button button-xsmall">Extra Small</button>
```

## Button Icon

<div>
  <button class="button button-icon button-icon-right">
    Button Icon
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-left">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24"><path d="M24 4.3c-.9.4-1.8.7-2.8.8 1-.6 1.8-1.6 2.2-2.7-1 .6-2 1-3.1 1.2-.9-1-2.2-1.6-3.6-1.6-2.7 0-4.9 2.2-4.9 4.9 0 .4 0 .8.1 1.1-4.1-.2-7.7-2.2-10.2-5.2-.4.7-.7 1.6-.7 2.5 0 1.7.9 3.2 2.2 4.1-.8 0-1.6-.2-2.2-.6v.1c0 2.4 1.7 4.4 4 4.8-.4.1-.8.2-1.3.2-.3 0-.6 0-.9-.1.6 2 2.4 3.4 4.6 3.4-1.7 1.3-3.8 2.1-6.1 2.1-.4 0-.8 0-1.2-.1 2.2 1.4 4.8 2.2 7.5 2.2 9.1 0 14-7.5 14-14v-.6c.9-.6 1.7-1.5 2.4-2.5z"/></svg>
    Button Icon
  </button>
</div>

```scss
// Button Icon
@button-icon-size: @button-font-size;
@button-icon-fill: @button-color;
@button-icon-left-margin: 1em;
@button-icon-right-margin: 1em;

// Button Icon Styles
@button-icon-inverse-fill: @button-inverse-color;
@button-icon-inverse-hover-fill: @button-inverse-hover-color;
@button-icon-primary-fill: @button-primary-color;
@button-icon-primary-hover-fill: @button-primary-hover-color;
@button-icon-secondary-fill: @button-secondary-color;
@button-icon-secondary-hover-fill: @button-secondary-hover-color;
@button-icon-tertiary-fill: @button-tertiary-color;
@button-icon-tertiary-hover-fill: @button-tertiary-hover-color;
@button-icon-border-fill: @button-border-color;
@button-icon-border-hover-fill: @button-border-hover-color;
@button-icon-text-fill: @button-text-color;
@button-icon-text-hover-fill: @button-text-hover-color;

// Button Icon Indicators
@button-icon-error-fill: @button-error-color;
@button-icon-error-hover-fill: @button-error-hover-color;
@button-icon-warning-fill: @button-warning-color;
@button-icon-warning-hover-fill: @button-warning-hover-color;
@button-icon-success-fill: @button-success-color;
@button-icon-success-hover-fill: @button-success-hover-color;
@button-icon-info-fill: @button-info-color;
@button-icon-info-hover-fill: @button-info-hover-color;

// Button Icon Sizes
@button-icon-xlarge-size: @button-xlarge-font-size;
@button-icon-large-size: @button-large-font-size;
@button-icon-medium-size: @button-medium-font-size;
@button-icon-small-size: @button-small-font-size;
@button-icon-xsmall-size: @button-xsmall-font-size;
```

```html
<button class="button button-icon button-icon-right">
  Button Icon
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-left">
  <svg>...</svg>
  Button Icon
</button>
```

### Button Icon Styles

<div>
  <button class="button button-icon button-icon-right">
    Button
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-inverse">
    Inverse
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-primary">
    Primary
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-secondary">
    Secondary
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-tertiary">
    Tertiary
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-border">
    Border
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-text">
    Text
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
</div>

```html
<button class="button button-icon button-icon-right">
  Button
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-inverse">
  Inverse
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-primary">
  Primary
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-secondary">
  Secondary
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-tertiary">
  Tertiary
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-border">
  Border
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-text">
  Text
  <svg>...</svg>
</button>
```

### Button Icon Indicators

<div>
  <button class="button button-icon button-icon-right error">
    Error
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right warning">
    Warning
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right success">
    Success
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right info">
    Info
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
</div>

```html
<button class="button button-icon button-icon-right">
  Button
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-inverse">
  Inverse
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-primary">
  Primary
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-secondary">
  Secondary
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-tertiary">
  Tertiary
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-border">
  Border
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-text">
  Text
  <svg>...</svg>
</button>
```

### Button Icon Sizes

<div>
  <button class="button button-icon button-icon-right button-xlarge">
    Extra Large
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-large">
    Large
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-medium">
    Medium
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-small">
    Small
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
  <button class="button button-icon button-icon-right button-xsmall">
    Extra Small
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
  </button>
</div>

```html
<button class="button button-icon button-icon-right button-xlarge">
  Extra Large
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-large">
  Large
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-medium">
  Medium
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-small">
  Small
  <svg>...</svg>
</button>
<button class="button button-icon button-icon-right button-xsmall">
  Extra Small
  <svg>...</svg>
</button>
```

## Button Group

<div class="button-group">
  <button class="button">Button</button>
  <button class="button">Button</button>
  <button class="button">Button</button>
</div>

```html
<div class="button-group">
  <button class="button">Button</button>
  <button class="button">Button</button>
  <button class="button">Button</button>
</div>
```

### Button Group Block

<div class="button-group button-group-block">
  <div class="button-group">
    <button class="button">Button</button>
  </div>
  <div class="button-group">
    <button class="button">Button</button>
  </div>
  <div class="button-group">
    <button class="button">Button</button>
  </div>
</div>

```html
<div class="button-group button-group-block">
  <div class="button-group">
    <button class="button">Button</button>
  </div>
  <div class="button-group">
    <button class="button">Button</button>
  </div>
  <div class="button-group">
    <button class="button">Button</button>
  </div>
</div>
```

## Figure

<div>
  <figure>
    <img src="{{ site.baseurl }}/assets/images/photo.svg" class="responsive">
    <figcaption>Figure Caption</figcaption>
  </figure>
</div>

```scss
// Figure
@figure-display: block;
@figure-margin: 0;
@figure-padding: 1rem;
@figure-border: 1px solid @light-grey;

// Figure Caption
@figure-caption-margin: 1rem 0;
@figure-caption-font-family: @paragraph-font-family;
@figure-caption-font-weight: @paragraph-font-weight;
@figure-caption-font-size: @paragraph-font-size;
@figure-caption-color: @body-color;
@figure-caption-text-align: center;
```

```html
<figure>
  <img src="..." class="responsive">
  <figcaption>Figure Caption</figcaption>
</figure>
```

## Media

The media frame is for content loaded after the document is ready. It stops layouts from jumping when media is being loaded.

The media frame wraps `<img>`, `<svg>`, `<video>`, and `<iframe>` by default, to wrap other content in a media container use the media-inner class. The `media-transparent` class removes the default background color on the media element.

<div class="media media-16-9"></div>


```scss
// Media
@media-background: @light;
```

```html
<div class="media media-16-9"></div>
```

### Media Ratios

By default the media element has the following common media type ratios:

`media-1-2`
`media-9-16`
`media-9-14`
`media-2-3`
`media-3-4`
`media-1`
`media-4-3`
`media-3-2`
`media-16-9`
`media-2-1`

### Custom Media Ratios

To add custom media ratios use the .media-ratio() mixin.

```scss
.media-ratio(@width, @height);
```

## Nav

For menu and navigation components use the `<nav>` element wrapped around an unordered list `<ul>`.

<div>
  <nav>
    <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
      <li><a href="#">Item 4</a></li>
    </ul>
  </nav>
</div>

```scss
// Nav
@nav-list-margin: 0;
@nav-item-margin: 1rem 0;
```

```html
<nav>
  <ul>
    <li><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
  </ul>
</nav>
```

### Nav Inline

To display navigaiton inline add the `nav-inline` class to the `<nav>` element.

<div>
  <nav class="nav-inline">
    <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
      <li><a href="#">Item 4</a></li>
    </ul>
  </nav>
</div>

```scss
// Nav Inline
@nav-inline-item-margin: 0 1rem;
```

```html
<nav class="nav-inline">
  <ul>
    <li><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
  </ul>
</nav>
```

## Table

<table>
  <caption>Table Caption</caption>
  <thead>
    <tr>
      <th scope="col">Vestibulum Sem Ipsum</th>
      <th scope="col">Dolor Fringilla</th>
      <th scope="col">Amet Mattis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
  </tbody>
</table>

```scss
// Table
@table-margin: @paragraph-margin;
@table-background: none;
@table-border: 1px solid @light-grey;
@table-border-radius: @border-radius;

// Table Caption
@table-caption-margin: 1rem 0;
@table-caption-font-family: @regular-font-family;
@table-caption-font-weight: @regular-font-weight;
@table-caption-font-size: @font-size-medium;
@table-caption-color: @body-color;
@table-caption-text-align: left;

// Table Head
@table-head-padding: 1rem;
@table-head-font-family: @medium-font-family;
@table-head-font-weight: @medium-font-weight;
@table-head-font-size: @font-size-small;
@table-head-text-align: left;
@table-head-text-transform: none;
@table-head-color: @body-color;
@table-head-border: @table-border;
@table-head-background: @light;

// Table Cell
@table-cell-padding: 1rem;
@table-cell-font-family: @regular-font-family;
@table-cell-font-weight: @regular-font-weight;
@table-cell-font-size: @font-size-small;
@table-cell-color: @body-color;
@table-cell-line-height: @line-height-medium;
@table-cell-vertical-align: middle;
@table-cell-border: @table-border;

// Table Reponsive
@table-responsive-breakpoint: @xsmall;
```

```html
<table>
  <thead>
    <tr>
      <th scope="col">...</th>
      <th scope="col">...</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
```

### Table Reponsive

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th scope="col">Vestibulum Sem Ipsum</th>
        <th scope="col">Dolor Fringilla</th>
        <th scope="col">Amet Mattis</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
    </tbody>
  </table>
</div>

```scss
// Table Reponsive
@table-responsive-breakpoint: @xsmall;
```

```html
<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th scope="col">...</th>
        <th scope="col">...</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>...</td>
        <td>...</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>
```

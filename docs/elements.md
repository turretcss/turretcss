---
layout: docs
title: Elements
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
@button-padding: 12px 16px;
@button-height: @height-medium;
@button-font-family: @bold-font-family;
@button-font-weight: @bold-font-weight;
@button-font-size: 1.4;
@button-color: @dark-grey;
@button-line-height: 1;
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
@button-inverse-border: 1px solid darken(@inverse, 5%);
@button-inverse-hover-color: @button-inverse-color;
@button-inverse-hover-background: darken(@button-inverse-background, 10%);
@button-inverse-hover-border: 1px solid darken(@inverse, 15%);

// Button Primary
@button-primary-color: @white;
@button-primary-background: @primary;
@button-primary-border: 1px solid darken(@primary, 5%);
@button-primary-hover-color: @button-primary-color;
@button-primary-hover-background: darken(@primary, 10%);
@button-primary-hover-border: 1px solid darken(@primary, 15%);

// Button Secondary
@button-secondary-color: @white;
@button-secondary-background: @secondary;
@button-secondary-border: 1px solid darken(@secondary, 5%);
@button-secondary-hover-color: @button-secondary-color;
@button-secondary-hover-background: darken(@secondary, 10%);
@button-secondary-hover-border: 1px solid darken(@secondary, 15%);

// Button Tertiary
@button-tertiary-color: @white;
@button-tertiary-background: @tertiary;
@button-tertiary-border: 1px solid darken(@tertiary, 5%);
@button-tertiary-hover-color: @button-tertiary-color;
@button-tertiary-hover-background: darken(@tertiary, 10%);
@button-tertiary-hover-border: 1px solid darken(@tertiary, 5%);

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
// Button Error
@button-error-color: @white;
@button-error-background: @error;
@button-error-border: 1px solid darken(@error, 5%);
@button-error-hover-color: @button-error-color;
@button-error-hover-background: darken(@error, 10%);
@button-error-hover-border: 1px solid darken(@error, 15%);

// Button Warning
@button-warning-color: @white;
@button-warning-background: @warning;
@button-warning-border: 1px solid darken(@warning, 5%);
@button-warning-hover-color: @button-warning-color;
@button-warning-hover-background: darken(@warning, 10%);
@button-warning-hover-border: 1px solid darken(@warning, 15%);

// Button Success
@button-success-color: @white;
@button-success-background: @success;
@button-success-border: 1px solid darken(@success, 5%);
@button-success-hover-color: @button-success-color;
@button-success-hover-background: darken(@success, 10%);
@button-success-hover-border: 1px solid darken(@success, 15%);

// Button Info
@button-info-color: @white;
@button-info-background: @info;
@button-info-border: 1px solid darken(@button-info-background, 5%);
@button-info-hover-color: @button-info-color;
@button-info-hover-background: darken(@button-info-background, 10%);
@button-info-hover-border: 1px solid darken(@info, 15%);
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
@button-xlarge-padding: 20px 30px;
@button-xlarge-height: @height-xlarge;
@button-xlarge-font-size: @font-size-xlarge;

// Button Large
@button-large-padding: 15px 25px;
@button-large-height: @height-large;
@button-large-font-size: @font-size-large;

// Button Medium
@button-medium-padding: @button-padding;
@button-medium-height: @button-height;
@button-medium-font-size: @button-font-size;

// Button Small
@button-small-padding: 8px 12px;
@button-small-height: @height-small;
@button-small-font-size: @font-size-small;

// Button Extra Small
@button-xsmall-padding: 4px 8px;
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
		<img src="/assets/images/photo.svg" class="responsive">
		<figcaption>Figure Caption</figcaption>
	</figure>
</div>

```scss
// Figure
@figure-display: block;
@figure-margin: 0;
@figure-padding: 10px;
@figure-border: 1px solid @light-grey;

// Figure Caption
@figure-caption-margin: 10px 0px;
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
@nav-item-margin: 10px 0px;
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
@nav-inline-item-margin: 0px 10px;
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

## Title

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
@table-background: none;
@table-border-radius: @border-radius;

// Table Caption
@table-caption-margin: 5px 10px;
@table-caption-font-family: @bold-font-family;
@table-caption-font-weight: @bold-font-weight;
@table-caption-font-size: @font-size-medium;
@table-caption-color: @body-color;
@table-caption-text-align: left;

// Table Head
@table-head-padding: 10px;
@table-head-font-family: @bold-font-family;
@table-head-font-weight: @bold-font-weight;
@table-head-font-size: @paragraph-font-size;
@table-head-text-align: left;
@table-head-text-transform: none;
@table-head-color: @body-color;

// Table Body
@table-cell-padding: 10px;
@table-cell-font-family: @regular-font-family;
@table-cell-font-weight: @regular-font-weight;
@table-cell-font-size: @paragraph-font-size;
@table-cell-color: @body-color;
@table-cell-line-height: @line-height-medium;
@table-cell-vertical-align: middle;
```

```html
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
```

### Table Border

<table class="table-bordered">
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
// Table Border
@table-border: solid @light-grey;
@table-border-width: 1px;
```

```html
<table class="table-bordered">
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
```

### Table Block

<table class="table-bordered table-block">
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
// Table Block
@table-block-head-background: @light;
```

```html
<table class="table-bordered table-block">
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
```

### Table Reponsive

<table class="table-bordered table-block table-responsive">
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
// Table Reponsive
@table-responsive-breakpoint: @small-down;
@table-responsive-row-margin: 20px 0px;
@table-responsive-cell-padding: 10px;
@table-responsive-border: solid @light;
@table-responsive-border-width: 1px;
```

```html
<table class="table-bordered table-block table-responsive">
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
```

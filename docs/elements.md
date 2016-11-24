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
--button-padding:  calc((var(--button-height) - var(--button-font-size) - (var(--button-border-width) * 2)) / 2) 1.5em;
--button-height: var(--height-m);
--button-font-family: inherit;
--button-font-weight: var(--font-weight-medium);
--button-font-size: var(--font-size-m);
--button-color: var(--dark);
--button-line-height: 1;
--button-letter-spacing: inherit;
--button-text-align: center;
--button-text-transform: none;
--button-background: var(--white);
--button-border-width: 1px;
--button-border-style: solid;
--button-border-color: var(--light);
--button-border-radius: var(--border-radius);

--button-hover-color: var(--button-color);
--button-hover-background: var(--light-100);
--button-hover-border-color: var(--light-600);

--button-active-color: var(--button-color);
--button-active-background: var(--light-200);
--button-active-border-color: var(--light-700);
--button-active-shadow: inset 0 0 0.5em color(var(--dark) alpha(5%));
```

```html
<button>...</button>
```

### Button Disabled

<div>
  <button disabled>Button</button>
</div>

```scss
--button-disabled-opacity: 0.65;
```

```html
<button disabled>...</button>
```

### Button Block

<div>
  <button class="button button-block">Button Block</button>
</div>

```scss
--button-block-text-align: center;
```

```html
<button class="button button-block">...</button>
```

## Button Sizes

<div>
  <button class="button button-xl">Extra Large</button>
  <button class="button button-l">Large</button>
  <button class="button button-m">Medium</button>
  <button class="button button-s">Small</button>
  <button class="button button-xs">Extra Small</button>
</div>


```scss
--button-xl-padding: calc((var(--button-xl-height) - var(--button-xl-font-size) - (var(--button-border-width) * 2)) / 2) 1.5em;
--button-xl-height: var(--height-xl);
--button-xl-font-size: var(--font-size-xl);

--button-l-padding: calc((var(--button-l-height) - var(--button-l-font-size) - (var(--button-border-width) * 2)) / 2) 1.5em;
--button-l-height: var(--height-l);
--button-l-font-size: var(--font-size-l);

--button-s-padding: calc((var(--button-s-height) - var(--button-s-font-size) - (var(--button-border-width) * 2)) / 2) 1.5em;
--button-s-height: var(--height-s);
--button-s-font-size: var(--font-size-s);

--button-xs-padding: calc((var(--button-xs-height) - var(--button-xs-font-size) - (var(--button-border-width) * 2)) / 2) 1.5em;
--button-xs-height: var(--height-xs);
--button-xs-font-size: var(--font-size-xs);
```

```html
<button class="button button-xl">...</button>
<button class="button button-l">...</button>
<button class="button button-m">...</button>
<button class="button button-s">...</button>
<button class="button button-xs">...</button>
```

## Button Anchors

<div>
  <a class="button button-xl">Extra Large</a>
  <a class="button button-l">Large</a>
  <a class="button">Medium</a>
  <a class="button button-s">Small</a>
  <a class="button button-xs">Extra Small</a>
</div>

```html
<a class="button button-xl">...</a>
<a class="button button-l">...</a>
<a class="button button-m">...</a>
<a class="button button-s">...</a>
<a class="button button-xs">...</a>
```

## Button Colors

### Shades

<div>
  <button class="button button-white">White</button>
  <button class="button button-light">Light</button>
  <button class="button button-grey">Grey</button>
  <button class="button button-dark">Dark</button>
  <button class="button button-black">Black</button>
  <button class="button button-white button-border">White</button>
  <button class="button button-light button-border">Light</button>
  <button class="button button-grey button-border">Grey</button>
  <button class="button button-dark button-border">Dark</button>
  <button class="button button-black button-border">Black</button>
</div>
<div class="margin-top-xs">
  <button class="button button-white" disabled>White</button>
  <button class="button button-light" disabled>Light</button>
  <button class="button button-grey" disabled>Grey</button>
  <button class="button button-dark" disabled>Dark</button>
  <button class="button button-black" disabled>Black</button>
  <button class="button button-white button-border" disabled>White</button>
  <button class="button button-light button-border" disabled>Light</button>
  <button class="button button-grey button-border" disabled>Grey</button>
  <button class="button button-dark button-border" disabled>Dark</button>
  <button class="button button-black button-border" disabled>Black</button>
</div>

```scss
--button-white-color: var(--black);
--button-light-color: var(--dark);
--button-grey-color: var(--white);
--button-dark-color: var(--white);
--button-black-color: var(--white);
```

```html
<button class="button button-white">...</button>
<button class="button button-light">...</button>
<button class="button button-grey">...</button>
<button class="button button-dark">...</button>
<button class="button button-black">...</button>
<button class="button button-white button-border">...</button>
<button class="button button-light button-border">...</button>
<button class="button button-grey button-border">...</button>
<button class="button button-dark button-border">...</button>
<button class="button button-black button-border">...</button>
<button class="button button-white" disabled>...</button>
<button class="button button-light" disabled>...</button>
<button class="button button-grey" disabled>...</button>
<button class="button button-dark" disabled>...</button>
<button class="button button-black" disabled>...</button>
<button class="button button-white button-border" disabled>...</button>
<button class="button button-light button-border" disabled>...</button>
<button class="button button-grey button-border" disabled>...</button>
<button class="button button-dark button-border" disabled>...</button>
<button class="button button-black button-border" disabled>...</button>
```

### Button Palettes

<div>
  <button class="button button-primary">Primary</button>
  <button class="button button-secondary">Secondary</button>
  <button class="button button-tertiary">Tertiary</button>
  <button class="button button-primary button-border">Primary</button>
  <button class="button button-secondary button-border">Secondary</button>
  <button class="button button-tertiary button-border">Tertiary</button>
</div>
<div class="margin-top-xs">
  <button class="button button-primary" disabled>Primary</button>
  <button class="button button-secondary" disabled>Secondary</button>
  <button class="button button-tertiary" disabled>Tertiary</button>
  <button class="button button-primary button-border" disabled>Primary</button>
  <button class="button button-secondary button-border" disabled>Secondary</button>
  <button class="button button-tertiary button-border" disabled>Tertiary</button>
</div>

```scss
--button-primary-color: var(--white);
--button-secondary-color: var(--white);
--button-tertiary-color: var(--white);
```

```html
<button class="button button-primary">...</button>
<button class="button button-secondary">...</button>
<button class="button button-tertiary">...</button>
<button class="button button-primary button-border">...</button>
<button class="button button-secondary button-border">...</button>
<button class="button button-tertiary button-border">...</button>
<button class="button button-primary" disabled>...</button>
<button class="button button-secondary" disabled>...</button>
<button class="button button-tertiary" disabled>...</button>
<button class="button button-primary button-border" disabled>...</button>
<button class="button button-secondary button-border" disabled>...</button>
<button class="button button-tertiary button-border" disabled>...</button>
```

### Indicators

<div>
  <button class="button error">Error</button>
  <button class="button warning">Warning</button>
  <button class="button success">Success</button>
  <button class="button info">Info</button>
  <button class="button error button-border">Error</button>
  <button class="button warning button-border">Warning</button>
  <button class="button success button-border">Success</button>
  <button class="button info button-border">Info</button>
</div>
<div class="margin-top-xs">
  <button class="button error" disabled>Error</button>
  <button class="button warning" disabled>Warning</button>
  <button class="button success" disabled>Success</button>
  <button class="button info" disabled>Info</button>
  <button class="button error button-border" disabled>Error</button>
  <button class="button warning button-border" disabled>Warning</button>
  <button class="button success button-border" disabled>Success</button>
  <button class="button info button-border" disabled>Info</button>
</div>

```scss
--button-error-color: var(--white);
--button-warning-color: var(--white);
--button-success-color: var(--white);
--button-info-color: var(--white);
```

```html
<button class="button error">...</button>
<button class="button warning">...</button>
<button class="button success">...</button>
<button class="button info">...</button>
<button class="button error button-border">...</button>
<button class="button warning button-border">...</button>
<button class="button success button-border">...</button>
<button class="button info button-border">...</button>
<button class="button error" disabled>...</button>
<button class="button warning" disabled>...</button>
<button class="button success" disabled>...</button>
<button class="button info" disabled>...</button>
<button class="button error button-border" disabled>...</button>
<button class="button warning button-border" disabled>...</button>
<button class="button success button-border" disabled>...</button>
<button class="button info button-border" disabled>...</button>
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
@table-caption-font-size: @font-size-m;
@table-caption-color: @body-color;
@table-caption-text-align: left;

// Table Head
@table-head-padding: 1rem;
@table-head-font-family: @m-font-family;
@table-head-font-weight: @m-font-weight;
@table-head-font-size: @font-size-s;
@table-head-text-align: left;
@table-head-text-transform: none;
@table-head-color: @body-color;
@table-head-border: @table-border;
@table-head-background: @light;

// Table Cell
@table-cell-padding: 1rem;
@table-cell-font-family: @regular-font-family;
@table-cell-font-weight: @regular-font-weight;
@table-cell-font-size: @font-size-s;
@table-cell-color: @body-color;
@table-cell-line-height: @line-height-m;
@table-cell-vertical-align: middle;
@table-cell-border: @table-border;

// Table Reponsive
@table-responsive-breakpoint: @xs;
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
@table-responsive-breakpoint: @xs;
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

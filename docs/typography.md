---
layout: docs
title: Typography
page_title: Typography - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to the use of Turret style definitions with typographic tags including headings, paragraphs, blockquotes, strong, emphasis, list and code HTML5 elements.
permalink: /docs/typography/
---

## Headings

<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>

```scss
// Headings
@headings-margin: 0 0 1em 0;
@headings-font-family: @medium-font-family;
@headings-font-weight: @medium-font-weight;
@headings-color: @dark-grey;
@headings-line-height: @line-height-small;

// Headings Small
@headings-small-font-family: @medium-font-family;
@headings-small-font-weight: @medium-font-weight;
@headings-small-size: 0.6em;
@headings-small-color: @grey;

// Heading Font Sizes
@h1-font-size: 3.2;
@h2-font-size: 2.4;
@h3-font-size: 2.0;
@h4-font-size: 1.8;
@h5-font-size: 1.6;
@h6-font-size: 1.4;
```

```html
<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>
```

## Strong

<strong>strong</strong>

```scss
// Strong
@strong-font-family: @bold-font-family;
@strong-font-weight: @bold-font-weight;
```

```html
<strong>...</strong>
```

## Emphasis

<em>emphasis</em>

```scss
// Emphasis
@em-font-style: italic;
```

```html
<em>...</em>
```

## Paragraph

<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

```scss
// Paragraph
@paragraph-margin: 2rem 0;
@paragraph-font-family: @regular-font-family;
@paragraph-font-weight: @regular-font-weight;
@paragraph-font-size: @font-size-medium;
@paragraph-color: @body-color;
@paragraph-line-height: @line-height-medium;
```

```html
<p>...</p>
```

## Lead

<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>

```scss
// Lead
@lead-margin: 0 0 2rem 0;
@lead-font-family: @thin-font-family;
@lead-font-weight: @thin-font-weight;
@lead-font-size: @font-size-large;
@lead-color: @body-color;
@lead-line-height: @line-height-medium;
```

```html
<p class="lead">...</p>
```

## Horizontal Rule

<hr>

```scss
// Horizontal Rule
@hr-margin: 3rem auto;
@hr-height: 1px;
@hr-background: @light-grey;
```

```html
<hr>
```

## Blockquote

<blockquote>
  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
  <cite>Name</cite>
</blockquote>

```scss
// Blockquote
@blockquote-margin: 3rem 0;
@blockquote-padding: 0 2rem;

// Blockquote Quote
@blockquote-quote-margin: 0;
@blockquote-quote-font-family: @lead-font-family;
@blockquote-quote-font-weight: @lead-font-weight;
@blockquote-quote-font-size: @lead-font-size;
@blockquote-quote-font-style: normal;
@blockquote-quote-line-height: @line-height-medium;
@blockquote-quote-color: @body-color;

// Blockquote Cite
@blockquote-cite-margin: 1rem 0;
@blockquote-cite-font-family: @regular-font-family;
@blockquote-cite-font-weight: @regular-font-family;
@blockquote-cite-font-size: @font-size-medium;
@blockquote-cite-font-style: normal;
@blockquote-cite-color: @blockquote-quote-color;
@blockquote-cite-text-align: left;
```

```html
<blockquote>
  <p>...</p>
  <cite>...</cite>
</blockquote>
```

## Pullout

<p class="pullout">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

```scss
// Pullout
@pullout-margin: @blockquote-margin;
@pullout-padding: @blockquote-padding;
@pullout-font-family: @blockquote-quote-font-family;
@pullout-font-weight: @blockquote-quote-font-weight;
@pullout-font-size: @blockquote-quote-font-size;
@pullout-color: @blockquote-quote-color;
@pullout-border: solid @primary;
@pullout-border-width: 0 0 0 0.4rem;
```

```html
<p class="pullout">...</p>
```

## List

```scss
// List
@list-margin: 2rem 0;
@list-padding: 0;

// Lists Item
@list-item-margin: 1rem 0 1rem 2rem;
@list-item-padding: 0 0 0 0.5rem;
@list-item-font-family: @paragraph-font-family;
@list-item-font-weight: @paragraph-font-weight;
@list-item-font-size: @paragraph-font-size;
@list-item-color: @paragraph-color;
@list-item-line-height: @paragraph-line-height;

// Child List
@child-list-margin: 1rem 0;
@child-list-padding: 0;
@child-list-item-margin: @list-item-margin;
```

### Unordered List

<ul>
  <li>Vehicula Dapibus Tellus Fermentum</li>
  <li>Vehicula Dapibus Tellus Fermentum</li>
  <li>Vehicula Dapibus Tellus Fermentum
    <ul>
      <li>Vehicula Dapibus Tellus Fermentum</li>
      <li>Vehicula Dapibus Tellus Fermentum</li>
    </ul>
  </li>
</ul>

```scss
// Unordered List
@unordered-list-icon: disc;
@unordered-child-list-icon: disc;
```

```html
<ul>
  <li>...</li>
  <li>
    <ul>
      <li>...</li>
    </ul>
  </li>
</ul>
```

### Ordered List

<ol>
  <li>Vehicula Dapibus Tellus Fermentum</li>
  <li>Vehicula Dapibus Tellus Fermentum</li>
  <li>Vehicula Dapibus Tellus Fermentum
    <ol>
      <li>Vehicula Dapibus Tellus Fermentum</li>
      <li>Vehicula Dapibus Tellus Fermentum</li>
    </ol>
  </li>
</ol>

```html
<ol>
  <li>...</li>
  <li>
    <ol>
      <li>...</li>
    </ol>
  </li>
</ol>
```

## Definition List

<dl>
  <dt>Fringilla Ipsum Tellus</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
  <dt>Fringilla Ipsum Tellus</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
  <dt>Fringilla Ipsum Tellus</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
</dl>

```scss
// Definition List
@definition-list-margin: @list-margin;
@definition-list-padding: 0;

// Definition Term
@definition-term-margin: 1rem 0;
@definition-term-font-family: @semibold-font-family;
@definition-term-font-weight: @semibold-font-weight;
@definition-term-font-size: @font-size-medium;
@definition-term-color: @paragraph-color;

// Definition Description
@definition-description-margin: 0 0 2rem 0;
@definition-description-font-family: @regular-font-family;
@definition-description-font-weight: @regular-font-weight;
@definition-description-font-size: @font-size-medium;
@definition-description-color: @paragraph-color;
```

```html
<dl>
  <dt>...</dt>
  <dd>...</dd>
</dl>
```

## Code

<code>&lt;p&gt;code&lt;/p&gt;</code>

```scss
// Code
@code-font-family: @monospace-font-family;
@code-font-weight: normal;
@code-font-size: 1.2;
@code-color: @tertiary;
```

```html
<code>...</code>
```

## Pre

<pre><code>&lt;p&gt;pre&lt;/p&gt;</code></pre>

```scss
// Pre
@pre-margin: 2rem 0;
@pre-padding: 1rem;
@pre-color: @body-color;
@pre-tab-size: 4;
@pre-hyphens: none;
@pre-line-height: @line-height-medium;
@pre-background: @light;
@pre-border: 1px solid @light-grey;

// Pre Code
@pre-code-color: @code-color;
```

```html
<pre><code>...</code></pre>
```

## Kbd

<p>Save file: <kbd>cmd</kbd> + <kbd>S</kbd></p>

```scss
// Kbd
@kbd-margin: 0 0.5rem;
@kbd-padding: 0.4rem;
@kbd-font-family: @code-font-family;
@kbd-font-weight: @code-font-weight;
@kbd-font-size: @code-font-size;
@kbd-color: @code-color;
@kbd-background: @pre-background;
@kbd-border: @pre-border;
```

```html
<kbd>...</kbd>
```

## Mark

<p><mark>mark</mark></p>
<p><mark class="error">error</mark> <mark class="warning">warning</mark> <mark class="success">success</mark> <mark class="info">info</mark></p>

```scss
// Mark
@mark-margin: 0;
@mark-padding: 0.3rem 0.6rem;
@mark-font-family: @paragraph-font-family;
@mark-font-weight: @paragraph-font-weight;
@mark-font-size: @paragraph-font-size;
@mark-color: @paragraph-color;
@mark-background: yellow;
@mark-border: none;
@mark-border-radius: @border-radius;

// Mark Error
@mark-error-color: @white;
@mark-error-background: @error;
@mark-error-border: none;

// Mark Warning
@mark-warning-color: @white;
@mark-warning-background: @warning;
@mark-warning-border: none;

// Mark Success
@mark-success-color: @white;
@mark-success-background: @success;
@mark-success-border: none;

// Mark Info
@mark-info-color: @white;
@mark-info-background: @info;
@mark-info-border: none;
```

```html
<mark>...</mark>
```

```html
<mark class="error">...</mark>
<mark class="warning">...</mark>
<mark class="success">...</mark>
<mark class="info">...</mark>
```

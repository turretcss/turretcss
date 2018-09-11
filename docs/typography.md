---
layout: docs
title: Typography
page_title: Typography - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to the use of turretcss style definitions with typographic HTML elements including headings, paragraphs, blockquotes, etc.
permalink: /docs/typography/
---

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Headings

<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>

```scss
--headings-margin: 2em 0 1em 0;
--headings-font-family: inherit;
--headings-font-weight: var(--font-weight-bold);
--headings-color: inherit;
--headings-line-height: var(--line-height-s);
--headings-text-transform: none;
--headings-letter-spacing: var(--letter-spacing);

--headings-small-font-family: inherit;
--headings-small-font-weight: inherit;
--headings-small-size: 0.6em;
--headings-small-color: inherit;

--h1-font-size: 2rem;
--h2-font-size: 1.5rem;
--h3-font-size: 1.25rem;
--h4-font-size: 1.125rem;
--h5-font-size: 1rem;
--h6-font-size: 0.875rem;
```

```html
<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>
```

## Display Title

<h1 class="display-title">Display Title</h1>

```scss
--display-title-margin: 0;
--display-title-font-family: var(--headings-font-family);
--display-title-font-weight: var(--headings-font-weight);
--display-title-font-size: 3rem;
--display-title-color: inherit;
--display-title-line-height: var(--line-height-xs);
--display-title-letter-spacing: 0;
--display-title-text-transform: none;
```

```html
<h1 class="display-title">...</h1>
```

### Display Title Sizes

<h2 class="display-title display-title-xxl">Display Title XXL</h2>
<h2 class="display-title display-title-xl">Display Title XL</h2>
<h2 class="display-title display-title-l">Display Title L</h2>
<h2 class="display-title">Display Title M</h2>
<h2 class="display-title display-title-s">Display Title S</h2>
<h2 class="display-title display-title-xs">Display Title XS</h2>
<h2 class="display-title display-title-xxs">Display Title XXS</h2>

```scss
--display-title-xxl-font-size: 4.5rem;
--display-title-xl-font-size: 4rem;
--display-title-l-font-size: 3.5rem;
--display-title-s-font-size: 2.5rem;
--display-title-xs-font-size: 2rem;
--display-title-xxs-font-size: 1.5rem;
```

```html
<h2 class="all-caps all-caps-xxl">...</h2>
<h2 class="all-caps all-caps-xl">...</h2>
<h2 class="all-caps all-caps-l">...</h2>
<h2 class="all-caps">...</h2>
<h2 class="all-caps all-caps-s">...</h2>
<h2 class="all-caps all-caps-xs">...</h2>
<h2 class="all-caps all-caps-xxs">...</h2>
```

## All Caps

<h2 class="all-caps">All Caps</h2>

```scss
--all-caps-margin: 0.5em 0;
--all-caps-font-family: var(--headings-font-family);
--all-caps-font-weight: var(--headings-font-weight);
--all-caps-font-size: 0.875rem;
--all-caps-line-height: var(--line-height-xs);
--all-caps-text-transform: uppercase;
--all-caps-letter-spacing: var(--letter-spacing);
```

```html
<h2 class="all-caps">...</h2>
```

### All Caps Sizes

<h2 class="all-caps all-caps-xxl">All Caps XXL</h2>
<h2 class="all-caps all-caps-xl">All Caps XL</h2>
<h2 class="all-caps all-caps-l">All Caps L</h2>
<h2 class="all-caps">All Caps M</h2>
<h2 class="all-caps all-caps-s">All Caps S</h2>
<h2 class="all-caps all-caps-xs">All Caps XS</h2>
<h2 class="all-caps all-caps-xxs">All Caps XXS</h2>

```scss
--all-caps-xxl-font-size: 1.25rem;
--all-caps-xl-font-size: 1.125rem;
--all-caps-l-font-size: 1rem;
--all-caps-s-font-size: 0.75rem;
--all-caps-xs-font-size: 0.625rem;
--all-caps-xxs-font-size: 0.5rem;
```

```html
<h2 class="all-caps all-caps-xxl">...</h2>
<h2 class="all-caps all-caps-xl">...</h2>
<h2 class="all-caps all-caps-l">...</h2>
<h2 class="all-caps">...</h2>
<h2 class="all-caps all-caps-s">...</h2>
<h2 class="all-caps all-caps-xs">...</h2>
<h2 class="all-caps all-caps-xxs">...</h2>
```

## Lead

<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>

```scss
--lead-margin: 0.5em 0 1em 0;
--lead-font-family: inherit;
--lead-font-weight: inherit;
--lead-font-size: var(--font-size-xl);
--lead-color: inherit;
--lead-line-height: var(--line-height-m);
```

```html
<p class="lead">...</p>
```

## Paragraph

<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

```scss
--paragraph-margin: 1em 0;
--paragraph-font-family: inherit;
--paragraph-font-weight: inherit;
--paragraph-font-size: var(--font-size-m);
--paragraph-color: inherit;
--paragraph-line-height: var(--line-height-m);
```

```html
<p>...</p>
```

## Link

```scss
--link-color: currentColor;
--link-text-decoration: underline;
--link-hover-color: currentColor;
--link-hover-text-decoration: underline;
```

<p><a href="index.html">Link</a></p>

```html
<a href="">...</a>
```

## Strong

<strong>strong</strong>

```scss
--strong-font-family: inherit;
--strong-font-weight: var(--font-weight-bold);
--strong-color: inherit;
```

```html
<strong>...</strong>
```

## Emphasis

<em>emphasis</em>

```scss
--emphasis-font-style: italic;
```

```html
<em>...</em>
```

## Horizontal Rule

<hr>

```scss
--horizontal-rule-margin: var(--space-s) auto;
--horizontal-rule-height: var(--border-width);
--horizontal-rule-background: var(--border-color);
```

```html
<hr>
```

## Blockquote

<blockquote>
  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur.</p>
</blockquote>

```scss
--blockquote-margin: 2em 0;
--blockquote-padding: 0 1em;
--blockquote-font-family: inherit;
--blockquote-font-weight: var(--lead-font-weight);
--blockquote-font-size: var(--lead-font-size);
--blockquote-font-style: normal;
--blockquote-line-height: var(--lead-line-height);
--blockquote-color: var(--lead-color);
```

```html
<blockquote>
  <p>...</p>
  <cite>...</cite>
</blockquote>
```

## Cite

<cite>Name</cite>

```scss
--cite-margin: 1em 0;
--cite-font-family: inherit;
--cite-font-weight: inherit;
--cite-font-size: var(--font-size-s);
--cite-font-style: normal;
--cite-color: inherit;
--cite-text-align: inherit;
```

```html
<cite>...</cite>
```

## List

```scss
--list-margin: 1em 0;
--list-padding: 0;
--list-font-family: var(--paragraph-font-family);
--list-font-weight: var(--paragraph-font-weight);
--list-font-size: var(--paragraph-font-size);
--list-color: var(--paragraph-color);
--list-line-height: var(--paragraph-line-height);

--list-item-margin: 0.5em 0 0.5em 1.5em;
--list-item-padding: 0 0 0 0.5em;

--child-list-margin: 0.5em 0 0.5em 0;
--child-list-padding: 0;
--child-list-item-margin: var(--list-item-margin);
--child-list-item-padding: var(--list-item-padding);
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
--unordered-list-icon: disc;
--unordered-child-list-icon: disc;
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
--definition-list-margin: var(--paragraph-margin);
--definition-list-padding: 0;
--definition-list-font-size: var(--paragraph-font-size);

--definition-term-margin: 0.5em 0;
--definition-term-font-family: var(--headings-font-family);
--definition-term-font-weight: var(--headings-font-weight);
--definition-term-font-size: inherit;
--definition-term-color: var(--headings-color);

--definition-description-margin: 0 0 1em 0;
--definition-description-font-family: var(--paragraph-font-family);
--definition-description-font-weight: var(--paragraph-font-weight);
--definition-description-font-size: inherit;
--definition-description-color: var(--paragraph-color);
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
--code-font-family: var(--font-family-monospace);
--code-font-weight: normal;
--code-font-size: 80%;
--code-color: var(--secondary);
```

```html
<code>...</code>
```

## Pre

<pre><code>&lt;p&gt;pre&lt;/p&gt;</code></pre>

```scss
--pre-margin: 1em 0;
--pre-padding: 1em;
--pre-font-family: var(--code-font-family);
--pre-font-weight: normal;
--pre-font-size: var(--code-font-size);
--pre-color: inherit;
--pre-tab-size: 4;
--pre-hyphens: none;
--pre-line-height: var(--line-height-m);
--pre-background: var(--light-50);
--pre-border-width: var(--border-width);
--pre-border-style: var(--border-style);
--pre-border-color: var(--border-color);
--pre-border-radius: var(--border-radius);

--pre-code-color: var(--code-color);
```

```html
<pre><code>...</code></pre>
```

## Kbd

<p>Save file: <kbd>cmd</kbd> + <kbd>S</kbd></p>

```scss
--kbd-margin: 0 0.2em;
--kbd-padding: 0.2em 0.4em;
--kbd-font-family: var(--code-font-family);
--kbd-font-weight: var(--code-font-weight);
--kbd-font-size: var(--code-font-size);
--kbd-color: var(--code-color);
--kbd-background: var(--pre-background);
--kbd-border-width: var(--pre-border-width);
--kbd-border-style: var(--pre-border-style);
--kbd-border-color: var(--pre-border-color);
--kbd-border-radius: var(--pre-border-radius);
```

```html
<kbd>...</kbd>
```

## Mark

<p><mark>mark</mark></p>

```scss
--mark-margin: 0;
--mark-padding: 0.2em 0.4em;
--mark-font-family: inherit;
--mark-font-weight: inherit;
--mark-font-size: inherit;
--mark-color: inherit;
--mark-background: yellow;
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

---
layout: docs
title: Headings
description: 
permalink: /docs/typography/headings/
---

## Example

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>

### HTML

```html
<h1>...</h1>
<h2>...</h2>
<h3>...</h3>
<h4>...</h4>
<h5>...</h5>
<h6>...</h6>
```

### CSS

```scss
--headings-margin: 2em 0 1em 0;
--headings-font-family: inherit;
--headings-font-weight: var(--font-weight-bold);
--headings-color: inherit;
--headings-line-height: var(--line-height-s);
--headings-text-transform: none;
--headings-letter-spacing: var(--letter-spacing);

--h1-font-size: 2rem;
--h2-font-size: 1.5rem;
--h3-font-size: 1.25rem;
--h4-font-size: 1.125rem;
--h5-font-size: 1rem;
--h6-font-size: 0.875rem;
```

## Headings Small

<h1>Heading 1 <small>Heading 1 small</small></h1>
<h2>Heading 2 <small>Heading 2 small</small></h2>
<h3>Heading 3 <small>Heading 3 small</small></h3>
<h4>Heading 4 <small>Heading 4 small</small></h4>
<h5>Heading 5 <small>Heading 5 small</small></h5>
<h6>Heading 6 <small>Heading 6 small</small></h6>

### HTML

```html
<h1>...<small>...</small></h1>
<h2>...<small>...</small></h2>
<h3>...<small>...</small></h3>
<h4>...<small>...</small></h4>
<h5>...<small>...</small></h5>
<h6>...<small>...</small></h6>
```

### CSS

```scss
--headings-small-font-family: inherit;
--headings-small-font-weight: inherit;
--headings-small-size: 0.6em;
--headings-small-color: inherit;
```
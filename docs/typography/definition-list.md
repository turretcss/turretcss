---
layout: docs
title: Definition List
description: null
---

## Example

<dl>
  <dt>Fringilla Ipsum Tellus</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
  <dt>Fringilla Ipsum Tellus</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
  <dt>Fringilla Ipsum Tellus</dt>
  <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
</dl>

### HTML

```html
<dl>
  <dt>...</dt>
  <dd>...</dd>
</dl>
```

### CSS

```scss
--definition-list-margin: var(--paragraph-margin);
--definition-list-padding: 0;
--definition-list-font-size: var(--paragraph-font-size);
```

## Defintition Term

<dl>
  <dt>Defintition Term</dt>
</dl>

### HTML

```html
<dt>...</dt>
```

### CSS

```scss
--definition-term-margin: 0.5em 0;
--definition-term-font-family: var(--headings-font-family);
--definition-term-font-weight: var(--headings-font-weight);
--definition-term-font-size: inherit;
--definition-term-color: var(--headings-color);
--definition-term-line-height: var(--headings-line-height);
--definition-term-text-transform: var(--headings-text-transform);
--definition-term-letter-spacing: var(--headings-letter-spacing);
```

## Defintition Description

<dl>
  <dd>Defintition Description</dd>
</dl>

### HTML

```html
<dd>...</dd>
```

### CSS

```scss
--definition-description-margin: 0 0 1em 0;
--definition-description-font-family: var(--paragraph-font-family);
--definition-description-font-weight: var(--paragraph-font-weight);
--definition-description-font-size: inherit;
--definition-description-color: var(--paragraph-color);
--definition-description-line-height: var(--paragraph-line-height);
```

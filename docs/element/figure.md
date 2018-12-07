---
layout: docs
title: Figure
description: null
---

## Example

<div>
  <figure>
    <img src="{{ site.baseurl }}/assets/images/photo.svg">
  </figure>
</div>

### HTML

```html
<figure>
  <img src="...">
</figure>
```

### CSS

```scss
--figure-display: block;
--figure-margin: 0;
--figure-padding: 0;
```

## Figure Caption

<div>
  <figure>
    <img src="{{ site.baseurl }}/assets/images/photo.svg">
    <figcaption>Figure Caption</figcaption>
  </figure>
</div>

### HTML

```html
<figure>
  <img src="...">
  <figcaption>...</figcaption>
</figure>
```

### CSS

```scss
--figure-caption-margin: 1em 0;
--figure-caption-font-family: inherit;
--figure-caption-font-weight: inherit;
--figure-caption-font-size: var(--font-size-s);
--figure-caption-color: inherit;
--figure-caption-text-align: left;
```

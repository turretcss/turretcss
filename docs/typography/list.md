---
layout: docs
title: List
description: 
permalink: /docs/typography/list/
---

## Example

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

#### HTML

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

#### HTML

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

### CSS

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

--unordered-list-icon: disc;
--unordered-child-list-icon: disc;
```

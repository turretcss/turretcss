---
layout: docs
title: Base
page_title: Base - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of Turret and basic styling behaviours including global variables, fonts, color palettes, and media queries.
permalink: /docs/base/
---

## Reset



## Root

Sets @root-size on the `:root` element with responsive breakpoints.

```scss
--root-size: 10px;
--root-size-xl: var(--root-size);
--root-size-l: var(--root-size);
--root-size-m: var(--root-size);
--root-size-s: var(--root-size);
--root-size-xs: var(--root-size);
```

## Body

Some top level definitions for general styles on the `<body>` tag.

```scss
--body-font-family: var(--font-family);
--body-font-weight: var(--font-weight);
--body-color: var(--color);
--body-line-height: var(--line-height);
--body-letter-spacing: var(--letter-spacing);
--body-background: var(--background);
```

## Images

Images in Turret are made responsive-friendly via the addition of `max-width: 100%;` and `height: auto;` to images so that it scales nicely to the parent element.

<img src="{{ site.baseurl }}/assets/images/photo.svg">

```html
<img src="..." alt="...">
```

## Media Queries

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%">Breakpoint</th>
        <th width="25%">Device</th>
        <th width="25%">Min Width</th>
        <th width="25%">Max Width</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>xs</td>
        <td>Phone</td>
        <td class="is-null"></td>
        <td>767px</td>
      </tr>
      <tr>
        <td>s</td>
        <td>Tablet</td>
        <td>768px</td>
        <td>1023px</td>
      </tr>
      <tr>
        <td>m</td>
        <td>Laptop</td>
        <td>1024px</td>
        <td>1279px</td>
      </tr>
      <tr>
        <td>l</td>
        <td>Desktop</td>
        <td>1280px</td>
        <td>1679px</td>
      </tr>
      <tr>
        <td>xl</td>
        <td>Large Screen</td>
        <td>1680px</td>
        <td class="is-null"></td>
      </tr>
    </tbody>
  </table>
</div>

```scss
@custom-media --xs (max-width: 767px);
@custom-media --s (min-width: 768px) and (max-width: 1023px);
@custom-media --s-up (min-width: 768px);
@custom-media --s-down (max-width: 1023px);
@custom-media --m (min-width: 1024px) and (max-width: 1279px);
@custom-media --m-up (min-width: 1024px);
@custom-media --m-down (max-width: 1279px);
@custom-media --l (min-width: 1280px) and (max-width: 1679px);
@custom-media --l-up (min-width: 1280px);
@custom-media --l-down (max-width: 1679px);
@custom-media --xl (min-width: 1680px);
```

## Print

By default Turret's print styles are formatted for `A4` page size with a margin of `1.5cm 2cm`. Print styles include making text `@black`, and removing backgrounds from elements by default. Links are displayed next to anchors using `:after` pseudo content.

```scss
--print-page-size: A4;
--print-page-margin: 1.5cm 2cm;
```
